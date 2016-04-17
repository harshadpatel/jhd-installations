<?php
/**
 * Template name: Prices
 */

get_header();

?>
<div class="page-prices">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="subheading text-center"><span><?php the_title(); ?></span></h1>
                <?php the_field('intro'); ?>
            </div>
        </div>

        <div class="prices">
            <div class="pod">
                <div class="row">
                    <div class="col-xs-12 col-md-6">

                        <div class="pod-heading">Eyes</div>
                        <ul>
                            <?php if(get_field('eyes')) : ?>
                                <?php while(has_sub_field('eyes')) : ?>

                                    <li>
                                        <span class="product"><?php the_sub_field('title'); ?> <span class="price"><?php the_sub_field('price'); ?></span></span>
                                        <span class="info"><?php the_sub_field('info'); ?></span>
                                    </li>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                    </div>
                    <div class="col-xs-12 col-md-6">

                        <div class="pod-heading">Lips</div>
                        <ul>
                            <?php if(get_field('lips')) : ?>
                                <?php while(has_sub_field('lips')) : ?>

                                    <li>
                                        <span class="product"><?php the_sub_field('title'); ?> <span class="price"><?php the_sub_field('price'); ?></span></span>
                                        <span class="info"><?php the_sub_field('info'); ?></span>
                                    </li>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="pod">
                <div class="row">
                    <div class="col-xs-12 col-md-6">

                        <div class="pod-heading">Eyebrow Enhancements</div>
                        <ul>
                            <?php if(get_field('eyebrows')) : ?>
                                <?php while(has_sub_field('eyebrows')) : ?>

                                    <li>
                                        <span class="product"><?php the_sub_field('title'); ?> <span class="price"><?php the_sub_field('price'); ?></span></span>
                                        <span class="info"><?php the_sub_field('info'); ?></span>
                                    </li>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                    </div>
                    <div class="col-xs-12 col-md-6">

                        <div class="pod-heading">Top Ups</div>
                        <ul>
                            <?php if(get_field('top_ups')) : ?>
                                <?php while(has_sub_field('top_ups')) : ?>

                                    <li>
                                        <span class="product"><?php the_sub_field('title'); ?> <span class="price"><?php the_sub_field('price'); ?></span></span>
                                        <span class="info"><?php the_sub_field('info'); ?></span>
                                    </li>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
        <!-- prices -->
    </div>

    <div class="package-steps">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 intro">
                    <?php the_field('stages_intro'); ?>
                </div>

                <?php $priceLast == 0; if(get_field('stages')) : ?>
                    <?php while(has_sub_field('stages')) : $priceLast++; ?>

                        <div class="col-xs-12 col-md-3 package<?php if( $priceLast == 4 ) {echo " last";} ?>">
                            <img src="<?php the_sub_field('image'); ?>">
                            <div class="copy">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <?php the_sub_field('copy'); ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- package-steps -->

    <?php get_template_part('partials/quotes'); ?>

    <?php get_template_part('partials/portfolio'); ?>

    <?php get_template_part('partials/contact'); ?>

</div>
<!-- page-prices -->

<?php get_footer(); ?>