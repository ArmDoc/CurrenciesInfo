<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencyHistoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\Models\CurrencyHistory::factory()->create([
			'currency_id' 	=> 'Test money id',
			'value'			=>	'499.5',
		]);
	}
}
