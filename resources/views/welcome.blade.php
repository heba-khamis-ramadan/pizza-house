@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <img src="/images/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The Best Pizza Ever
        </div>
        <a href="/pizzas/create" class="back">Order Now!!!</a>
    </div>
</div>
@endsection