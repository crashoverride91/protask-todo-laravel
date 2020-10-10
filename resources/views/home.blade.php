@extends('layouts.app')

@section('content')
<div class="bg-home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-4">
                    <div class="card-header bg-nav font-weight-bold text-uppercase"><i class="fas fa-house-user icon text-dark mx-1"></i>{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <div>
                        <h3>Welcome <a href="" class="text-primary text-decoration-none nocurs">{{ Auth::user()->name }}</a></h3>
                        </div>
                    </div>

                    
                    <div class="card-body ">

                        <div class="justify-content-center text-center my-2">
                            <h4 class="mb-3">What needs to be done?</h4>
                            <button class="btn btn-danger w-25 btn-lg"><a href="{{route('todo.index')}}" 
                                class="text-white text-decoration-none">Open task list</a></button>
                        </div>

                        <hr class="myborder">
                        


                        <h5 class="">Upload your avatar</h5>
                    {{-- @include('layouts.flash') --}}
                    <x-alert >
                        <p>Here is response from image  upload</p> 
                    </x-alert>{{-- Display component --}}
                        <form action="/upload" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image"/>
                            <input type="submit" value="Upload" />
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
