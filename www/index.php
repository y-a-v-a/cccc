<?php
/**
 * This index file shows a color palette
 */
include 'conf.inc.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>y-a-v-a.org | World Colors</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="style.css" media="all">
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
</head>

<body>
<div class="palette">
	<div style="width: auto; padding: 12px;">
		<h2>Color Palette</h2>
		<p>This is a world color palette, based on local temperatures. The earth's maximum temperature ever measured is white (136 &deg;F, about 58 &deg;C in Libya, 1922), the lowest (-128 &deg;F, -89 &deg;C in Vostok Station, Antarctica, 1983) is black. Colors are based on a three days weather forecast from <a href="http://openweathermap.org/">openweathermap.org</a> which means these colors will change through time.</p>
	</div>
	<?php foreach ($cities as $city => $id): ?>
		<?php $color = new ColorScheme($city . ',' . $id); ?>
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
