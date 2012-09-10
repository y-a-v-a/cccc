<?php
/**
 * This index file shows a color palette
 */
include 'conf.inc.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

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
