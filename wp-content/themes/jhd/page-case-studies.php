<?php
/**
 * Template name: Case studies
 */

get_header();

?>



    <div class="product-items">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 center-col-block">
                    <h1 class="subheading"><span><?php the_title(); ?></span></h1>
                    <?php the_field('intro'); ?>
                </div>

                <div class="content">

                    <?php if(get_field('casestudy')) : ?>
                        <?php while(has_sub_field('casestudy')) : ?>

                            <div class="col-xs-12 col-md-6 item">
                                <a href="<?php the_sub_field('link');?>">
                                <div class="copy">
                                    <div class="image">
                                        <img src="<?php the_sub_field('image');?>" class="img-responsive">
                                    </div>
                                    <h2><?php the_sub_field('title');?></h2>
                                    <?php the_sub_field('copy');?>
                                    <span class="btn-red triangle-orig"><?php the_sub_field('link_copy');?></span>
                                </div>
                                </a>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>



<?php get_footer(); ?>
