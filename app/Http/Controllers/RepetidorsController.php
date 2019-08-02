<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repetidors;
use DB;

class RepetidorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $llista_repetidors =  repetidors::all();
        return view('repetidors.index')->with ('llista_repetidors', $llista_repetidors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('repetidors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'ciutat' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'ip_publica' => 'required',
            'nom' => 'required',



        ]);
        $repetidor = new repetidors;
        $repetidor->codi = $request->input('codi');
        $repetidor->ciutat = $request->input('ciutat');
        $repetidor->adreça = $request->input('adreça');
        $repetidor->lat = $request->input('lat');
        $repetidor->long = $request->input('long');
        $repetidor->ip_publica = $request->input('ip_publica');
        $repetidor->ip_privada_ppoe = $request->input('ip_privada_ppoe');
        $repetidor->nom_radius = $request->input('nom_radius');
        $repetidor->pwd_radius = $request->input('pwd_radius');
        $repetidor->nom = $request->input('nom');
        $repetidor->save();
        return redirect('/repetidors')-> with('success','Repetidor insertat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return repetidors::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
