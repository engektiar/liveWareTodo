<div>
     <h1>This is live ware </h1>

 <form action="">
   <label for="">Type Your todo</label><br><br>
   <input wire:model="todo_item" type="text"><br><br>
   <button wire:click.prevent="createNewTodo">Create New Todo</button>
 </form>


<h2>This is all Todo</h2>

<ul>
     @foreach ($alltodos as $todo )
     <li>{{$todo->todo_item}}</li>
          
     @endforeach
</ul>
</div>
