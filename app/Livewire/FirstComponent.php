<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;


class FirstComponent extends Component
{
  
    public function createNewTodo(){
        Todo::create([
            'todo_item'=>"Md Ektiar Hossen"
        ]);
    }
 
    public function render()
    {
        $alltodos=Todo::get();
        return view('livewire.first-component',compact('alltodos'));
    }
}
