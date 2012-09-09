<?php
/**
 * This index file shows a color palette
 */

// get the class
include_once '../share/ColorScheme.class.php';

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>color palette</title>
<style>
body {
	width: 100%;
	height: 100%;
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
	width: 1024px;
	height: 600px;
	border: 2px solid rgb(192,192,192);
	margin: 24px auto 0;
}
</style>
</head>

<body>
<div class="palette">
	<div style="width: auto; padding: 12px;">
		<h2>Color Palette</h2>
		<p>This is a world color palette, based on local temperatures. The earth's maximum temperature ever measured is white (136 &deg;F, about 58 &deg;C in Libya, 1922), the lowest (-128 &deg;F, -89 &deg;C in Vostok Station, Antarctica, 1983) is black. Colors are based on a three days weather forecast from <a href="http://openweathermap.org/">openweathermap.org</a> which means these colors will change through time.</p>
	</div>
	<?php foreach ($cities as $city => $id): ?>
		<?php $color = new ColorScheme($id); ?>
		<div class="scheme" style="background: <?php echo $color->colorcode ?>" title="<?php echo $color->colorcode ?>">
			<?php echo $city; ob_flush(); flush(); ?>
		</div>
	<?php endforeach; ?>
	<div style="width: auto; padding: 12px; margin-top:12px; clear: both; text-align: right">
		<address>Vincent Bruijn</address>
	</div>
</div>
</body>
</html>
