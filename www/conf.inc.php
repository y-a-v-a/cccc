<?php
date_default_timezone_set('Europe/Amsterdam');
session_start();
error_reporting(E_ALL);

include_once 'ColorScheme.class.php';

include_once 'appid.php';

// set up an array with cities
$cities = array(
	'Cairo' => 'EG',
	'Amsterdam' => 'NL',
	'Perth' => 'AU',
	'Kuala Lumpur' => 'MY',
	'Los Angeles' => 'US',
	'Caracas' => 'VE',
	'Fairbanks' => 'US',
	'Madrid' => 'SP',
	'Johannesburg' => 'ZA',
	'Dakar' => 'SN',
	'Osaka' => 'JP',
	'Manila' => 'PH',
	'Frankfurt' => 'DE',
	'Belfast' => 'GB',
	'La Habana' => 'Cuba',
	'Jakarta' => 'ID',
	'Kathmandu' => 'NP',
	'Poznan' => 'PL',
	'Chengdu' => 'CN',
	'Paramaribo' => 'SR',
	'Vladivostok' => 'RU',
	'Mombasa' => 'KE',
	'Suva' => 'FJ',
	'Ushuaia' => 'AR'
);
