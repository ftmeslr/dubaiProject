<!DOCTYPE html>
<html lang="fa">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo("name"); ?></title>
    <link href="<?php bloginfo("template_directory"); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/style.css" />
  </head>

  <body dir="rtl" class="bg-main">
    <!-- header -->
    <header class="">
      <div class="container">
        <div class="row position-relative">
          <div class="logo_box position-absolute">
            <img class="w-100" src="<?=get_option("wb_logo",get_bloginfo("template_directory")."/images/icons/logo.png"); ?>" alt="" />
          </div>
          <div class="col-12 px-3 d-flex align-items-center">
            <ul class="d-flex border-bottom py-4 w-100 justify-content-center f12 fw-bold">
                <?php wp_nav_menu( array( 'items_wrap' => '%3$s',"theme_location"=>"menu_items","container"=>"",'link_class'=>"text-decoration-none text-black","li_class"=>"mx-4") ); ?>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- header  -->