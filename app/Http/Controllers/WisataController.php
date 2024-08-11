<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    public function indexcl()
    {
        $data = Wisata::all();
        return view('wisata', compact('data'));
    }
    public function indexzl()
    {
        $data = Wisata::with('kecamatan')->get();
        return view('tabelwisata', compact('data'));
    }
     public function detail($id)
    {
        $data = Wisata::find($id);
        return view('detailwisata', compact('data'));
    }
    
    public function tambahWisata()
{
    $kecamatans = Kecamatan::all(); // Mengambil semua data kecamatan dari database
    return view('tambahwisata', compact('kecamatans'));
}

    public function simpanWisata(Request $request)
{
       
    $request->validate([
        'nama_wisata' => 'required',
        'sejarah' => 'required',
        'deskripsi' => 'required',
        'fasilitas' => 'required',
        'lokasi' => 'required',
        'harga_tiket' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'id_kecamatan' => 'required',

    ]);

    $kecamatan = Kecamatan::where('id', $request->id_kecamatan)->first();
    $gambar = $request->file('gambar')->store('images', 'public');
    $id_user = Auth::id();
    
    Wisata::create([
        'nama_wisata' => $request->nama_wisata,
        'sejarah' => $request->sejarah,
        'deskripsi' => $request->deskripsi,
        'fasilitas' => $request->fasilitas,
        'lokasi' => $request->lokasi,
        'harga_tiket' =>  $request->harga_tiket,
        'gambar' => $gambar,
        'id_kecamatan' => $kecamatan->id,
        'id_user' => $id_user,
    ]);
    

    return redirect()->route('tabelwisata')->with('success', 'Wisata berhasil ditambahkan');
}


        public function delete($id)
    {
        $data = Wisata::find($id);
        $data->delete();
        return redirect()->route('tabelwisata')->with('success', 'Wisata berhasil dihapus');
    }

public function tampilkanwisata($id)
{
    $data = Wisata::with('kecamatan')->find($id);
    $kecamatans = Kecamatan::all();
    return view('tampilwisata', compact('data', 'kecamatans'));
}

public function updatewisata(Request $request, $id)
{
    $data = Wisata::find($id);

    $request->validate([
        'nama_wisata' => 'required',
        'sejarah' => 'required',
        'deskripsi' => 'required',
        'fasilitas' => 'required',
        'lokasi' => 'required',
        'harga_tiket' => 'required',
        'gambar' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        'id_kecamatan' => 'required',
    ]);

    // Inisialisasi variabel gambar dan kecamatan
    $gambar = $data->gambar;
    $kecamatan = $data->kecamatan;

    // Jika ada gambar yang diunggah, simpan gambar baru
    if ($request->hasFile('gambar')) {
        // Menghapus gambar lama jika ada
        Storage::delete('public/' . $data->gambar);
        // Simpan gambar baru ke direktori /public/images
        $gambar = $request->file('gambar')->store('images', 'public');
    }

    // Ambil data kecamatan baru jika ada perubahan
    if ($data->id_kecamatan != $request->id_kecamatan) {
        $kecamatan = Kecamatan::find($request->id_kecamatan);
    }

    $data->update([
        'nama_wisata' => $request->nama_wisata,
        'sejarah' => $request->sejarah,
        'deskripsi' => $request->deskripsi,
        'fasilitas' => $request->fasilitas,
        'lokasi' => $request->lokasi,
        'harga_tiket' =>  $request->harga_tiket,
        'gambar' => $gambar,
        'id_kecamatan' => $kecamatan->id,
    ]);

    return redirect()->route('tabelwisata')->with('success', 'Wisata berhasil diupdate');
}



}

