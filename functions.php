
<?php
function mytheme_setup() {
    // Enable featured images
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus(array(
        'primary-menu' => 'Header menu'
    ));
    //add header logo
    add_theme_support('custom-header');

    //register sidebar
    register_sidebar(
        array(
            'name' => "Sidebar",
            'id' => "sidebar"
        )
    );
}
add_action('after_setup_theme', 'mytheme_setup');
?>
