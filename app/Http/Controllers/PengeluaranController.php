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
        $data->pengleuaran_tgl = date('Y-m-d H:i:s');
        $data->save();
        return back();
    }
    public function edit($id){
        $data['main'] = m_pengeluaran::find($id);
        return view('page.budget_management_pengeluaran.edit', $data);
    }
    public function update(Request $request, $id){
        // 
    }
}
