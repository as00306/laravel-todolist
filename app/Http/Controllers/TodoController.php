<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $todos;

    public function __construct(\App\Repositories\TodoRepository $todos){
        $this->todos = $todos;

    }

    public function index(){
        
        return view('todolist', ['todos' => $this->todos->getData()]);
    }

    public function add(Request $request){
        
        $this->todos->add($request->all());

        return redirect('/');

    }

    public function del(Request $request){
        $this->todos->del($request->get('id'));
    }

    public function upd(Request $request){
        
        $this->todos->upd($request->get('id'), $request->get('name'));

    }

}
