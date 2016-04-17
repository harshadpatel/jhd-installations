<footer>

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3">

                    <h3>Get in Touch</h3>
                    <div class="address-top">
                    <p>579 Selby Road<br>
                    Leeds<br>
                    LS15 8PX</p>
                        </div>
                    <div class="address-bottom">
                    <p><span>Phone:</span> 07714197772<br>
                    <span>Email:</span> <a href="mailto:mimgrice@gmail.com">mimgrice@gmail.com</a></p>
                        </div>

                </div>
                <div class="col-xs-12 col-md-3">

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
                <div class="col-xs-12 col-md-6">

                    <h3>Contact us</h3>
                    <div class="gravity-form">
                    <?php gravity_form(1, $display_title=false, $display_description=true, $display_inactive=false, $field_values=null, $ajax=false, $tabindex); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="footer-social">
                        <ul class="social">
                            <li class="twitter"><a href="https://twitter.com/miriamgrice">Twitter</a></li>
                            <li class="facebook"><a href="https://www.facebook.com/EliteSemiPermanentMakeup">Facebook</a></li>
                            <?php /* <li class="google"><a href="https://plus.google.com/109626452389979863026/posts">Google+</a></li>
                            <li class="youtube"><a href="#">YouTube</a></li> */ ?>
                        <li class="instagram"><a href="http://instagram.com/miriamgrice/">Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <div class="footer-copyright">
                    <p>Copyright 2014 Miriam Grice. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->

    <?php wp_footer(); ?>

</footer>

<!-- scripts -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/dist/js/scripts.js"></script>

</body>
</html>