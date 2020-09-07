<?php

namespace App\Http\Controllers;

// import file model Article
use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //untuk article


    //buat ceate
     public function buat() {

        // Kmau = nama model
       // $po = Article::all();
        
        // dia = nama file nya dia.blade.php di views
        // sayadia = nama variabel di atas $sayadia
        return view('buat_input');
    }

   public function create() {

      return view('buat_input');
    }


    //mehod store buat ambil data inputan user
     public function store(Request $request) {

       dd($request);
    }
}
