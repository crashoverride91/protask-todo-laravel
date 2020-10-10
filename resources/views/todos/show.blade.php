@extends('todos.layout')

@section('content')


   <div class="  justify-content-center ">

       <div class="">
           <h1 class="text-2xl myborder pb-2 font-weight-bold "> {{$todo->title}}</h1>
           <button class="btn btn-lg my-2 w-50"><a href={{route('todo.index')}} class="text-decoration-none text-success">
            <span class="fas fa-arrow-left text-success"></span>
            Back to Task List </a></button>
       </div>
   </div>

        <div>
            <div>
                <h4 class="text-lg font-weight-bold mt-4">Description</h4>
            <p class="text-lg">{{$todo->description}}</p>
            </div>

            @if($todo->steps->count() > 0) 
                <div class="py-4">
                    <h4 class="text-lg">Step for this task</h4>
                    @foreach ($todo->steps as $step)
                    <p>{{$step->name}}</p>
                     @endforeach
                </div>
                @endif
        </div>

 
       

@endsection
