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

    public function abstrato()
    {
        return view('abstract');

    }

    public function atributosestaticos()
    {

        return view('atributosestaticos');
    }

    public function polimorfismo()
    {

        return view('polimorfismo');

    }

    public function interfaces()
    {

        return view('interfaces');

    }

    public function clon()
    {
        return view('referencia-clonagem');
    }

    public function excecoes()
    {

        return view('excecoes');

    }


    public function relacaoobjeto()
    {

        return view('relacao-objeto');

    }

}
