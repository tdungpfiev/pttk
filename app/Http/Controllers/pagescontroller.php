<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\nhom;
use App\truyen;


class pagescontroller extends Controller
{
    //
    public function index()
    {
    	return view('layouts.home');
    }

    public function index_qltk()
    {
    	return view('layouts.master_qltk');
    }

    public function nhom()
    {
    	return view('quanlyTK.nhom');
    }

    public function index_qlnd()
    {
        $truyens = truyen::all();
        return view('quanlyND.index', ['dstruyen'=> $truyens, 'chartTruyens'=>$truyens]);
    }

    
}


