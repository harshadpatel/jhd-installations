<?php
/**
 * Template name: Contact
 */

get_header();

?>

    <div class="map"> 
        <div class="container">
                <h1 class="subheading"><span><?php the_title(); ?></span></h1>
        </div>
    </div>

    <div class="container">

        <div class="row">

        </div>

        <div class="content">
            <div class="row">
                <div class="col-xs-12 col-lg-8 contact-us-form">
                 <h2 class="text-center"><?php the_title(); ?></h2>
                <?php the_field('intro'); ?>
                    <div class="gravity-form">
                        <?php gravity_form(2, $display_title=false, $display_description=true, $display_inactive=false, $field_values=null, $ajax=false, $tabindex); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4 details">
                        <h3>Get in touch for a quote</h3>
                    <ul>
                        <li class="tel"><?php the_field('number'); ?></li>
                        <li class="email"><?php the_field('email'); ?></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>