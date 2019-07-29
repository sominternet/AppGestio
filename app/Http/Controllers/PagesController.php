<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }
    public function repetidors()
    {
        $repetidors = ['Repetidor1','Repetidor2','Repetidor3'];
        return view('pages.repetidors')->with('repetidors' , $repetidors);
    }
}
