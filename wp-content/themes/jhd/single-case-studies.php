<?php get_header(); ?>

    <div class="banner" style="background-image:url(<?php the_field('banner_image'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <div class="copy">
                        <?php the_field('banner_intro'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="article">
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-7 center-col-block">
                        <h1 class="subheading"><span><?php the_title(); ?></span></h1>
                        <?php the_field('intro'); ?>
                    </div>

                    <div class="content before">
                        <div class="col-xs-12 col-md-6 copy">
                            <h2><?php the_field('before_title'); ?></h2>
                            <?php the_field('before_copy'); ?>
                        </div>
                        <div class="col-xs-12 col-md-6 image">
                                <img class="img-responsive-full" src="<?php the_field('before_image'); ?>">
                        </div>
                    </div>

                    <div class="col-xs-9 center-col-block">
                    <div class="hr"><hr class="sr-only" /></div>
                    </div>

                    <div class="content during">
                        <div class="col-xs-12 col-md-6 image">
                                <img class="img-responsive-full" src="<?php the_field('during_image'); ?>">
                        </div>
                        <div class="col-xs-12 col-md-6 copy">
                            <h2><?php the_field('during_title'); ?></h2>
                            <?php the_field('during_copy'); ?>
                            <a href="/contact/" class="btn btn-cta-light-green">Find out more &gt;</a>
                        </div>
                    </div>

                    <div class="col-xs-9 center-col-block">
                        <div class="hr"><hr class="sr-only" /></div>
                    </div>


                    <div class="content after">
                        <div class="col-xs-12 col-md-6 copy">
                            <h2><?php the_field('after_title'); ?></h2>
                            <?php the_field('after_copy'); ?>
                        </div>
                        <div class="col-xs-12 col-md-6 image">
                            <img class="img-responsive-full" src="<?php the_field('after_image'); ?>">
                        </div>
                    </div>

                </div>
            </div>
        </article>
    </div>


    <?php if(get_field('cta_title')): ?>
    <div class="treatment">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5 col-lg-7">
                    <div class="copy">
                        <h2><?php the_field('cta_title'); ?></h2>
                        <div class="col-xs-12 col-lg-9">
                            <div class="row">
                                <?php the_field('cta_copy'); ?>
                            </div>
                        </div>
                        <a href="/contact/" class="btn btn-cta-light-green">Book Now &gt;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 col-lg-5">
                    <div class="image">
                        <img class="img-responsive-full" src="<?php echo get_template_directory_uri() ?>/lib/dist/img/page-home/clients/img-client.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php get_template_part('partials/quotes'); ?>

    <?php get_template_part('partials/portfolio'); ?>

    <?php get_template_part('partials/contact'); ?>

<?php get_footer(); ?>