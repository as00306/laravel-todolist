<?php

namespace App\Repositories;

use App\Todo;

class TodoRepository
{
    private $todo;

    public function __construct(Todo $todo){
        $this->todo = $todo;
    }

    public function getData(){
        return $this->todo->get();
    }

    
    public function add(array $inputs){
            
        $this->todo->name = array_get($inputs, 'name');
        $this->todo->save();
    }

    public function del($id){
        $todo = $this->todo->find($id);
        $todo->delete();
    }


    public function upd($id, $name){
        $todo = $this->todo->find($id);
        $todo->name = $name;
        $todo->save();
    }
}
