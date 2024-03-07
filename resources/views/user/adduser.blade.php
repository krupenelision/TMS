@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="p-4 my-3 bg-white">
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label ">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="emailHelp">
        @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror

      </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror

    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
      @error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
    </div>
    <div class="mb-3">
        <label for="">Roles</label>
        <select name="roles[]" class="form-control">
            <option value="">Select Role</option>
            @foreach ($roles as $role)
            <option value="{{ $role }}">{{ $role }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div> --}}
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create User
                        <a href="{{ route('users.index') }}" class="btn btn-danger float-right">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" />
                            @error('name')
                             <span class="text-danger">
                                 {{ $message }}
                             </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control"/>
                            @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control"/>
                            @error('password')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Roles</label>
                            <select name="roles" class="form-control">
                                <option disabled selected>Select Role</option>
                                @foreach ($roles as $role)
                                <option value="{{ $role }}">{{ $role }}</option>
                                @endforeach
                            </select>
                            @error('roles')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

