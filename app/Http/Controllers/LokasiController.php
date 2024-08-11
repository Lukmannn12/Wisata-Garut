<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use Illuminate\Support\Facades\Storage;

class LokasiController extends Controller
{
   // Example in Controller

public function indexl()
{
    $data = Lokasi::take(12)->get();
    return view('detail', compact('data'));
}


    public function indexzl()
    {
        $data = Lokasi::all();
        return view('tabellokasi', compact('data'));
    }
    
    public function tambahLokasi()
    {
    $data = null; // Beri nilai default null, atau isi dengan data jika diperlukan
    return view('tambahlokasi', compact('data'));
    }

   public function simpanLokasi(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'travel_time_car' => 'required',
        'travel_time_motor' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Check if a file was uploaded before storing it
    if ($request->hasFile('image')) {
        $gambar = $request->file('image')->store('images', 'public');
    } else {
        // Set a default value for $gambar when no file is uploaded
        $gambar = 'default_image.jpg'; // Adjust the default image file name as needed
    }

    Lokasi::create([
        'name' => $request->name,
        'description' => $request->description,
        'travel_time_car' => $request->travel_time_car,
        'travel_time_motor' => $request->travel_time_motor,
        'image' => $gambar,
    ]);

    return redirect()->route('tabellokasi')->with('success', 'Lokasi berhasil ditambahkan');
}

        public function delete($id)
    {
        $data = Lokasi::find($id);
        $data->delete();
        return redirect()->route('tabellokasi')->with('success', 'Lokasi berhasil dihapus');
    }

    public function tampilkanlokasi($id)
{
    $data = Lokasi::find($id);
    return view('tampillokasi', compact('data'));
}

public function updatelokasi(Request $request, $id)
{
    $data = Lokasi::find($id);

    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'travel_time_car' => 'required',
        'travel_time_motor' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $image = $data->image; // Set the default value of $image to the current image

    // Jika ada gambar yang diunggah, simpan gambar baru
    if ($request->hasFile('image')) {
        // Menghapus gambar lama jika ada
        Storage::delete('public/' . $data->image);

        // Simpan gambar baru ke direktori /public/images
        $image = $request->file('image')->store('images', 'public');
    }

    $data->update([
        'name' => $request->name,
        'description' => $request->description,
        'travel_time_car' => $request->travel_time_car,
        'travel_time_motor' => $request->travel_time_motor,
        'image' => $image,
    ]);

    return redirect()->route('tabellokasi')->with('success', 'Lokasi berhasil diupdate');
}



}
