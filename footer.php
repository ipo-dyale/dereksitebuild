</div> <!-- site container -->

<?php
$img = imagecreatefromjpeg( get_the_post_thumbnail_url( $post_id, 'thumbnail_1x1' ) );
$rgb = imagecolorat($img, 0, 0);
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;
?>

<div id='site-footer' style="background-image: linear-gradient(0deg, rgba(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>, 1), rgba(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>, 1)); border-top: 1px solid rgb(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>);">
<p style="color: rgba(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>, 1);">Copyright &copy; &mdash; Derek Yale 2017</p>
</div>

<?php wp_footer(); ?>

</body>
</html> <!-- thanks! -->