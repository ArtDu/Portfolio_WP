<?php get_header(); ?>

<!-- Services start -->

<section id="services" class="pfblock pfblock-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <?php if ( have_posts() ) : query_posts('p=17');
                while (have_posts()) : the_post(); ?>

                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title"><?php the_title(); ?></h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        <?php the_content(); ?>
                    </div>
                </div>

                <? endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>

        <div class="row">
            <?php if ( have_posts() ) : query_posts('cat=3');
            while (have_posts()) : the_post(); ?>

            <div class="col-sm-3">
                <div class="iconbox wow slideInLeft">
                    <div class="iconbox-icon">
                        <span class="<?php the_field('icon'); ?>"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title"><?php the_title(); ?></h3>
                        <div class="iconbox-desc">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <? endwhile; endif; wp_reset_query(); ?>
        </div><!-- .row -->
    </div><!-- .container -->
</section>

<!-- Services end -->

<!-- Portfolio start -->



<section id="portfolio" class="pfblock">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <?php if ( have_posts() ) : query_posts('p=32');
                    while (have_posts()) : the_post(); ?>

                        <div class="pfblock-header wow fadeInUp">
                            <h2 class="pfblock-title"><?php the_title(); ?></h2>
                            <div class="pfblock-line"></div>
                            <div class="pfblock-subtitle">
                                <?php the_content(); ?>
                            </div>
                        </div>

                    <? endwhile; endif; wp_reset_query(); ?>

            </div>

        </div><!-- .row -->


        <div class="row">

            <?php if ( have_posts() ) : query_posts('cat=4');
            while (have_posts()) : the_post(); ?>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <a href=".<?php the_title(); ?>" class="popup-content">
                        <div class="grid wow zoomIn">
                            <figure class="effect-bubba">
	                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="img"/>
                                <figcaption>
                                    <h2><?php the_field('fs_title'); ?><span><?php the_field('sd_title'); ?></span></h2>
                                    <p><?php the_field('short_des'); ?></p>
                                </figcaption>
                            </figure>
                        </div>
                    </a>

                    <div class="<?php the_title(); ?> white-popup mfp-hide">
                        <div class="podrt_descr">
                            <div class="modal-box-content">
                                <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                <h3><?php the_field('fs_title'); ?> <?php the_field('sd_title'); ?></h3>
                                <p><a href="<?php the_field('url'); ?>">Ссылка на работу</a></p>
                                <?php the_content(); ?>
                                <?php the_post_thumbnail(array(360,225)); ?>
                            </div>
                        </div>
                    </div>

                </div>

            <? endwhile; endif; wp_reset_query(); ?>
        </div>


    </div><!-- .contaier -->

</section>

<!-- Portfolio end -->



<!-- CallToAction start -->

<section class="calltoaction">
    <div class="container">

        <div class="row">

            <?php if ( have_posts() ) : query_posts('p=61');
            while (have_posts()) : the_post(); ?>

            <div class="col-md-12 col-lg-12">
                <h2 class="wow slideInRight" data-wow-delay=".1s"><?php the_title(); ?></h2>
                <div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
                    <?php the_field('content'); ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
                <a href="#contact" class="btn btn-lg"><?php the_field('con'); ?></a>
            </div>

            <? endwhile; endif; wp_reset_query(); ?>





        </div><!-- .row -->
    </div><!-- .container -->
</section>

<!-- CallToAction end -->




<!-- Contact start -->

<section id="contact" class="pfblock">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">
                <?php if ( have_posts() ) : query_posts('p=67');
                while (have_posts()) : the_post(); ?>

                <div class="pfblock-header">
                    <h2 class="pfblock-title"><?php the_title(); ?></h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        <?php the_content(); ?>
                    </div>
                </div>

                <? endwhile; endif; wp_reset_query(); ?>
            </div>

        </div><!-- .row -->

        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <form id="contact-form" role="form">
                    <div class="ajax-hidden">
                        <div class="form-group wow fadeInUp">
                            <label class="sr-only" for="c_name">Имя</label>
                            <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Имя">
                        </div>

                        <div class="form-group wow fadeInUp" data-wow-delay=".1s">
                            <label class="sr-only" for="c_email">Email</label>
                            <input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
                        </div>

                        <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                            <textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Сообщение"></textarea>
                        </div>

                        <button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Отправить</button>
                    </div>
                    <div class="ajax-response"></div>
                </form>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</section>

<!-- Contact end -->

<?php get_footer(); ?>
