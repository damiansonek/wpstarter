
<div class="block-threeImages <?php echo esc_attr($className); ?>">
 
        <div class="col-50">
            <div class="block-threeImages--autoHeight">
                <div class="block-threeImages--autoHeight--img">
        <?php
$block_zdjecie1 = get_field( 'block_zdjecie1' );
$size = 'full';
if ( $block_zdjecie1 ) {
	$url = wp_get_attachment_url( $block_zdjecie1 );
	echo wp_get_attachment_image( $block_zdjecie1, $size );
}; ?>
</div>
</div>
        </div>

        <div class="col-50 d-inline-flex flex-column justify-content-between">
            <div class="block-threeImages--twoImages">
        <?php
$block_zdjecie2 = get_field( 'block_zdjecie2' );
$size = 'full';
if ( $block_zdjecie2 ) {
	$url = wp_get_attachment_url( $block_zdjecie2 );
	echo wp_get_attachment_image( $block_zdjecie2, $size );
}; ?>

<?php
$block_zdjecie3 = get_field( 'block_zdjecie3' );
$size = 'full';
if ( $block_zdjecie3 ) {
	$url = wp_get_attachment_url( $block_zdjecie3 );
	echo wp_get_attachment_image( $block_zdjecie3, $size );
}; ?>
        </div>
        </div>




</div>