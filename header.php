<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Crimson+Text" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
$img = imagecreatefromjpeg( get_the_post_thumbnail_url( $post_id, 'thumbnail_1x1' ) );
$rgb = imagecolorat($img, 0, 0);
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;
?>

<header style="background-image: linear-gradient(0deg, rgba(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>, 1), rgba(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>, 1));">
	<div id="header-menu">
		<div id="logo">
			<?php echo '<a href="' . get_home_url() . '"><img></img></a>'; ?>
		</div>
		<div id="nav">
			<?php wp_nav_menu( array( "theme_location" => 'header-menu' ) ) ?>
		</div>
	</div>
</header>

<div class="site-container" style="background-color: rgba(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>, 0.08);">