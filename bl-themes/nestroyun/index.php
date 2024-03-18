<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" href="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
		<?php echo Theme::metaTags( 'title' ); ?>
		<?php echo Theme::metaTags( 'description' ); ?>
		<style>
			<?php include('css/style.css'); ?>
            <?php include('css/savas-sehri.css'); ?>
		</style>

	<?php include(THEME_DIR_PHP.'header.php') ?>
		<?php Theme::plugins( 'siteHead' ) ?>
	</head>
	<body>
	<!-- Content -->
	<?php
		if ($WHERE_AM_I == 'page') {
			include(THEME_DIR_PHP.'page.php');
		} else {
			include(THEME_DIR_PHP.'each.php');
		}
	?>

	<?php Theme::plugins('siteBodyEnd') ?>
	<?php include(THEME_DIR_PHP.'footer.php') ?>
		</div>
	</body>
</html>
