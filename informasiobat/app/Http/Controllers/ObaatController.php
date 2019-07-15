<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Kategori;
use Illuminate\Http\Request;

class ObaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $data = Obat::all();
        return view('pages.produk.produk',compact('data', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $kategoris = Kategori::all();
       return view('pages.produk.t_obat', compact('kategoris'));  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $gambar = $request->file('gambar')->store('gambar');
      //return $request->file('gambar');
      // /$uploadedFile= $request->file('gambar');
      // $imgName=time().'.'.$uploadedFile->getClientOriginalExtension();
      // $path=public_path('resources/img');
      // $uploadedFile->move($path,$imgName);


      $obat = new Obat();
      $obat->namaobat = $request->namaobat;
      $obat->kategori = $request->kategori;
      $obat->tentang = $request->tentang;
      $obat->gambar = $gambar;
      $obat->slug = str_slug($request->namaobat);
      $obat->save();

      return redirect()->route('obat');

      // $data=[
      //   'namaobat' =>$request->namaobat,
      //   'kategori' =>$request->kategori,
      //   'tentang' =>$request->tentang,
      //   'gambar' =>$request->gambar,
      // ];
      // $simpan=Obat::create($data);
      // if($simpan)
      // {return redirect()->back();
      // }else{
      //     return $simpan;
      // }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obat  $Obat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obat  $Obat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $kategories = Kategori::all();
        $data = Obat::find($id);
        return view('pages.produk.edit_obat',compact('data','kategories'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obat  $Obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // //return $request->file('gambar');
      // / $uploadedFile= $request->file('gambar');
      // $imgName=time().'.'.$uploadedFile->getClientOriginalExtension();
      // $path=public_path('resources/img');
      // $uploadedFile->move($path,$imgName);

      $obat = Obat::find($id);
      $obat->namaobat = $request->namaobat;
      $obat->kategori = $request->kategori;
      $obat->tentang = $request->tentang;
      $gambar = $request->file('gambar');


      if ($gambar == ''){
            $obat->gambar = $request->old_gambar;
        }else{
            $obat->gambar = $request->file('gambar')->store('obat');
        }
        $obat->update();
        return redirect()->route('obat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obat  $Obat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

          $item = Obat::find($id);
          $item->update(['status'=>'0']);
          return redirect()->route('obat');    //
    }
}
