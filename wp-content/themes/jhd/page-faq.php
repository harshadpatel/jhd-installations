<?php
/**
 * Template name: FAQ's
 */

get_header();

?>

    <div class="banner">
    </div>

    <div class="page-faq">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <h1 class="subheading"><span><?php the_title(); ?></span></h1>
                </div>
            </div>

            <div class="row">
                <?php if(get_field('faqs')) : ?>
                    <?php while(has_sub_field('faqs')) : ?>

                        <div class="col-xs-12">

                            <h2><?php the_sub_field('question'); ?></h2>
                            <p><?php the_sub_field('answer'); ?></p>

                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <!-- page-faq -->

<?php get_template_part('partials/contact'); ?>


<?php get_footer(); ?>