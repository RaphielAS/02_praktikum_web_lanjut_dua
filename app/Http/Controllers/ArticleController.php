<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //artikel
    public function artikel ($id){
        echo 'Halaman artikel dengan ID '.$id;
    }
}
