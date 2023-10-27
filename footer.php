<footer class="footer">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4 text-center menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                    )
                );
                ?>
            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Company Logo">
                <p><?php echo esc_html__('Lorem ipsum dolor sit amet', 'coding-agency'); ?></p>
                <p><?php echo esc_html__('Address', 'coding-agency'); ?></p>
                <p><?php echo esc_html__('Phone', 'coding-agency'); ?></p>
            </div>
            <div class="col-md-4 text-center">
            <h4><?php echo esc_html__('Social Media', 'coding-agency'); ?></h4>
                <p><a href=""><?php echo esc_html__('Facebook', 'coding-agency'); ?></a></p>
                <p><a href=""><?php echo esc_html__('Twitter', 'coding-agency'); ?></a></p>
                <p><a href=""><?php echo esc_html__('Instagram', 'coding-agency'); ?></a></p>
                <p>
            </div>
        </div>
    </div>
    <div class="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-light">
                    <i class="bi bi-facebook"></i>
                    <!-- Add more social icons or remove this section as needed -->
                </div>
                <section class="social-network">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mx-auto text-center d-flex ">
                          <div class="photos">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="Facebook"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" alt="Twitter"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/gp.png" alt="Google+"></a>
               
                                <!-- Add more social icons or remove this section as needed -->
                                </div>
                            </div>
                            <div class="div col-md-4">
                                <p class="text-center fw-bold"><?php bloginfo('name'); ?></p>
                                <!-- <a href="<?php echo esc_url(home_url('/')); ?>">  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Company Logo"></a> -->
                            </div>
                            <div class="div col-md-4">
                                <p class="text-center"><i class="far fa-copyright"></i> <?php echo esc_html__('Dejan Pavlovic for fun', 'coding-agency'); ?></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
