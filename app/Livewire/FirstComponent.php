<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;


class FirstComponent extends Component
{
  
    public $todo_item;
    public function createNewTodo(){
        Todo::create([
            'todo_item'=>$this->todo_item 
        ]);
    }
 
    public function render()
    {
        $alltodos=Todo::get();
        return view('livewire.first-component',compact('alltodos'));
    }
}
