@extends('template.layout')

@section('container')
<div class="d-flex justify-content-center align-items-center">
    <form class="bg-transparent p-5 pt-4 rounded-5 shadow-lg text-white mt-5" method="post"
        action="/stock/{{ $item->id }}">
        @method('patch')
        @csrf
        <h3 class="text-white fw-bold text-center">Edit Stock</h3>
        <select class="form-select mt-3 text-secondary" aria-label="Default select example" name="supplier_id">
            <option value="{{ $item->supplier_id }}">{{ $item->supplier->name }}</option>
        </select>

        <div class="row py-3">

            <div class="col-8">
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" id="name"
                    name="name" value="{{ old('name', $item->name) }}">

                @error('name')
                <div class="invalid-feedback fw-600 fs-7">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-4">
                <input type="text" class="form-control @error('value') is-invalid @enderror" placeholder="Stock"
                    id="value" name="value" value="{{ old('value', $item->value) }}">

                @error('value')
                <div class="invalid-feedback fw-600 fs-7">{{ $message }}</div>
                @enderror
            </div>

        </div>


        <input type="text" class="form-control @error('value') is-invalid @enderror" placeholder="Price" id="price"
            name="price" value="{{ old('price', $item->price) }}">

        @error('price')
        <div class="invalid-feedback fw-600 fs-7">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-purple fw-bold px-3 py-2 mt-3 justify-content-end">Update Stock</button>
    </form>
</div>
</div>

@endsection