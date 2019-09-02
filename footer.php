
<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">

                <ul class="social-links">
                    <?php if ( have_posts() ) : query_posts('cat=5');
                    while (have_posts()) : the_post(); ?>

                    <li><a href="<?php the_field('url'); ?>" class="wow fadeInUp"><i class="fa <?php the_field('fa'); ?>"></i></a></li>

                    <? endwhile; endif; wp_reset_query(); ?>
                </ul>

                <p class="heart">
                    Made with <span class="fa fa-heart fa-2x animated pulse"></span> in Moscow
                </p>
                <p class="copyright">
                    © <?php echo year_shortcode();?> <?php bloginfo('description'); ?>
                </p>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</footer>

<!-- Footer end -->

<!-- Scroll to top -->

<div class="scroll-up">
    <a href="#home"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Scroll to top end-->

<!-- Javascript files -->

<script src="/wp-content/themes/myTheme/assets/js/jquery-1.11.1.min.js"></script>
<script src="/wp-content/themes/myTheme/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/wp-content/themes/myTheme/assets/js/jquery.parallax-1.1.3.js"></script>
<script src="/wp-content/themes/myTheme/assets/js/imagesloaded.pkgd.js"></script>
<script src="/wp-content/themes/myTheme/assets/js/jquery.sticky.js"></script>

<script src="/wp-content/themes/myTheme/assets/js/wow.min.js"></script>
<script src="/wp-content/themes/myTheme/assets/js/jquery.easypiechart.js"></script>
<script src="/wp-content/themes/myTheme/assets/js/waypoints.min.js"></script>
<script src="/wp-content/themes/myTheme/assets/js/jquery.cbpQTRotator.js"></script>
<script src="/wp-content/themes/myTheme/assets/js/custom.js"></script>
<script src="/wp-content/themes/myTheme/assets/js/jquery.magnific-popup.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>





