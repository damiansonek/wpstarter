</main>
<footer class="footer">
    <div class="container-fluid d-flex flex-wrap">
        <div class="footer__left py-5 pe-sm-7">
            <?php the_field('tekst_w_stopce','options'); ?>

            <div class="social-media">
                <?php the_field('media_spolecznosciowe','options'); ?>
            </div>
        </div>
        <div class="column">
            <div class="dash"></div>
        </div>
        <div class="footer__right py-3 py-sm-5">
            <div class="row footer__right--row gx-sm-0">
                <div class="col-3 col-md-12 col-lg-5 col-xl-4">
                    <?php 
                wp_nav_menu( array(
                    'menu'   => 'footer-menu',
                    'menu_class' => "footer__menu",
                ) );
                 ?>
                </div>

                <div class="col-9 col-md-12 col-lg-7 col-xl-8 footer__dane mt-0 mt-md-5 mt-lg-0">
                    <?php the_field('dane_kontaktowe','options'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>



<section class="marquee">
<div class="marquee--wrapper wow animate__animated textMarquee">
<?php 
        for ($i = 1; $i <= 50; $i++) { ?>
            <img class="marquee--image" src="https://human-creative.co/msmdesign/wp-content/themes/humancreative-msmdesign/images/project_uploads/signature.svg">
       <?php }
         ?>
</div>
  

</section>




<section id="copyrights" class="copyrights container-fluid py-4">
    <div class="d-flex justify-content-between flex-column flex-sm-row">
        <p>© 2021 MSM Design. All right reserved <a class="d-none"
                href="<?php echo get_home_url(); ?>/polityka-prywatnosci/">Polityka Prywatności</a></p>
        <p><a href="https://human-creative.co/" target="_blank">Made by Human Creative</a></p>
    </div>
</section>


<?php wp_footer(); ?>
<script type="text/javascript">
   

    jQuery(function () {
        var wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 3, // default
            mobile: true, // default
            live: true // default
        });
        wow.init();
    });
</script>
</body>

</html>