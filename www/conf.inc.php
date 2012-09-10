<?php
date_default_timezone_set('Europe/Amsterdam');
session_start();
error_reporting(0);
// get the class
include_once 'ColorScheme.class.php';

// set up an array with cities
$cities = array(
	'Cairo' => '360630',
	'Amsterdam' => '2759794',
	'Perth' => '2063523',
	'Kuala Lumpur' => '1735161',
	'Los Angeles' => '3882428',
	'Caracas' => '3646738',
	'Fairbanks' => '5861897',
	'Madrid' => '3675707',
	'Johannesburg' => '993800',
	'Dakar' => '2253354',
	'Osaka' => '1850892',
	'Manila' => '1701668',
	'Frankfurt' => '2925533',
	'Belfast' => '2655984',
	'La Habana' => '3553478',
	'Djakarta' => '1642911',
	'Kathmandu' => '1283240',
	'Poznan' => '3088171',
	'Chengdu' => '1815286',
	'Paramaribo' => '3383330',
	'Vladivostok' => '2013348',
	'Mombasa' => '186301',
	'Suva' => '2198148',
	'Ushuaia' => '3833367'
);