<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function userhome(){
      $obats=Obat::orderBy('id','DESC')->where('status', '1')->paginate(4);
      $header=Obat::orderBy('id','DESC')->where('status', '1')->paginate(3);
      $popular=Obat::orderBy('id','DESC')->where('status', '1')->paginate(6);

      return view('pages-user.home',compact('obats','header','popular'));
    }



    public function userobat(){
      $obats=Obat::orderBy('id','DESC')->where('status', '1')->paginate(4);
      $header=Obat::orderBy('id','DESC')->where('status', '1')->paginate(3);
      $popular=Obat::orderBy('id','DESC')->where('status', '1')->paginate(6);

      return view('pages-user.obat',compact('obats','header','popular'));
    }

    public function obatdetail($slug){
      $obats=Obat::where('slug',$slug)->first();
      $header=Obat::where('slug',$slug);
      $popular=Obat::orderBy('id','DESC')->where('status', '1')->paginate(6);
      return view('pages-user.detail',compact('obats','header','popular'));
    }
public function aboutuser(){
      $obats=Obat::all();
      return view('pages-user.about',compact('obats'));
    }

    public function contact()
    {
            return view('pages-user.contact');

    }
}
