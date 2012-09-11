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
	<meta name="viewport" content="width=device-width">
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
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
