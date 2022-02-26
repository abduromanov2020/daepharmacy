@extends('template.layout')

@section('container')
<div class="d-flex justify-content-center align-items-center mt-5">
    <form class="bg-transparent p-5 pt-4 rounded-5 shadow-lg text-white mt-5" method="put" action="/user">
        @csrf
        <h3 class="text-white fw-bold text-center mb-4">Edit User</h3>

        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username"
            name="username" value="{{ old('username', $user->username) }}">
        @error('username')
        <div class="invalid-feedback fw-600 fs-7">
            {{ $message }}
        </div>
        @enderror

        <input type="email" class="form-control mt-3 @error('email') is-invalid @enderror" placeholder="Email"
            name="email" value="{{ old('email', $user->email) }}">
        @error('email')
        <div class="invalid-feedback fw-600 fs-7">
            {{ $message }}
        </div>
        @enderror

        <button type="submit" class="btn btn-purple fw-bold px-3 py-2 mt-3 justify-content-end">Update User</button>
    </form>
</div>

@endsection