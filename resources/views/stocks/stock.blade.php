@extends('template.layout')

@section('container')


<div class="container bg-transparent p-5 rounded-5 shadow-lg text-white pt-1">
    <h2 class="text-white fw-bolder text-center py-2 mt-3">Stock</h2>

    <div class="d-flex justify-content-end">
        <a href="/stock/create" class="btn btn-light mb-4 rounded-5 py-2 px-3">Add Stock</a>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless table-rounded">
            <colgroup>
                <col span="1" style="width: 25%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 25%;">
            </colgroup>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Supplier</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $item): ?>
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->value }}</td>
                    <td>{{ $item->supplier->name }}</td>
                    <td>
                        <a href="/stock/{{ $item->id }}/edit" class="btn py-2 px-3 btn-outline-light rounded-5">Edit</a>
                        <form action="/stock/{{ $item->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-purple rounded-5"
                                onclick="return confirm('Are You Sure Delete This Items?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
@endsection