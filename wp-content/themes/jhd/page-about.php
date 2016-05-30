<?php
/**
 * Template name: About me
 */

get_header();

?>

    <div class="about">
        <div class="container">
            <div class="row">
                <h1 class="subheading"><span><?php the_title(); ?></span></h1>
                <div class="content">
                <div class="col-xs-12 col-sm-5 image">
                    <div class="row">
                    <img src="<?php echo get_template_directory_uri() ?>/lib/dist/img/page-about-me/imagegrey.jpg" class="img-responsive-full">
                    </div>
                </div>
                <div class="copy">

                    <?php the_field('about_intro'); ?>

                </div>
                </div>
            </div>
        </div>
    </div>


    <div class="recent-work">
        <div class="container">
            <h2><span>Case Studies</span></h2>
            <div class="row">
                <ul class="recent-work-gallery">

                    <?php if(get_field('recent_work')) : ?>
                        <?php while(has_sub_field('recent_work')) : ?>

                            <li class="col-xs-6 col-md-4">
                                <a class="fancybox" href="<?php the_sub_field('image_large'); ?>">
                                    <img src="<?php the_sub_field('image_thumb'); ?>" class="img-responsive-full" />
                                    <span></span>
                                </a>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>


<?php get_footer(); ?>