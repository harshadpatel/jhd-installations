<?php
/**
 * Template name: Contact
 */

get_header();

?>

<a href="https://www.google.co.uk/maps/place/579+Selby+Rd,+Leeds,+West+Yorkshire+LS15+8PX,+UK/@53.7959828,-1.4356266,16z/data=!4m2!3m1!1s0x487943485808e947:0xffb451be3c628ab2" target="_blank">
    <div class="map">
    </div>
</a>

    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-7 center-col-block">
                <h1 class="subheading"><span><?php the_title(); ?></span></h1>
                <?php the_field('intro'); ?>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="gravity-form">
                        <?php gravity_form(1, $display_title=false, $display_description=true, $display_inactive=false, $field_values=null, $ajax=false, $tabindex); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 details">

                    <ul>
                        <li class="tel"><?php the_field('number'); ?></li>
                        <li class="email"><?php the_field('email'); ?></li>
                        <li class="address"><?php the_field('address'); ?></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>