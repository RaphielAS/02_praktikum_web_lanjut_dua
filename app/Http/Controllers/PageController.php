<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //home
    public function index (){
        echo 'Selamat Datang';
    }
    //about
    public function about (){
        echo 'Ilham Nur Febrianto Indra Wahyudi<br>1941720178';
    }
    //artikel
    public function artikel ($id){
        echo 'Halaman artikel dengan ID '.$id;
    }
}
