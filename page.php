<?php if ( has_post_thumbnail() ) : ?>
<?php get_header('hero'); ?>
<section class="hero hero__page bg--cover bg--center min-vh-100"
    style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    <h1 class="hero__page__heading"><?php the_title(); ?></h1>
</section>

<?php else : ?>

<?php get_header('dark'); ?>
<section class="page__heading container-fluid pt-5 pt-sm-12 wow animate__animated fadeInDown">
   <h1 class="p-72"><?php the_title(); ?></h1>
</section>

<?php endif; ?>

<section class="container-fluid py-5 py-sm-10">

<?php the_content(); ?>
</section>



<?php get_footer(); ?>