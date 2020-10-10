 @extends('todos.layout')

 <div class="my-3 text-center">
    <button class="btn btn-danger  btn-lg"><a href="{{route('home')}}" class="text-decoration-none text-white">Back to Home <i class="fas fa-home"></i></a></button>
</div>

 @section('content')

    <div class="justify-content-center">

        <div class="">
            <h1 class="text-2xl myborder pb-2"> What next you need toDo?</h1>
            <button class="btn btn-lg my-2 w-50"><a href={{route('todo.index')}} class="text-decoration-none text-success font-weight-bold"> 
                <span class="fas fa-arrow-circle-left text-success"></span>
                Back to Tasks</a></button>
        </div>
    </div>

 
    
    <div class=" row justify-content-center pt-1">
        <x-alert />
        <form action="{{route('todo.store')}}" method="post" class="py-5">
            @csrf
            <div class="col-12 text-center">
                <input type="text" name="title" class="py-2 px-2 my-1 border w-100" placeholder="Title"> 
            </div>
           
            <div class="col-12 text-center">
                <textarea name="description" class="rounded border p-2 my-1" id="" cols="30" rows="6" placeholder="Description"></textarea>
            </div>

          {{--   <div class="col-12 text-center mt-2">

    
                @livewire('step')
                
            </div> --}}
           
            <div class="col-12 text-center mt-3">
                <input class="btn btn-success btn-lg w-50" type="submit" value="Create" class="p-2 border rounded w-25">
            </div>
           
        </form>
      
       {{--  <div class="col-12">
            <a href="{{route('todo.index')}}" class="m-5 py-1 px-1 text-decoration-none text-dark font-weight-bold border">Back</a>
        </div> --}}
        
    </div>
   

@endsection
