{{-- <x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.app')

@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('profile.edit') }}">User Profile</a></li>
                    </ol>
                </nav>
            </div>
        </div>


    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="text-center">
                        <img src="{{ asset('img/ava3.webp') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        </div>
                       

                        <!-- <h5 class="my-3">John Smith</h5> -->
                        <p class="text-muted mb-1">

                        <!-- Name display -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" >Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                        </div>

                        <!-- Email Display -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ old('email', $user->email) }}" required autofocus autocomplete="email">
                        </div>
                        </p>

                        <div class="d-flex  mb-2">
                        <button type="submit" class="btn btn-success">SAVE</button>
                            
                        </div>
                    </div>
                </div>
            </div>
    </form>
   
            <div class="col-lg-8">
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="mb-0"><strong>UPDATE PASSWORD</strong></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Current Password</p>
                            </div>
                            <div class="col-sm-9">
                            <input type="password" class="form-control" id="update_password_current_password" name="current_password" placeholder="abc123@">
                                <!-- <p class="text-muted mb-0">example@example.com</p> -->
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-sm-3">
                                <p class="mb-0">New Password</p>
                            </div>
                            <div class="col-sm-9">
                               <input type="password" name="password" class="form-control" id="update_password_password" placeholder="abc123@">
                            </div>
                        </div>
                       
                        <div class="row my-2">
                            <div class="col-sm-3">
                                <p class="mb-0">Confirm Password</p>
                            </div>
                            <div class="col-sm-9">
                               <input type="password" name="password_confirmation" class="form-control" id="update_password_password_confirmation" placeholder="abc123@">
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <button type="submit" class="btn btn-success">SAVE</button>
                            </div>
                          
                        </div>
                    </div>
                </div>
           
                </form>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="row">
                            <div class="col-sm-12">
                            <p class="mb-6"><strong>Want To Delete Account?</strong>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">DELETE</button>
                            </p>
                            </div>
                        </div>
                                
                                
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</section>

    
@endsection