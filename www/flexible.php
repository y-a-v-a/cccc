<?php
/**
 * This index file shows a color palette
 */

// get the class
include_once '../share/ColorScheme.class.php';

// set up an array with cities
$cities = array('Cairo','Amsterdam','Perth','Kuala Lumpur','Los Angeles','Caracas','Fairbanks','Madrid', 'Johannesburg', 'Dakar', 'Osaka', 'Manila', 'Frankfurt','Belfast', 'La Habana', 'Djakarta','Kathmandu', 'Poznan','Chengdu','Paramaribo', 'Vladivostok', 'Mombasa', 'Suva','Ushuaia','Melbourne','Honolulu');

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
</style>
</head>

<body>
	<?php foreach ($cities as $city): ?>
		<?php $color = new ColorScheme($city); ?>
		<div class="scheme" style="background: <?php echo $color->colorcode ?>" title="<?php echo $color->colorcode ?>">
			<?php echo $color->city ?>
		</div>
	<?php endforeach; ?>
	<br style="clear:both;">
</body>
</html>
