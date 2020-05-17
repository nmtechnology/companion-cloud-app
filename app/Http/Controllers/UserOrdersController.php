<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class UserOrdersController extends Controller {
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$user = auth()->user();
		$orders = Order::with('status')->where('user_id', $user->id)->get();

		return view('index', compact('user', 'orders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$request->validate([
			'cremation_type' => 'required',
			'weight' => 'required',
		]);

		$order = Order::create([
			'user_id' => auth()->user()->id,
			'owner_name' => $request->owner_name,
			'owner_phone' => $request->owner_phone,
			'pet_name' => $request->pet_name,
			'color_breed' => $request->color_breed,
			'weight' => $request->weight,
			'return_to' => $request->return_to,
			'shipping_address' => $request->shipping_address,
			'cremation_type' => $request->cremation_type,
			'paw_print' => $request->paw_print,
			'urn_type' => $request->urn_type,
			'nameplate_type' => $request->nameplate_type,
			'service_options' => implode(', ', $request->service_options),
			'extra_notes' => $request->extra_notes,
		]);

		return redirect()->route('user.orders.show', $order)->with('message', 'Your Companion Was Submitted To APMS!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Order $order) {
		return view('show', compact('order'));
	}

}

