
<?php
function mytheme_setup() {
    // Enable featured images
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus(array(
        'primary-menu' => 'Header menu'
    ));
}
add_action('after_setup_theme', 'mytheme_setup');
?>
