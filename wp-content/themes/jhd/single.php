<?php get_header(); ?>

    <div class="page-blog">

        <div class="banner">
            <h1 class="subheading"><span>Blog</span></h1>
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-9">
                        <div class="article">
                            <article>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <div class="col-xs-12 col-md-2 post-date">
                                    <div class="row">
                                        <span class="date">
                                            <span><?php the_time('M'); ?></span>
                                            <span><?php the_time('y'); ?></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-10 post-content">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    <?php /* if ( comments_open() || get_comments_number() ) {
                                        comments_template();
                                    } */?>
                                    <?php endwhile; // end of the loop. ?>
                                </div>
                            </article>
                        </div>
                    </div>

                    <?php get_sidebar(); ?>

                </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>