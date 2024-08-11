<?php

namespace App\Http\Controllers;

use App\Models\Pemesan;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesanController extends Controller
{
    public function index()
    {
        $data = Pemesan::all();
        return view('admin', compact('data'));
    }

    public function indexx()
    {
        $data = Pemesan::all();
        return view('pemesan', compact('data'));
    }

    public function indexzz()
    {
        $data = Pemesan::all();
        return view('formpemesanan', compact('data'));
    }

    public function tambahdata(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'tanggal' => 'required|date',
            'jumlahtiket' => 'required|integer|min:1',
            'id_wisata' => 'required|exists:wisatas,id',
        ]);
        
        Pemesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'tanggal' => $request->tanggal,
            'jumlahtiket' => $request->jumlahtiket,
            'id_wisata' => $request->id_wisata,
        ]);

        return redirect()->route('pemesan')->with('success', 'Data berhasil di Tambahkan');
    }

    public function pemesan(Request $request)
    {
        $data = Pemesan::where('email',Auth::user()->email)->get();

        return view('pemesan', compact('data'));
    }

    public function formpemesanan()
    {
        $data = Wisata::all();
        return view('formpemesanan', compact('data'));
    }

    public function tampilkandata($id)
    {
        $data = Pemesan::find($id);
        $wisatas = Wisata::all();
        return view('tampildata', compact(['data', 'wisatas']));
    }



    public function delete($id)
    {
        $data = Pemesan::find($id);
        $data->delete();
        return redirect()->route('admin')->with('success', 'Data berhasil di delete');
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $data = Pemesan::where('nama', 'LIKE', '%' . $q . '%')
            ->orWhere('email', 'LIKE', '%' . $q . '%')
            ->orWhere('tanggal', 'LIKE', '%' . $q . '%')
            ->orWhere('jumlahtiket', 'LIKE', '%' . $q . '%')
            ->orWhere('pembayaran', 'LIKE', '%' . $q . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('search', compact('data'));
    }
}