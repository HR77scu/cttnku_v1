<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// model 
use App\Models\Pengeluaran as m_pengeluaran;

class PengeluaranController extends Controller
{
    public function index(){
        $data['main'] = '';
        return view('page.budget_management.pengeluaran.index', $data);
    }
    public function create(){
        return view('page.budget_management.pengeluaran.create');
    }
    public function store(Request $request){
        $data = new m_pengeluaran;
        $data->pengeluaran_nm = $request->get('pengeluaran_nm');
        $data->pengeluaran_tgl = date('Y-m-d H:i:s');
        $data->save();
        return back()->with('status','Berhasil disimpan');
    }
    public function edit($id){
        $data['main'] = m_pengeluaran::find($id);
        return view('page.budget_management_pengeluaran.edit', $data);
    }
    public function update(Request $request, $id){
        $data = m_pengeluaran::find($id);
        $data->pengeluaran_nm = $request->get('pengeluaran_nm');
        $data->pengeluaran_tgl = $request->get('pengeluaran_tgl');
        $data->save();
        return back()->with('status','Berhasil disimpan');
    }
    public function delete($id){
        $data = m_pengeluaran::find($id);
        $data->delete();
        return back()->with('status','Berhasil dihapus');
    }

    /**
     * delete all data yang terintegrasi();
     */
    public function delete_required_integrated($id){
        // 
    }
}
