<?php

namespace App\Service\Currency;

use App\Contracts\ICurrencyGetter;
use App\config\Currency;
use SoapClient;

/** @package  */
class CBA implements ICurrencyGetter
{
	protected $config;
	protected $client;

	public function __construct($config = [])
	{
		$this->config = $config;
		$this->client	= new SoapClient($this->config['url'], []);
	}

	/** @return void  */

	public function getCurrencies()
	{
		$result = $this->client->__soapCall('ExchangeRatesLatest', [[]])->ExchangeRatesLatestResult->Rates->ExchangeRate;
		return $result;
	}


	public function getCurrency($ISO)
	{
		$result = $this->client->__soapCall('ExchangeRatesLatestByISO', [['ISO' => $ISO]])->ExchangeRatesLatestByISOResult->Rates;
		return isset($result?->ExchangeRate) ? $result?->ExchangeRate->Rate : 0;
	}
}
