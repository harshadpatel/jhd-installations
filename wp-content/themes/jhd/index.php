<?php get_header(); ?>
    <div class="page-blog">

<div class="banner">
    <h1 class="subheading"><span>Our Services</span></h1>
</div>

        <div class="content">

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-12">
         <?php if (have_posts()) :
    $count = 0; $paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;
    while (have_posts()) : the_post();
        $count++;
        if ($count <= 6 && $paged === 1) :
            if ($count === 1) echo ''; ?>
                    <div class="article item">
                        <article>
                        <div class="col-xs-12 col-sm-6 col-md-4 post-content">
                            <div class="content-bg">
                            <div class="image">
                                                             <a href="<?php the_permalink(); ?>" class="img-responsive" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>

                            <div class="title">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>


                            <div class="copy">
                                <p><?php the_excerpt(); ?></p>
                            </div>

                            <div class="button">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn-red triangle-orig">Find out more</a>
                            </div>
                        </div>
                        </div>
                        </article>
                    </div>
        <?php else :
            if ($count === 7) echo ''; ?>
                    <div class="article item">
                        <article>
                        <div class="col-xs-12 col-sm-12 col-md-12 post-content">
                            <div class="content-bg">
                            <div class="image">
                                                             <a href="<?php the_permalink(); ?>" class="img-responsive" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>

                            <div class="content-right">

                            <div class="title">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>


                            <div class="copy">
                                <p><?php the_excerpt(); ?></p>
                            </div>

                            <div class="button">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn-red triangle-orig">Find out more</a>
                            </div>
                        </div>
                        </div>
                        </div>
                        </article>
                    </div>
        <?php endif;
    endwhile; ?>
    <div class="nav-previous alignleft"><?php next_posts_link('Older posts'); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link('Newer posts'); ?></div><?php
endif; ?>



            </div>


            <?php paginate(); ?>

            <div class="col-xs-12">
                <?php
                $return = paginate();
                echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
                ?>
            </div>


        </div>
    </div>

            </div>

    </div>

    <?php get_template_part('partials/contact'); ?>

<?php get_footer(); ?>