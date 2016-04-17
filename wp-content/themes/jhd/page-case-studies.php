<?php
/**
 * Template name: Case studies
 */

get_header();

?>

    <div class="banner">
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

    <div class="product-items">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7 center-col-block">
                    <h1 class="subheading"><span><?php the_title(); ?></span></h1>
                    <?php the_field('intro'); ?>
                </div>

                <div class="content">

                    <?php if(get_field('casestudy')) : ?>
                        <?php while(has_sub_field('casestudy')) : ?>

                            <div class="col-xs-12 col-md-4 item">
                                <a href="<?php the_sub_field('link');?>">
                                <h3><?php the_sub_field('type');?></h3>
                                <div class="copy">
                                    <div class="image">
                                        <img src="<?php the_sub_field('image');?>" class="img-responsive">
                                    </div>
                                    <h2><?php the_sub_field('title');?></h2>
                                    <?php the_sub_field('copy');?>
                                    <span class="btn btn-cta-light-green"><?php the_sub_field('link_copy');?> &gt;</span>
                                </div>
                                </a>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>

<?php get_template_part('partials/quotes'); ?>



<?php get_template_part('partials/contact'); ?>


<?php get_footer(); ?>