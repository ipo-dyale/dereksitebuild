<?php
global $thumbnail_rgb;
?>

<div class="navigation-bar" style="background-image: linear-gradient(0deg, rgba(<?php echo $thumbnail_rgb ?>, 1), rgba(<?php echo $thumbnail_rgb ?>, 1)); border-bottom: 1px solid rgb(<?php echo $thumbnail_rgb ?>);">
    <div class="navleft">
        <?php $prev_post = get_adjacent_post(false, '', false);
            if (!empty($prev_post)) {
                $latest_post = wp_get_recent_posts(array( 'numberposts' => '1', 'post_status' => 'publish' ));
                $latest_post_ID = $latest_post[0]['ID'];
                $prev_post_ID = $prev_post->ID;
                if ($latest_post_ID == $prev_post_ID) {
                    echo '<a href="' . get_home_url() . '">&laquo; Newer</a>';
                } else {
                    echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">&laquo; Newer</a>';
                }
            } ?>
    </div> <!-- navleft -->
    <div class="navright">
        <?php $next_post = get_adjacent_post(false, '', true);
            if (!empty($next_post)) {
                echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">Older &raquo;</a>';
            } ?>
    </div> <!-- navright -->
</div> <!-- navigation-bar -->
