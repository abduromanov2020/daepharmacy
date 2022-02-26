@extends('template.layout')

@section('container')


<div class="container bg-transparent p-5 rounded-5 shadow-lg text-white pt-1">
    <h2 class="text-white fw-bolder text-center py-2 mt-5">User</h2>


    <div class="table-responsive">
        <table class="table table-borderless table-rounded">
            <colgroup>
                <col span="1" style="width: 35%;">
                <col span="1" style="width: 40%;">
                <col span="1" style="width: 25%;">
            </colgroup>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user as $user): ?>
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="/user/{{ $user->id }}" method="post" class="d-inline">
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
    <div class="d-flex justify-content-end">
        <form action="/logout" method="post">
            @csrf
            <button class="btn btn-light rounded-5"
                onclick="return confirm('Are You Sure Want To Logout?')">Logout</button>
        </form>
    </div>
</div>
@endsection