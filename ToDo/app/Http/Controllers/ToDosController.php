<?php

namespace App\Http\Controllers;
use App\ToDo;
use Illuminate\Http\Request;
class ToDosController extends Controller
{
    public function index(){
        $data=ToDo::all();
        return view('todo')->with('data',$data);
    }
    public function store(){
        $s=new ToDo;
        $s->todo=request('todo');
        $s->save();
        return redirect('/todo');
    }
    public function del($id){
        $del=ToDo::find($id);
        $del->delete();
        return redirect('/todo');
    }
    public function com($id){
        $del=ToDo::find($id);
        $del->complete=1;
        $del->save();
        return redirect('/todo');
    }
    public function uncom($id){
        $del=ToDo::find($id);
        $del->complete=0;
        $del->save();
        return redirect('/todo');
    }
}
