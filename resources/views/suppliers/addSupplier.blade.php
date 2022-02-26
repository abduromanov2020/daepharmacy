@extends('template.layout')

@section('container')
<div class="d-flex justify-content-center align-items-center">
    <form class="bg-transparent p-5 pt-4 rounded-5 shadow-lg text-white mt-5" method="post" action="/supplier">
        @csrf
        <h3 class="text-white fw-bold text-center mb-4">Add Supplier</h3>
        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" id="name"
            name="name" value="{{ old('name') }}">

        @error('name')
        <div class="invalid-feedback fw-600 fs-7">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-purple fw-bold px-3 py-2 mt-3 justify-content-end">Add Supplier</button>
    </form>
</div>
</div>

@endsection