
@extends('todos.layout')

<div class="my-3 text-center">
    <button class="btn btn-danger  btn-lg"><a href="{{route('home')}}" class="text-decoration-none text-white">Back to Dashboard <i class="fas fa-home"></i></a></button>
</div>

    @section('content')


    <div class="justify-content-center">

        <div class="myborder">
            <h1 class="text-uppercase">My task list</h1>
            <button class="btn btn-success btn-lg my-2 w-25"><a href={{route('todo.create')}} class="text-decoration-none text-white">
                <span class="fas fa-plus"></span>
            </a></button>
        </div>
       
    
        <ul class="my-5">
            <x-alert />
            
            @forelse ($todos as $todo)
                <li class="d-flex justify-content-between ">

                    <div class=" col-lg-3">
                        @include('todos.complete-button')
                    </div>
                       
                   
                    <div class="col-lg-6">
                        @if($todo->completed)
                            <p class="font-weight-bold text-center taskpoints"><del>{{$todo->title}}</del></p>
                            @else
                            <a class="font-weight-bold text-center text-decoration-none text-dark cursor-pointer taskpoints" href="{{route('todo.show',$todo->id)}}">{{$todo->title}}</a>
                        @endif
                    
                    </div>
               
                   
                    <div class=" col-lg-3">
                        <a href="{{route('todo.edit', $todo->id)}}" class="text-decoration-none">
                            <span class="fas fa-edit text-warning iconsizer"></span>
                        </a>
                        
                        <span class="fas fa-trash text-danger mx-1 cursor-pointer iconsizer" 
                             onclick="event.preventDefault();
                             if(confirm('Are you really want to delete?')){
                             document.getElementById('form-delete-{{$todo->id}}')
                             .submit()}"></span>
                            
                        <form action="{{route('todo.destroy', $todo->id)}}" id="{{'form-delete-'.$todo->id}}" style="display:none" method="post">
                            @csrf
                            @method('delete')
                        </form>
                    </div>  
                </li>
                @empty
                <p>No task available, create one.</p>
            @endforelse
           
        </ul>
        
    </div>


    @endsection
    

