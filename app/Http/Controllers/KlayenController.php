<?php

namespace App\Http\Controllers;
// import file model Client
use App\Client;
// import file Model Portof nya
use App\Portof;

use Illuminate\Http\Request;

class KlayenController extends Controller
{
    //controller klayen
     public function klayen() {

        // Kmau = nama model
        $cl = Client::all();
        
        // dia = nama file nya dia.blade.php di views
        // sayadia = nama variabel di atas $sayadia
        return view('file_client', compact('cl'));
    }

    //buat portofolio
     public function porto() {

        // Kmau = nama model
        $po = Portof::all();
        
        // dia = nama file nya dia.blade.php di views
        // sayadia = nama variabel di atas $sayadia
        return view('single', compact('po'));
    }


    //buat ceate
     public function buat() {

        // Kmau = nama model
        $po = Portof::all();
        
        // dia = nama file nya dia.blade.php di views
        // sayadia = nama variabel di atas $sayadia
        return view('buat_input');
    }

    //mehod store buat ambil data inputan user
     public function store(Request $request) {
       
       // validaasi
        $request->validate( [
           'title' => 'required',
           'subject' => 'required', ]
        );
      // dd($request);

        $variabel = new Portof;
         $variabel->nama = $request->title;
         $variabel->harga = $request->subject;
         $variabel->save();

         //lalu arahkan ke portopolio data nya
         return redirect ('/portofolio');
    }

    // untuk edit
    public function edit($id){
       $portof = Portof ::find($id);

       return view ('edit', compact('portof'));
    }

    // update
    public function update(Request $Request, $id){
         
           $portof = Portof ::find($id);
           $portof->nama = $request->title;
            $portof->harga = $request->subject;

            $portof->save();

            return redirect('/portofolio');
    }

    // delete
    public function destroy($id){
      
      dd('happus', $id);
    }
}
