<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'NIM : 2241720232 <br>Nama : Eddo Dava Alfarisi';
    }
    public function articles($id){
        return ' Halaman Artikel dengan ID '.$id;
    }
}
