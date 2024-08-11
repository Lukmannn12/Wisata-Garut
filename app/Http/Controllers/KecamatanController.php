<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KecamatanController extends Controller
{
    public function indexc(Request $request)
{
    if ($request->query('selected_kecamatan') != null) {
        $selectedKecamatan = Kecamatan::where('id', $request->query('selected_kecamatan'))->get();
    } else {
        $selectedKecamatan = Kecamatan::all();    
    }

    $kecamatans = Kecamatan::all();

    return view('kecamatan', compact('kecamatans','selectedKecamatan'));
}

    public function indexz()
    {
        $data = Kecamatan::all();
        return view('tabelkecamatan', compact('data'));
    }
     public function detail($id)
    {
        $data = Kecamatan::find($id);
        return view('detailkecamatan', compact('data'));
    }
    
    public function tambahKecamatan()
    {
    $data = null; // Beri nilai default null, atau isi dengan data jika diperlukan
    return view('tambahkecamatan', compact('data'));
    }

    public function simpanKecamatan(Request $request)
    {
        $request->validate([
            'nama_kecamatan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke direktori /public/images
        $gambar = $request->file('gambar')->store('images', 'public');

        // Dapatkan ID user yang sedang login
        $id_user = Auth::id();

        Kecamatan::create([
            'nama_kecamatan' => $request->nama_kecamatan,
            'gambar' => $gambar,
            'id_user' => $id_user, // Gunakan ID user yang sedang login
        ]);

        return redirect()->route('tabelkecamatan')->with('success', 'Kecamatan berhasil ditambahkan');
    }


        public function delete($id)
    {
        $data = Kecamatan::find($id);
        $data->delete();
        return redirect()->route('tabelkecamatan')->with('success', 'Kecamatan berhasil dihapus');
    }

    public function tampilkankecamatan($id)
{
    $data = Kecamatan::with('kecamatan')->find($id);
    return view('tampilkecamatan', compact('data'));
}

public function updatekecamatan(Request $request, $id)
{
    $data = Kecamatan::find($id);

    $request->validate([
            'nama_kecamatan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'id_user' => 'required',
    ]);

    // Jika ada gambar yang diunggah, simpan gambar baru
    if ($request->hasFile('gambar')) {
        // Menghapus gambar lama jika ada
        Storage::delete('public/' . $data->gambar);

        // Simpan gambar baru ke direktori /public/images
        $gambar = $request->file('gambar')->store('images', 'public');
        $data->gambar = $gambar;
    }
    // $userRole = Auth::user()->role;

    $data->update([
         'nama_kecamatan' => $request->nama_kecamatan,
            'gambar' => $gambar,
            // 'id_user' => $userRole,
    ]);

    return redirect()->route('tabelkecamatan')->with('success', 'Kecamatan berhasil diupdate');
}
}