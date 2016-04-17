<?php
/**
 * Template name: About me
 */

get_header();

?>


    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <div class="copy">
                        <blockquote class="col-xs-12 col-sm-12 col-md-6 center-col-block">Miriam consistently creates permanent makeup that enhances and improves facial features.</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="row">
                <h1 class="subheading"><span><?php the_title(); ?></span></h1>
                <div class="content">
                <div class="col-xs-12 col-sm-8 copy">

                    <?php the_field('about_intro'); ?>
                    <a class="btn btn-cta-light-green" href="/case-studies/">View Client Case Studies &gt;</a>

                </div>
                <div class="col-xs-12 col-sm-4 image">
                    <img src="<?php echo get_template_directory_uri() ?>/lib/dist/img/page-home/about/miriam.jpg" class="img-responsive-full">
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="work">
    </div>

<?php get_template_part('partials/quotes'); ?>

<?php get_template_part('partials/portfolio'); ?>

<?php get_template_part('partials/contact'); ?>


<?php get_footer(); ?>