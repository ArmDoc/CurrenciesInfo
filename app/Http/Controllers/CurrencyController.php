<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return [
			'currencies' => Currency::all()
		];
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required'
		]);

		$currency = Currency::create(['name' => $request->name]);
		return ['currency' => $currency];
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Currency  $currency
	 * @return \Illuminate\Http\Response
	 */
	public function show(Currency $currency)
	{
		return ['currency' => $currency];
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Currency  $currency
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Currency $currency)
	{
		$request->validate([
			'name' => 'required'
		]);

		$currency->update(['name' => $request->name]);
		return ['currency' => $currency];
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Currency  $currency
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Currency $currency)
	{
		$currency->delete();
		return ['status' => true];
	}
}
