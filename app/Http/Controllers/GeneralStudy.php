<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralStudy extends Controller
{
    public  function getters(){
        return view('getters');
    }

    public  function construct(){

        return view('construct');
    }

    public function heranca()
    {

        return view('heranca');

    }

}
