<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;


class FirstComponent extends Component
{
  
    public $todo_item;
    public function createNewTodo(){
        $this->validate([
             'todo_item'=>'required|min:5|max:20'
        ]);
        Todo::create([
            'todo_item'=>$this->todo_item 
        ]);

        $this->reset(['todo_item']);
        request()->session()->flash('success', 'Todo added successfully.');

    }
 
    public function render()
    {
        $alltodos=Todo::latest()->get();
        return view('livewire.first-component',compact('alltodos'));
    }
}
