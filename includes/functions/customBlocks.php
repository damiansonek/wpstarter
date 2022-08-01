<?php 

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'block-portfolioOpening',
            'title'             => __('MSM - Informacje o projekcie'),
            'description'       => __('MSM - Informacje o projekcie.'),
            'render_template'   => 'template-parts/blocks/block-portfolioOpening.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block_type(array(
            'name'              => 'block-ThreeImages',
            'title'             => __('MSM - Trzy zdjęcia'),
            'description'       => __('MSM - Trzy zdjęcia.'),
            'render_template'   => 'template-parts/blocks/block-ThreeImages.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block_type(array(
            'name'              => 'block-textRight',
            'title'             => __('MSM - Blok z tekstem po prawej'),
            'description'       => __('MSM - Blok z tekstem po prawej'),
            'render_template'   => 'template-parts/blocks/block-textRight.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block_type(array(
            'name'              => 'block-textLeft',
            'title'             => __('MSM - Blok z tekstem po lewej'),
            'description'       => __('MSM - Blok z tekstem po lewej'),
            'render_template'   => 'template-parts/blocks/block-textLeft.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block_type(array(
            'name'              => 'block-textImage',
            'title'             => __('MSM - Blok z tekstem i obrazkiem'),
            'description'       => __('MSM - Blok z tekstem i obrazkiem'),
            'render_template'   => 'template-parts/blocks/block-textImage.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));
    }
}

?>