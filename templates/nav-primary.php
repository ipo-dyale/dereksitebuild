<?php
global $thumbnail_rgb;
?>

<header style="background-image: linear-gradient(0deg, rgba(<?php echo $thumbnail_rgb ?>, 1), rgba(<?php echo $thumbnail_rgb ?>, 1));">
	<div id="header-menu">
		<div id="logo">
			<?php echo '<a href="' . get_home_url() . '"><img></a>'; ?>
		</div>
		<div id="nav">
			<?php wp_nav_menu(array( "theme_location" => 'header-menu' )) ?>
		</div>
	</div>
</header>
