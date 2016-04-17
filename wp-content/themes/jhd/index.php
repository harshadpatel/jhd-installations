<?php get_header(); ?>
    <div class="page-blog">

<div class="banner">
    <h1 class="subheading"><span>Blog</span></h1>
</div>

        <div class="content">

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-9">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="article item">
                        <article>
                        <div class="col-xs-12 col-md-2 post-date">
                            <div class="row">
                            <span class="date">
                                <span><?php the_time('M'); ?></span>
                                <span><?php the_time('y'); ?></span>
                            </span>
                                </div>
                        </div>

                        <div class="col-xs-12 col-md-10 post-content">

                            <div class="title">
                                <h2><?php the_title(); ?></h2>
                            </div>

                            <div class="meta">
                                Author: <span class="author"><?php the_author(); ?></span> / Categories: <span class="categories"><?php the_category(', '); ?></span>
                            </div>

                            <div class="copy">
                                <?php the_excerpt(); ?>
                            </div>

                        </div>
                        </article>
                    </div>

                <?php endwhile; endif; ?>


            </div>

            <?php get_sidebar(); ?>

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

<?php get_footer(); ?>