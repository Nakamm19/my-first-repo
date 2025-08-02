
<?php add_action('wp_enqueue_scripts','add_styles');

function add_styles(){
    wp_enqueue_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap');
        
    wp_register_style(
        'reset_style',
        get_template_directory_uri() . '/css/reset.css',
        array(),
        '1.0');

     wp_enqueue_style(
        'main_style',
        get_template_directory_uri().'/sass/style.css',
        array('reset_style'),
        '1.0');

    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/java/main.js',
        array(),
        '1.0',
        true);
}?>

<?php

function get_child_categories_by_slug($parent_cat_slug) {
    $parent_cat_id = get_cat_ID($parent_cat_slug);

    if ($parent_cat_id) {
        $child_categories = get_categories(array(
            'parent'     => $parent_cat_id, 
            'orderby'    => 'name',         
            'order'      => 'ASC',          
            'hide_empty' => 0               
        ));
        return $child_categories; 
    }
    return false;
}
