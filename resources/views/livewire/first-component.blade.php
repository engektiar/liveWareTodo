<div class="container my-5">
     <h1>This is live ware </h1>
     @if (session('success'))
     <div class="alert alert-success">{{session('success')}}</div>
          
     @endif

 <form class="form" wire:submit="createNewTodo" action="">
     <div class="from-group">
          <label class="form-label" for="">Type Your todo <span class="text-danger">*</span></label> 
          <input class="form-control" wire:model="todo_item" type="text"> 
          
     </div>
     @error('todo_item')
     <div class="alert alert-danger my-2">
  {{$message}}
     </div>
     @enderror
     <button class="mt-2 btn btn-primary">Create New Todo</button>

 </form>

<div class="shadow p-4 my-3">
     <h2>This is Todo List</h2>

<ul>
     @foreach ($alltodos as $todo )
     <li>{{$todo->todo_item}}</li> 
     @endforeach
     {{$alltodos->links()}}
</ul>
</div>



</div>


