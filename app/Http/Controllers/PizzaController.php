<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index() {
        //$pizzas = Pizza::all();
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id) {
        $pizza = Pizza::findOrfail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');

        // Define pricing by type
        $prices = [
            'margherita' => 50,
            'pepperoni' => 70,
            'veggie' => 60,
            'chicken' => 80,
        ];
        $pizza->price = $prices[$pizza->type] ?? 0;

        $pizza->save();

        return redirect('/')->with('success', 'Pizza order placed successfully!');
    }

    public function update($id) {
        $pizza = Pizza::findOrfail($id);

        $pizza->status = request('status');
        $pizza->save();

        if (request()->ajax()) {
        return response()->json(['message' => 'Pizza status updated successfully!']);
    }

        return redirect("/pizzas/$id")->with('success', 'Pizza order updated successfully!');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrfail($id);

        $pizza->delete();

        return redirect('/pizzas')->with('success', 'Pizza order completed successfully!');
    }
}
