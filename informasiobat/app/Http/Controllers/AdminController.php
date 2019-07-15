<?php

namespace App\Http\Controllers;
use app\Obat;
use App\Kategori;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      return view('pages.beranda');
    }

    public function kategori(){
      $kategori = Kategori::all();
      return view('pages.produk.kategori', compact('kategori'));
    }
    public function kategoricreate(){
      return view ('pages.produk.t_kategori');
    }
    public function kategoristore(Request $request){
      $kategori= new Kategori();
      $kategori->nama=$request->nama;
      $kategori->save();
      return redirect()->route('kategori');
    }

    public function kategoriedit ($id){
      $kategori = Kategori::find($id);
      return view('pages.produk.e_kategori', compact('kategori'));

    }
    public function kategoriupdate(Request $request, $id){
      $kategori= Kategori::find($id);
      $kategori->nama=$request->nama;
      $kategori->update();
      return redirect()->route('kategori');
    }

    public function kategoridestroy($id){
      $kategori = Kategori::find($id);
      $kategori->delete();
      return redirect()->route('kategori');
    }

  }
