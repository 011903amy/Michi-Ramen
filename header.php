<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
<?php  wp_head() ?>
</head>
<body>

    <!-- HEADER -->
     <?php if(is_front_page()) { ?>
     <div style="background-image:url('<?php the_field('banner_background') ?>') ; background-repeat:no-repeat; background-size:cover;" class="">
        <?php }else{ ?>
            <div style="background-color:#433D3C ; background-size:cover; background-size:cover;" class="">
                <?php } ?>
     <header  class="header relative">
        <div class="container">
            <div class="header__wrapper flex flex-col gap-6 pt-5  lg:flex lg:flex-row lg:justify-between lg:items-center lg:pt-5 lg:py-5 lg:block">
                <div class="header__logo z-50">
                    <?php the_custom_logo() ?>
                </div>
                <ul class="header__nav">
                    <li><a href="./menu.html">MENU</a></li>
                    <li><a href="./home.html">LOCATIONS</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">BLOG</a></li>
                    <a href="" class="btn primarry">ORDER ONLINE</a>
                </ul>
                <div class="toggle__menu">
                    <span></span>
                    <span></span>
                </div>
                
            </div>
        </div>
     </header>