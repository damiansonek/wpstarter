<?php /* Template name: strona główna */ ?>

<?php get_header('hero'); ?>

<section id="home" class="hero"
<?php get_template_part('template-parts/heroSettings'); ?>  
    <div class="hero__front">
    
            <span class="hero__front__heading hero__front__heading--one wow animate__animated fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/hero-msm.svg">
            </span>
            <span class="hero__front__heading hero__front__heading--two wow animate__animated fadeInUp" data-wow-delay="0.2s">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero-design.svg">
            </span>
        <?php if (get_field('front_hero_text')) : ?>
        <p class="hero__front--text wow animate__animated fadeInUp" data-wow-delay="0.4s"><?php the_field('front_hero_text'); ?></p>
        <?php endif; ?>
    </div>
</section>

<section id="welcome" class="pt-5 pt-sm-10 container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-column flex-sm-row">
        <div class="column welcome__col--first wow animate__animated fadeInDown">
            <p class="weight--4">MSM DESIGN</p>
        </div>
        <div class="column">
            <div class="dash"></div>
        </div>
        <div class="column welcome__col--last wow animate__animated fadeInUp" data-wow-delay="0.2s">
            <?php if (get_field('front_wstep_text')): ?>
            <p class="size--29"><?php the_field('front_wstep_text'); ?></p>
            <?php endif; ?>
            <a href="<?php echo get_home_url(); ?>/o-nas/" class="link link--underline mt-3">więcej</a>
        </div>
    </div>
</section>

<section id="portfolio" class="pt-5 pt-sm-12 container-fluid">
    <h2 class="mb-5 wow animate__animated fadeInDown">Projekty</h2>
    <ul class="works">
        <?php $args = array( 'post_type' => 'projekty', 'posts_per_page' => 4, 'order' => 'DESC');
		                $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php get_template_part('template-parts/worksItem'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php wp_reset_postdata(); ?>
    </ul>
</section>

<section class="py-5 py-md-8 container-fluid">

<?php if (get_field('front_about_quote')) : ?>
    <div class="col-12 col-sm-11">
        <p class="p-72 wow animate__animated fadeInDown"><?php the_field('front_about_quote'); ?></p>
    </div>
    <?php endif; ?>
</section>


<section id="video" class="video position-relative">
    
    <?php if (get_field('link_do_filmu')) : ?>
    <a target="_blank" href="<?php the_field('link_do_filmu'); ?>">
        <?php endif; ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/play.svg" class="video--play">
        <?php if (get_field('link_do_filmu')) : ?>
    </a>
    <?php endif; ?>
    <div class="fullscreen-bg">

        <video id="videoFile" loop autoplay muted playsinline class="fullscreen-bg__video">
            <source src="<?php echo get_template_directory_uri(); ?>/videos/msm-home.mp4" type="video/mp4">
        </video>
    </div>


</section>



<section id="about" class="container-fluid pt-5 pt-sm-10">

    <div class="about__process">

        <div class="row">
            <div class="col-12 offset-sm-1 col-sm-5 wow animate__animated fadeInUp">
                <img class="about__process--img img-fluid mb-5 mb-sm-0" src="<?php the_field('front_about_img'); ?>">
            </div>

            <div class="col-12 offset-sm-1 col-sm-4 about__process--text align-self-center wow animate__animated fadeInUp"
                data-wow-delay="0.2s">
                <?php if (get_field('front_about_text')): ?>
                <p class="size--29"><?php the_field('front_about_text'); ?></p>
                <?php endif; ?>
                <a href="<?php echo get_home_url(); ?>/proces/" class="link link--underline mt-3">poznaj nasz proces</a>
            </div>
        </div>
    </div>

</section>

<?php get_template_part('template-parts/logoCarousel'); ?>
<?php get_template_part('template-parts/instagram'); ?>

<?php get_footer(); ?>