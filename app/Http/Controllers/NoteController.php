<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note as m_note;

class NoteController extends Controller
{
    public function index(){
        $data['note'] = m_note::orderby('created_at','DESC')->get();
        $data['sum_a_created_note'] = m_note::count_by_today_created_at();
        return view('page.note.index', $data);
    }
    public function create(){
        return view('page.note.create');
    }
    public function store(Request $request){
        $data = new m_note;
        $data->title = $request->get('title');
        if($request->get('type_note') == ''){
            $data->type_note = 'no_script';
        }else{
            $data->type_note = $request->get('type_note');

        }
        $data->note_content = $request->get('note_content');
        $data->save();
        return redirect()->route('note.index')->with('status','Berhasil disimpan');
    }
    public function delete($id){
        $data = m_note::find($id);
        $data->delete();
        return back()->with('status','Berhasi dihapus');
    }
    public function show($id){
        $data['note'] = m_note::find($id);
        $update = m_note::find($id);
        $update->last_opn = date('Y-m-d H:i:s');
        $update->save();
        return view('page.note.show', $data);
    }
    public function edit($id){
        $data['note'] = m_note::find($id);
        $update = m_note::find($id);
        $update->last_opn = date('Y-m-d H:i:s');
        $update->save();
        return view('page.note.edit', $data);
    }
    public function update(Request $request, $id){
        $data = m_note::find($id);
        $data->title = $request->get('title');
        $data->type_note = $request->get('type_note');
        $data->note_content = $request->get('note_content');
        $data->last_opn = date('Y-m-d H:i:s');
        $data->save();
        return back()->with('status','Berhasil disimpan');
    }
}
