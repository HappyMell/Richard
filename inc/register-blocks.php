<?php function register_acf_block_types() {

// register a testimonial block.
acf_register_block_type(array(
    'name'              => 'hero',
    'title'             => __('Hero'),
    'render_template'   => 'blocks/hero.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'testimonial', 'quote' ),
    'mode'              => 'edit'
));

acf_register_block_type(array(
    'name'              => 'black-hero',
    'title'             => __('Black Hero'),
    'render_template'   => 'blocks/black-hero.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'testimonial', 'quote' ),
    'mode'              => 'edit'
));

acf_register_block_type(array(
    'name'              => 'paragraph-and-image',
    'title'             => __('Paragraph and Image'),
    'render_template'   => 'blocks/paragraph-and-image.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'testimonial', 'quote' ),
    'mode'              => 'edit'
));

acf_register_block_type(array(
    'name'              => 'icons-and-info',
    'title'             => __('Icons and Info'),
    'render_template'   => 'blocks/icons-and-info.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'testimonial', 'quote' ),
    'mode'              => 'edit'
));

acf_register_block_type(array(
    'name'              => 'numbers',
    'title'             => __('Numbers'),
    'render_template'   => 'blocks/numbers.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'testimonial', 'quote' ),
    'mode'              => 'edit'
));


acf_register_block_type(array(
    'name'              => 'carousel',
    'title'             => __('Carousel'),
    'render_template'   => 'blocks/carousel.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'testimonial', 'quote' ),
    'mode'              => 'edit'
));

acf_register_block_type(array(
    'name'              => 'sub-footer',
    'title'             => __('Sub Footer'),
    'render_template'   => 'blocks/sub-footer.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'testimonial', 'quote' ),
    'mode'              => 'edit'
));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
add_action('acf/init', 'register_acf_block_types');
}