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
	margin: 11px 0 0 11px;
	text-align: center;
	line-height: 114px;
	color: #fff;
}
</style>
</head>

<body>
	<?php foreach ($cities as $city => $id): ?>
		<?php $color = new ColorScheme($id); ?>
		<div class="scheme" style="background: <?php echo $color->colorcode ?>" title="<?php echo $color->colorcode ?>">
			<?php echo $city; ob_flush(); flush(); ?>
		</div>
	<?php endforeach; ?>
	<br style="clear:both;">
</body>
</html>
