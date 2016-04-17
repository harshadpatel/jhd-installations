<div class="col-xs-12 col-sm-3 sidebar">
    <aside>
        <?php get_search_form(); ?>

        <a class="twitter-timeline" href="https://twitter.com/miriamgrice" data-widget-id="534375993264189440">Latest from Twitter</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        <h3>Recent Comments</h3>

        <?php
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=3');
        ?>
        <ul class="recent-comments">
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>

            <?php endwhile; ?>
        </ul>
    </aside>
</div>