<?php

namespace App\Facades;

use App\Contracts\ICurrencyGetter;

/** @package App\Facades */
class CurrencyGetter
{
	/** @return string  */
	protected static function getFacadeAccessor()
	{
		return ICurrencyGetter::class;
	}
}
