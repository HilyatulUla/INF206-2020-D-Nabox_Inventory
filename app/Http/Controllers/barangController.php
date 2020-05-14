<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class barangController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $folder_tujuan = 'img';
        $file->move($folder_tujuan, $nama_file);

        Barang::create([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jenis' => $request->jenis,
                'gambar' => $nama_file
        ]);

        return redirect('/'.$request->jenis)->with('status', 'Data '.$request->nama.' berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        return view('edit-barang', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
         $nama_file = $barang->gambar;
        if($request->hasFile('gambar')){
            $nama_file = time()."_".$request->file('gambar')->getClientOriginalName();
            $folder_tujuan = 'img';
            $request->file('gambar')->move($folder_tujuan, $nama_file);
            $image_path = "img/".$barang->gambar;
            if(File::exists($image_path))
                File::delete($image_path);
            }

            Barang::where('id', $barang->id)
            ->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jenis' => $request->jenis,
                'gambar' => $nama_file
            ]);

             return redirect('/'.$request->jenis)-> with('status','Data '.$request->nama.' berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        $image_path = "img/".$barang->gambar;
        if(File::exists($image_path))
            File::delete($image_path);

        Barang::destroy($barang->id);
        return redirect('/'.$barang->jenis) -> with('status','Data '.$barang->nama.' berhasil dihapus');
    }

    public function barangdag(){
        $makanan  = Barang::orderBy('id', 'desc')->where('jenis', 'barangdag')->paginate(10);
        return view('barang', compact('barangdag'));
    }     
}