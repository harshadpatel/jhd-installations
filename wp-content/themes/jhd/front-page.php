<?php get_header(); ?>

<div class="page-home">

    <div class="feature-banner">
        <div class="item item-one">
            <div class="container">
                <div class="copy">
                    <?php the_field('banner_copy'); ?>
                    <a href="#" class="btn-red with-border triangle-up-left">Get a free quote</a>
                </div>
            </div>
        </div>
    </div>

    <?php /*<div class="product-items">
        <div class="container">
            <div class="row">

                <?php if(get_field('procedure')) : ?>
                    <?php while(has_sub_field('procedure')) : ?>

                        <div class="col-xs-12 col-sm-4 item">
                            <a href="<?php the_sub_field('procedure_link'); ?>">
                            <h3><?php the_sub_field('procedure_title'); ?></h3>

                            <div class="copy">
                                <div class="image">
                                    <img src="<?php the_sub_field('procedure_image'); ?>" class="img-responsive">
                                </div>
                                <p><?php the_sub_field('procedure_copy'); ?></p>
                                <span class="<?php echo strtolower(get_sub_field('procedure_title')) ?>"></span>
                            </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div> */?>


    <div class="whoweare">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 center-col-block copy">
                    <h2><?php the_field('about_title'); ?></h2>
                    <?php the_field('about_copy'); ?>

                    <div class="bottom-cta">
                        <a href="/about-me/" class="btn-red triangle-orig">Find out more</a>
                    </div>
                </div>
                <?php /*<div class="col-xs-12 col-sm-4 image">
                    <img src="<?php echo get_template_directory_uri() ?>/lib/dist/img/page-home/about/miriam.jpg" class="img-responsive-full">
                </div>*/?>
            </div>
        </div>
    </div>

    <div class="whatwedo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 center-col-block copy">
                    <h2><?php the_field('whatwedo_title'); ?></h2>
                    <?php the_field('whatwedo_copy'); ?>
                </div>
                <?php /*<div class="col-xs-12 col-sm-4 image">
                    <img src="<?php echo get_template_directory_uri() ?>/lib/dist/img/page-home/about/miriam.jpg" class="img-responsive-full">
                </div>*/?>
                                    <div class="bottom-cta">
                        <a href="/about-me/" class="btn-red triangle-orig">See our services</a>
                    </div>
            </div>
        </div>
    </div>


    <?php get_template_part('partials/casestudies'); ?>

    <?php get_template_part('partials/quotes'); ?>

    <?php /*<div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7">
                    <div class="copy">
                    <h2>Meet Jessica - One of my clients</h2>
                        <div class="col-xs-12 col-md-9">
                            <div class="row">
                                <p>Jessica came into the salon a few months ago for her eyebrows doing. She was very nervous at first but since getting the results she was after see how her confidence has grown...</p>
                            </div>
                        </div>
                        <a class="btn btn-cta-light-green" href="/case-studies/semi-permanent-eyebrows/">Read Jessica's Experience &gt;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() ?>/lib/dist/img/page-home/clients/img-client.png" class="img-responsive-full">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('partials/contact'); ?>*/ ?>

</div>

<?php get_footer(); ?>