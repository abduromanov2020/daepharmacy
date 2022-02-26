@extends('template.layout')

@section('container')


<div class="container bg-transparent p-5 rounded-5 shadow-lg text-white pt-1 table-responsive">
    <h2 class="text-white fw-bolder text-center py-2 mt-3">Supplier</h2>

    <div class="d-flex justify-content-end">
        <a href="/supplier/create" class="btn btn-light mb-4 rounded-5 py-2 px-3">Add Supplier</a>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless table-rounded table-responsive">
            <colgroup>
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 50%;">
                <col span="1" style="width: 30%;">
            </colgroup>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($supplier as $supp): ?>
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $supp->name }}</td>
                    <td>
                        <a href="/supplier/{{ $supp->id }}" class="btn py-2 px-3 btn-dark rounded-5">Detail</a>
                        <a href="/supplier/{{ $supp->id }}/edit" class="btn py-2 px-3 btn-light rounded-5">Edit</a>
                        <form action="/supplier/{{ $supp->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-purple rounded-5"
                                onclick="return confirm('Are You Sure Delete This Supplier?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
@endsection