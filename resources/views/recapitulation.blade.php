@extends('template.layout')

@section('container')


<div class="container bg-transparent p-5 rounded-5 shadow-lg text-white pt-1">
    <h2 class="text-white fw-bolder text-center py-2">Recapitulation</h2>

    <div class="d-flex justify-content-end">
        <a href="/recapitulation/print" class="btn btn-warning mb-4 rounded-5 py-2 px-3" target="_blank">Export PDF</a>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless table-rounded">
            <colgroup>
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 15%;">
                <col span="1" style="width: 15%;">
                <col span="1" style="width: 20%;">
            </colgroup>
            <thead>
                <tr>
                    <th>Transaction</th>
                    <th>Item</th>
                    <th>Total Item</th>
                    <th>Total Price</th>
                    <th>Admin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($recap as $recap): ?>
                <tr>
                    <td>{{ $recap->number }}</td>
                    <td>{{ $recap->item }}</td>
                    <td>{{ $recap->total_item }}</td>
                    <td>{{ "Rp " . number_format($recap->total_price,2,',','.') }}</td>
                    <td>{{ auth()->user()->username }}</td>
                    <td>
                        <form action="/recapitulation/{{ $recap->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger rounded-5"
                                onclick="return confirm('Are You Sure Delete This Items?')">Delete Transaction</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
@endsection