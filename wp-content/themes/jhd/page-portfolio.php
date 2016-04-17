<?php
/**
 * Template name: Portfolio
 */

get_header();

?>

<div class="banner"></div>

<div class="page-portfolio">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 center-col-block">

                <h1 class="subheading"><span><?php the_title(); ?></span></h1>
                <?php the_field('intro'); ?>
            </div>
        </div>
    </div>

        <div class="gallery">
        <div class="container">
        <div class="row">

            <div class="col-xs-12">

                <h2 class="eyebrows">
                    <a href="/case-studies/semi-permanent-eyebrows/">
                        Eyebrows
                    </a>
                </h2>

            </div>
        </div>

        <div class="row">

            <?php if(get_field('eyebrows')) : ?>
                <?php $i = 1; ?>
                <?php while(has_sub_field('eyebrows')) : ?>

                    <?php
                    if($i == 2) {
                        $class = 'alternate';
                    } else {
                        $class = '';
                    }
                    ?>

                    <div class="col-xs-6 col-md-3 image">
                        <span class="<?php echo $class; ?>">Before</span>
                        <img class="img-responsive-full" src="<?php the_sub_field('before'); ?>">

                    </div>
                    <div class="col-xs-6 col-md-3 image">
                        <span class="<?php echo $class; ?>">After</span>
                        <img class="img-responsive-full" src="<?php the_sub_field('after'); ?>">
                    </div>

                    <?php
                    if($i == 2) {
                        $i = 1;
                    } else {
                        $i++;
                    }
                    ?>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <div class="row">
            <div class="col-xs-12">

                <h2 class="eyeliner">
                    <a href="/case-studies/semi-permanent-eyeliner/">
                        Eyeliner
                    </a>
                </h2>

            </div>
        </div>

        <div class="row">
            <?php if(get_field('eyeliner')) : ?>
                <?php $i = 1; ?>
                <?php while(has_sub_field('eyeliner')) : ?>

                    <?php
                    if($i == 2) {
                        $class = 'alternate';
                    } else {
                        $class = '';
                    }
                    ?>

                    <div class="col-xs-6 col-md-3 image">
                        <span class="<?php echo $class; ?>">Before</span>
                        <img class="img-responsive-full" src="<?php the_sub_field('before'); ?>">

                    </div>
                    <div class="col-xs-6 col-md-3 image">
                        <span class="<?php echo $class; ?>">After</span>
                        <img class="img-responsive-full" src="<?php the_sub_field('after'); ?>">
                    </div>


                    <?php
                    if($i == 2) {
                        $i = 1;
                    } else {
                        $i++;
                    }
                    ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="col-xs-12">

                <h2 class="lips">
                    <a href="/case-studies/semi-permanent-lip-liner/">
                        Lips
                    </a>
                </h2>

            </div>
        </div>

        <div class="row">
            <?php if(get_field('lips')) : ?>
                <?php $i = 1; ?>
                <?php while(has_sub_field('lips')) : ?>

                    <?php
                    if($i == 2) {
                        $class = 'alternate';
                    } else {
                        $class = '';
                    }
                    ?>

                    <div class="col-xs-6 col-md-3 image">
                        <span class="<?php echo $class; ?>">Before</span>
                        <img class="img-responsive-full" src="<?php the_sub_field('before'); ?>">

                    </div>
                    <div class="col-xs-6 col-md-3 image">
                        <span class="<?php echo $class; ?>">After</span>
                        <img class="img-responsive-full" src="<?php the_sub_field('after'); ?>">
                    </div>

                    <?php
                    if($i == 2) {
                        $i = 1;
                    } else {
                        $i++;
                    }
                    ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </div>

    </div>
</div>

<?php get_template_part('partials/contact'); ?>

<?php get_footer(); ?>