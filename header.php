<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-expand-lg" id="home">
            <div class="container">
          <a href="<?php echo esc_url(home_url('/')); ?>">  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Company Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
            
            <?php
               wp_nav_menu(
                array(
                    "theme_location"=> "top-menu",
                )
                ); ?>
               
          </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="showbox container-fluid">
        <div class="content container">
            <div class="row ">
                <div class="col-md-8">
                    <div class="text">
                        <h1><?php bloginfo('description'); ?></h1>
                        <h1><?php echo esc_html__('We write code that works for your buisness..', 'coding-agency'); ?></h1>
                        <p><?php echo esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptates distinctio nam ad, voluptas ipsum perferendis! Dicta, deleniti.', 'coding-agency'); ?></p>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-success"><?php echo esc_html__('View more details', 'coding-agency'); ?></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <span style="font-size: 20rem;">{...}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
