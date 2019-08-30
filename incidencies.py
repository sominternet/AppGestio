import MySQLdb
import datetime
import time



db = MySQLdb.connect(host = "134.0.10.65", user = "myaugute",passwd = "xGCYOm1V", db = "auguteaplicacions")
cur = db.cursor()
cur.execute("select * from repetidors_routers");
llista_routers_repetidors = cur.fetchall()
for router_repetidor in llista_routers_repetidors:
    cur.execute("select * from log_master_routers where id_router = "  + str(router_repetidor[1]) )
    objectes = cur.fetchall()
    for objecte in objectes:
        if(objecte[4] == "estat" or objecte[4] == "rate"):
            cur.execute('select * from log_routers where id_repetidor_router = ' + str(router_repetidor[0]) +' and id_log_master_routers = '+ str(objecte[0]) + ' ORDER BY id_log_routers desc LIMIT 2')
            
            variables = cur.fetchall()
            if(variables[0][4] != variables[1][4]):
                if(objecte[4] == "estat"):
                    val1 = variables[1][4]
                    val2 = variables[0][4]
                    if(val1 == "1"): val1 = "up"
                    else: val1 = "down"
                    if(val2 == "1"): val2 = "up"
                    else: val2 = "down"
                else:
                    val1 = int(variables[1][4])/1000000
                    val2 = int(variables[0][4])/1000000
                date = datetime.datetime.now()
                date_conv = date.strftime("%Y-%m-%d %H:%M:%S")
                print date_conv 
                incidencia = ("incidencia a la ip " +str(router_repetidor[3]) + " repetidor : "+ str(router_repetidor[6]) +" id repetidor (" + str(router_repetidor[8]) + ") la variable "+ str(objecte[3]) + " " + str(objecte[4]) +" ha passat de tenir un valor "+ str(val1)+" a tenir un valor " + str (val2))
                print incidencia;
                sentence = ("INSERT INTO incidencies (id_repetidor,data_incidencia, incidencia) VALUES (  "+ str(router_repetidor[6]) +" ,'"+ str(date_conv) +"', '"+ str(incidencia) +"')")
                cur.execute(sentence)
db.commit()
db.close()
