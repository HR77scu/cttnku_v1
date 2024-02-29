<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KategoriAkun as m_kategori_akun;

class KategoriAkunController extends Controller
{
    public function index(){
        $data['main'] = m_kategori_akun::get();
        return view('', $data);
    }
    public function store(Request $request){
        $data = new m_kategori_akun;
        $data->kategori_akun_nm = $request->get('kategori_kun_nm');
        $data->save();
        return back()->with('status','Berhasil disimpan');
    }
    public function delete($id){
        $data = m_kategori_akun::find($id);
        $data->delete();
        return back()->with('status','Berhasil disimpan');
    }
}
