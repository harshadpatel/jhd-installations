    <div class="recent-work">
        <div class="container">

            <h2><span>Case Studies</span></h2>
            <p>Browse examples of our premium signage work with some of the biggest brands in the world and get in touch if you want to add your brand here.</p>
            <div class="row">
                <ul class="recent-work-gallery">

                    <?php if(get_field('recent_work')) : ?>
                        <?php while(has_sub_field('recent_work')) : ?>

                            <li class="col-xs-6 col-md-4">
                                <a class="fancybox" href="<?php the_sub_field('image_large'); ?>">
                                    <img src="<?php the_sub_field('image_thumb'); ?>" class="img-responsive-full" />
                                    <span></span>
                                </a>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>