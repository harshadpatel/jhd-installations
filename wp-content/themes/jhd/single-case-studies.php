<?php get_header(); ?>


    <div class="article">
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-7 center-col-block">
                        <h1 class="subheading"><span>Case Studies</span></h1>
                    </div>

                    <div class="content">
                    <div class="col-xs-12 col-md-6 image">
                                <img class="img-responsive-full" src="<?php the_field('page_image'); ?>">
                        </div>
                        <div class="col-xs-12 col-md-6 copy">
                            <h2><?php the_title(); ?></h2>
                            <?php the_field('page_copy'); ?>
                        </div>

                    </div>

                </div>
            </div>
        </article>
    </div>




    <?php get_template_part('partials/quotes'); ?>

<?php get_footer(); ?>