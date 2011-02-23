<?php
/**
 * This index file shows a color palette
 */

// get the class
include_once 'scheme.class.php';

// set up an array with cities
$cities = array('Cairo','Amsterdam','Perth','Kuala Lumpur','Los Angeles','Caracas','Fairbanks','Madrid', 'Johannesburg', 'Dakar', 'Osaka', 'Manila', 'Frankfurt','Belfast', 'La Habana', 'Djakarta','Kathmandu', 'Poznan','Chengdu','Paramaribo', 'Vladivostok', 'Mombasa', 'Suva','Ushuaia','Melbourne','Honolulu');

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>y-a-v-a.org - world colors</title>
<style type="text/css">
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
	<?php foreach ($cities as $city): ?>
		<?php $color = new ColorScheme($city); ?>
		<div class="scheme" style="background: <?php echo $color->colorcode ?>" title="<?php echo $color->colorcode ?>">
			<?php echo $color->city ?>
		</div>
	<?php endforeach; ?>
	<div id="caption">
		Colors created by transforming three day temerature forecast from Google. As a reference, the earth's maximum temperature ever measured is white (57.8 &deg;C in Libya), the lowest (-89.2 &deg;C in Antarctica) is black. Colors change as weather changes.
	</div>

	<br style="clear:both;">
	</div>
</body>
</html>
