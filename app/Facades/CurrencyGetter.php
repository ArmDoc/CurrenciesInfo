<?php

namespace App\Facades;

use App\Contracts\ICurrencyGetter;
use Illuminate\Support\Facades\Facade;

/** @package App\Facades */
class CurrencyGetter extends Facade
{
	/** @return string  */
	protected static function getFacadeAccessor()
	{
		return ICurrencyGetter::class;
	}
}
