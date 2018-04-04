<?php
add_action('wp_enqueue_scripts', 'mat_assets');
function mat_assets()
{
    wp_enqueue_style('J2017', get_stylesheet_uri());
    wp_enqueue_script('sticky-menu', get_template_directory_uri() .'/js/sticky-menu.js', array('jquery'), null, true);
}

/**
 * Adding featured image/thumbnail and menu functionality.
 */
add_theme_support('post-thumbnails');
add_theme_support('menus');

/**
 * Requiring a featured image to be set before a post can be published.
 */
add_filter('wp_insert_post_data', function ($data, $postarr) {
    $post_id = $postarr['ID'];
    $post_status = $data['post_status'];
    $original_post_status = $postarr['original_post_status'];
    if ($post_id && 'publish' === $post_status && 'publish' !== $original_post_status) {
        $post_type = get_post_type($post_id);
        if (post_type_supports($post_type, 'thumbnail') && ! has_post_thumbnail($post_id)) {
            $data['post_status'] = 'draft';
        }
    }
    return $data;
}, 10, 2);
add_action('admin_notices', function () {
    $post = get_post();
    $pagenow = get_current_screen();
    if ('publish' !== get_post_status($post->ID) && ! has_post_thumbnail($post->ID) && $pagenow->parent_file == 'edit.php') {
        ?>
        <div id="message" class="error">
            <p>
                <strong><?php _e('Please set a Featured Image. This post cannot be published without one.'); ?></strong>
            </p>
        </div>
    <?php
    }
});

/**
 * Registering 1x1 thumbnail size of uploaded images for dominant color.
 */
 add_image_size('thumbnail_1x1', 1, 1, false);

function get_rgb_from_thumbnail()
{
    $img = imagecreatefromjpeg(get_the_post_thumbnail_url($post_id, 'thumbnail_1x1'));
    $rgb = imagecolorat($img, 0, 0);
    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8) & 0xFF;
    $b = $rgb & 0xFF;

    return "$r, $g, $b";
}
