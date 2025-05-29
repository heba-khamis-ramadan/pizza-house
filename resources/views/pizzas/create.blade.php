@extends('layouts.app')

@section('content')
<div class="werapper create-pizza">
    <h1>Create a new pizza order</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">choose pizza type:</label>
        <select id="type" name="type">
            <option value="margherita">Margherita</option>
            <option value="pepperoni">Pepperoni</option>
            <option value="veggie">Veggie</option>
            <option value="chicken">BBQ Chicken</option>
            <option value="cheese">Four Cheese</option>
        </select>
        <label for="type">choose pizza base:</label>
        <select id="base" name="base">
            <option value="thin crust">Thin Crust</option>
            <option value="thick crust">Thick Crust</option>
        </select>
        <input type="submit" value="order pizza">
    </form>
</div>
@endsection