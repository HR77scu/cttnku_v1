<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mst_parameter as m_mst_parameter;

class MstParameterController extends Controller
{
    public function index(){
        $data = m_mst_parameter::get();
        return view('', $data);
    }
    // public function create(){
    //     return view('');
    // }
    public function store(Request $reuqest){
        $data = new m_mst_parameter;
        $data->group_parameter = $reuqest->get('group_parameter');
        $data->parameter_nm = $reuqest->get('parameter_nm');
        $data->parameter_field = $reuqest->get('parameter_field');
        $data->parameter_cd = $reuqest->get("parameter_cd");
        $data->parameter_val = $reuqest->get('parameter_val');
        $data->save();
        return back()->with('status','Berhasil disimpan');
    }
    public function delete($id){
        $data = m_mst_parameter::find($id);
        $data->delete();
        return back()->with('status','Berhasil disimpan');
    }
}
