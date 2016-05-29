    <div class="accreditions">
<div class="row">
        <div class="container">
            <hr>
            <div class="logos">
            <div class="col-xs-12 col-sm-3">
                 <img src="<?php echo get_template_directory_uri() ?>/lib/dist/img/shared/accreditions/pasma.jpg" class="img-responsive center-block">   
            </div>
                        <div class="col-xs-12 col-sm-3">
                 <img src="<?php echo get_template_directory_uri() ?>/lib/dist/img/shared/accreditions/ipaf.jpg" class="img-responsive center-block">   
            </div>
                        <div class="col-xs-12 col-sm-3">
                 <img src="<?php echo get_template_directory_uri() ?>/lib/dist/img/shared/accreditions/cscs.jpg" class="img-responsive center-block">   
            </div>
                        <div class="col-xs-12 col-sm-3">
                 <img src="<?php echo get_template_directory_uri() ?>/lib/dist/img/shared/accreditions/constructionskills.jpg" class="img-responsive center-block">   
            </div>
        </div>
        </div>
    </div>
    </div>


<footer>




</div>

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">

                    <h3 class="first-heading">Get in Touch</h3>
                    <div class="address">
                    <p>07478 279 301<br>
                    <a href="mailto:jhginstallations@gmail.com</a></p>
                        </div>">jhginstallations@gmail.com</a></p>
                        </div>

                </div>
                <div class="col-xs-12 col-md-4">

                    <h3>Links</h3>
                    <div class="menu">
                    <?php
                    $nav_args = array(
                        'container' => '',
                        'menu' => 'Footer',
                        'menu_class' => 'nav navbar-nav'
                    );
                    wp_nav_menu($nav_args);
                    ?>
                    </div>

                </div>
                <div class="col-xs-12 col-md-4">

                    <h3>Contact us</h3>
                    <div class="gravity-form">
                    <?php gravity_form(1, $display_title=false, $display_description=true, $display_inactive=false, $field_values=null, $ajax=false, $tabindex); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top -->



    <?php wp_footer(); ?>

</footer>

<!-- scripts -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/dist/js/scripts.js"></script>

</body>
</html>