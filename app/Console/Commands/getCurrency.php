<?php

namespace App\Console\Commands;

use App\Facades\CurrencyGetter;
use App\Models\Currency;
use Illuminate\Console\Command;

class getCurrency extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'currency:update';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Currency update from bank';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$currencies = Currency::all();

		foreach ($currencies as $currency) {
			$value = CurrencyGetter::getCurrency($currency->name);
			$currency->history()->create([
				'value' => $value
			]);
		}
	}
}
