<?php

namespace App\Contracts;

interface ICurrencyGetter {
	/** @return mixed  */
	public function getCurrencies();
	public function getCurrency($ISO);
}