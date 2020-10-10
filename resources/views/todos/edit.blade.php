@extends('todos.layout')

@section('content')
    {{-- {{$todo->title}} --}}


        
    <div class="text-center">

        <div class="justify-content-center ">
            <div class="">
                <h1 class="text-2xl  pb-1 myborder">Update this todo list</h1>
                <button class="btn btn-lg  w-50"><a href={{route('todo.index')}} class="text-decoration-none text-success">
                    <span class="fas fa-arrow-circle-left text-success"></span>
                    Back to Tasks</a></button>
            </div>
        </div>

       
        <x-alert />
        <div class="justify-content-center">
            <form action="{{route('todo.update',$todo->id)}}" method="post" class="py-5">
                @csrf
                @method('patch')
    
                <div class="col-12 text-center">
                <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 my-1 border" placeholder="Title"> 
                </div>
               
                <div class="col-12 text-center">
                <textarea name="description" class="rounded border p-2 my-1" id="" cols="30" rows="8" placeholder="Description">{{$todo->description}}</textarea>
                </div>

               {{--  <div  class="py-2">
                    @livewire('edit-step',['steps' => $todo->steps])
                </div> --}}
               
                <div class="col-12 text-center">
                    <input  type="submit" value="Update" class=" btn btn-success btn-lg p-2 border rounded w-25">
                </div>
            {{-- <input type="text" name="title" value="{{$todo->title}}"class="py-2 px-2 border"> --}}
                {{-- <input type="submit" value="Update" class="p-2 border rounded"> --}}
            </form>
        </div>
    

    </div>



@endsection