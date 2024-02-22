<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index (){
        return "Selamat Datang";
    }

    public function about (){
        return "Echa Aprilya AP - 2141762041";
    }

    public function articles ($Id){
        return "Halaman Artikel dengan Id ". $Id;
    }
}
