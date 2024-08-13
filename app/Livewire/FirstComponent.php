<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;


class FirstComponent extends Component
{
    use WithPagination;
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
        $alltodos = Todo::latest()->paginate(5);
        return view('livewire.first-component',compact('alltodos'));
    }
}
