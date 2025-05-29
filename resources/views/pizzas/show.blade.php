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