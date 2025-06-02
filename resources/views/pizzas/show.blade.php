@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Order Details
        </div>
        <div class="wrapper pizza-details">
            <h1>Order for {{ $pizza->name }}</h1>
            <p class="type">Type - {{ $pizza->type }}</p>
            <p class="base">Base - {{ $pizza->base }}</p>
            <p class="status">Status - {{ $pizza->status }}</p>
            <form action="/pizzas/{{ $pizza->id }}" method="POST">
                @csrf
                @method('PATCH')
                <label for="status">update order status:</label>
                <select id="status" name="status">
                    <option value="pending">pending</option>
                    <option value="preparing">preparing</option>
                    <option value="out for delivery">out for delivery</option>
                </select>
                <input type="submit" value="update order status" id="update1">
            </form>
            <form action="/pizzas/{{ $pizza->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete Order</button>
            </form>
        </div>
        <a href="/pizzas" class="back"><-- Back to all orders</a>
    </div>
</div>
@endsection