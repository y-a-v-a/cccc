<?php
/**
 * This index file shows a color palette
 */
date_default_timezone_set('Europe/Amsterdam');
session_start();
error_reporting(0);
// get the class
include_once './ColorScheme.class.php';

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

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>y-a-v-a.org - world colors</title>
<style>
body {
	padding: 0;
	margin: 0;
	font-family: Monaco, Courier;
	font-size: 10pt;
	letter-spacing: 0.05em;
}
div.scheme {
	width: 114px;
	height: 114px;
	float: left;
	margin: 12px 0 0 12px;
	text-align: center;
	line-height: 114px;
	color: #fff;
}
div.palette {
	width: 894px;
	border: 2px solid rgb(192,192,192);
	margin: 24px auto 0;
	padding-bottom: 12px;
}
#caption {
	padding: 8px;
	width: 224px;
	margin: 12px 0 0 12px;
	font-family: Arial;
	float: left;
	height: 98px;
	overflow: hidden;
	font-size: 11px;
	background: #7f7f7f;
	color: #fff;
}
</style>
</head>

<body>
	<div class="palette">
	<?php foreach ($cities as $city => $id): ?>
		<?php $color = new ColorScheme($id); ?>
		<div class="scheme" style="background: <?php echo $color->colorcode ?>" title="<?php echo $color->colorcode ?>">
			<?php echo $city; ob_flush(); flush(); ?>
		</div>
	<?php endforeach; ?>
	<div id="caption">
		Colors created by transforming three day temerature forecast from openweathermap.org. As a reference, the earth's maximum temperature ever measured is white (57.8 &deg;C in Libya), the lowest (-89.2 &deg;C in Antarctica) is black. Colors change as weather changes.
	</div>

	<br style="clear:both;">
	</div>
</body>
</html>
