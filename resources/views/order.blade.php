@extends('template.layout')

@section('container')


<div class="row">
    <div class="col-lg-6 mb-3">
        <div class="container bg-transparent p-5 rounded-5 shadow-lg text-white mt-4">
            <h2 class="text-white fw-bolder text-center py-2">Order</h2>
            <form action="/order" method="post">
                @csrf
                <div class="row py-3">
                    <div class="col-8">
                        <select class="form-select" aria-label="Default select example" name="item_id">
                            <option selected>Select Item</option>
                            <?php foreach($items as $item): ?>
                            <option value="<?= $item->id; ?>">
                                <?= $item->name; ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Amount" name="value">
                    </div>
                </div>
                <button type="submit" class="btn btn-purple fw-bold px-3 py-2 justify-content-end">Add To Chart</button>
            </form>
        </div>
    </div>
    @if($order->count() > 0)
    <div class="col-lg-6">
        <div class="container bg-transparent p-5 rounded-5 shadow-lg table-responsive my-4">
            <h2 class="text-white fw-bolder text-center py-2">Your Order</h2>
            <table class="table table-borderless table-rounded mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th width="30%">Name</th>
                        <th width="20%">Amount</th>
                        <th width="20%">Price</th>
                        <th width="20%">Total</th>
                        <th width="10%">Act</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $amount = 0;
                    $total = 0;
                    $name=''?>
                    @foreach($order as $order)
                    <tr>
                        <th scope="row">{{ $order->item->name }}</th>
                        <td>{{ $order->value }}</td>
                        <td>{{ $order->item->price }}</td>
                        <td>{{ $t = $order->item->price * $order->value }}</td>
                        <?php 
                        $amount += $order->value;
                        $total += $t; 
                        $name .= $order->item->name . "(" . $order->value . ") , ";?>
                        <td>
                            <form action="/order/{{ $order->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger rounded-5"
                                    onclick="return confirm('Are You Sure Delete This Items?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <form action="/order/clear" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn rounded-5 btn-danger me-1"
                        onclick="return confirm('Are You Sure Cancel This Order?')">Cancel
                    </button>
                </form>
                <form action="/recapitulation" method="post" class="d-inline">
                    @method('post')
                    @csrf
                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                    <input type="hidden" value="{{ $name }}" name="item">
                    <input type="hidden" value="{{ $amount }}" name="total_item">
                    <input type="hidden" value="{{ $total }}" name="total_price">
                    <button class="btn rounded-5 btn-dark me-1">Order</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection