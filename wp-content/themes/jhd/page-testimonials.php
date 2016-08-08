<?php
/**
 * Template name: Testimonials
 */

get_header();

?>

    <div class="page-testimonials">
        <div class="article">
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 center-col-block">

                            <h1 class="subheading"><span>Our <?php the_title(); ?></span></h1>
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

                                    <div class="col-xs-12 center-col-block copy <?php echo (++$j % 2 == 0) ? 'evenpost' : 'oddpost'; ?>">
                                        <div class="col-xs-12 col-md-6 quoteimg"><img src="<?php the_sub_field('image'); ?>" class="img-responsive-full"></div>
                                        <div class="col-xs-12 col-md-6 quotecopy">
                                       <blockquote><span class="quote"></span><?php the_sub_field('review'); ?><span class="quote2"></span></blockquote>
                                        <span class="name"><?php the_sub_field('client'); ?></span>
                                    </div>

                                    </div>

                                    <?php if($i != $review_count) : ?>
                                        <div class="col-xs-12">
                                            <div class="hr"><hr class="sr-only" /></div>
                                        </div>
                                    <?php endif; ?>

                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>



                        </div>
                    </div>
                </div>

            </article>
        </div>
    </div>

<?php get_template_part('partials/contact'); ?>


<?php get_footer(); ?>