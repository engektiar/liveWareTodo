<div>
     <h1>This is live ware </h1>

     <button wire:click="createNewTodo">Create New Todo</button>

<h2>This is all Todo</h2>

<ul>
     @foreach ($alltodos as $todo )
     <li>{{$todo->todo_item}}</li>
          
     @endforeach
</ul>
</div>
