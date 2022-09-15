<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/** @package Database\Seeders */
class CurrenciesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$currencies = ['USD', 'EUR', 'RUB'];
		foreach ($currencies as $currency) {
			Currency::create(['name' => $currency]);
		}
	}
}
