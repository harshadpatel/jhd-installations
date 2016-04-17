<?php
/**
 * Template name: Testimonials
 */

get_header();

?>

    <div class="banner">
    </div>

    <div class="page-testimonials">
        <div class="article">
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 center-col-block">

                            <h1 class="subheading"><span><?php the_title(); ?></span></h1>
                            <?php the_field('intro'); ?>

                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="content">

                            <?php if(get_field('testimonial')) : ?>
                                <?php $review_count = count(get_field('testimonial'))?>
                                <?php $i = 1; ?>
                                <?php while(has_sub_field('testimonial')) : ?>

                                    <div class="col-xs-10 center-col-block copy">

                                        <blockquote><?php the_sub_field('review'); ?></blockquote>
                                        <span class="name"><?php the_sub_field('client'); ?></span>

                                    </div>

                                    <?php if($i != $review_count) : ?>
                                        <div class="col-xs-12">
                                            <div class="hr"><hr class="sr-only" /></div>
                                        </div>
                                    <?php endif; ?>

                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>


                            <a class="btn btn-cta-light-green" href="https://www.facebook.com/EliteSemiPermanentMakeup" target="_blank">Read more reviews on my Facebook page &gt;</a>
                        </div>
                    </div>
                </div>

            </article>
        </div>
    </div>

    <div class="banner bottom">
    </div>

<?php get_template_part('partials/contact'); ?>


<?php get_footer(); ?>