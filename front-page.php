
 <?php get_header()?>
</div>
<!-- BANNER -->
      <section style="background-image:url('<?php the_field('banner_background') ?>'); background-repeat:no-repeat; background-size:cover;" class="banner bg-wood h-screen">
        <div class="container">
            <div class="banner__wrapper ">
                <div class="banner__title py-5">
                   <h1 class="text-light text-center text-[clamp(100px,5vw,100px)] font-montserrat font-bold"><?php the_field('banner_title') ?></h1>
                <p class="text-light text-center text-xl font-montserrat font-bold"><?php the_field('banner_text') ?></p> 
                </div>
                <div class="banner__img flex flex-col items-center mt-[22.2rem] lg:mt-[13.6rem]">
                    <img src="<?php the_field('banner') ?>" alt="">
                </div>
                
            </div>
        </div>
      </section>

      <!-- ORDER -->
       <section class="order bg-secondary">
        <div class="container">
            <div class="order__wrapper py-[5rem]">
                <h2 class="text-tertiary font-bold text-[clamp(30px,5vw,40px)]  text-center">HOW TO ORDER AT MICHI</h2>

                <div class="order_card flex flex-row items-center text-center lg:flex lg:flex-row lg:gap-6 lg:items-center lg:justify-center lg:px-[10rem]">
                    <div class="order">
                        <img  src="<?php the_field('order_img') ?>" alt="">
                        <p class="font-economica text-xl font-bold "><?php the_field('order_text') ?></p>
                        
                    </div>
                        <i class="fa-solid fa-chevron-right text-tertiary text-3xl"></i>
                    <div class="order">
                        <img src="<?php the_field('order_img2') ?>" alt="">
                        <p class="font-economica text-xl font-bold text-center mt-6"><?php the_field('order_text2') ?></p>
                    </div>
                       <i class="fa-solid fa-chevron-right text-tertiary text-3xl"></i> 
                    <div class="order">
                        <img src="<?php the_field('order_img3') ?>" alt="">
                        <p class="font-economica text-xl font-bold mt-4 text-center"><?php the_field('order_text3') ?></p>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- MENU RAMEN -->
        <section  style="background-image:url('<?php the_field('menu_img') ?>') ; background-repeat:repeat;" class="menuRamen bg-menu bg-repeat relative py-[5rem]">
            <div class="container">
                <div class="menuRamen__title">
                    <h2 class="text-light font-bold text-[clamp(30px,5vw,50px)] text-center py-[3rem]">RAMEN MENU</h2>
                </div>
                <div class="menuRamen__wrapper flex flex-col gap-[8rem] items-center justify-center lg:grid lg:grid-cols-2 lg:place-items-center lg:gap-[5rem] lg:px-[5rem] lg:mb-[5rem]">
                    
                     <?php
                        $args= array(
                        'post_type' => 'ramen',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'Ramen',
                            )
                            )
                        );
                        $newQuery = new WP_Query($args);

                    ?>

                    <?php
                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>


                    <div class="ramen flex flex-col gap-[5rem]">

                        <div class="ramen__card flex flex-row gap-6 items-center">

                            <div class="ramen_card--details">
                                <h3 class="text-5xl font-economica font-bold text-footer mb-5"><?php the_title() ?></h3>
                            <p class="text-tertiary text-xl font-bold"><?php the_field('ramen_price') ?></p>
                            <ul class="text-white font-bold font-montserrat">
                                <?php the_field('ramen_ingredients') ?>
                                
                            </ul>
                            <div class="font-coming_soon text-tertiary font-montserrat font-bold text-xl mt-5"><?php the_field('ramen_extra') ?></div>
                            <div class="font-coming_soon text-footer font-bold text-xl mt-5"><?php the_excerpt() ?></div>
                            </div>
                            <div class="ramen__card--img items-start">
                               
                                 <?php if(has_post_thumbnail()){
                                    the_post_thumbnail();
                                    }
                                    ?>
                            
                            </div>
                        </div>
                           
                    </div> 
                    <?php
                        endwhile;
                        else : 
                            echo "no available content  yet";
                        
                        endif;
                        wp_reset_postdata();
                        ?>
                     
                     
                     
                    


                 
                 
                
                </div>








                <div class="absolute bottom-20 right-[55rem]">
                    <a href="http://localhost/michi/menu/" target="_blank" class="btn secondaryy">VIEW OUR FULL MENU</a>
                </div>
            </div>
        </section>
       <!-- HAPPY HOUR -->
        <section class="happyHour bg-secondary pt-5 pb-[15rem] lg:py-[15rem]">
            <div class="container">
                <div class="happyHour__wrapper">
                    <h2 class="text-tertiary font-bold text-center text-5xl">JOIN US FOR HAPPY HOUR</h2>
                    <p class="text-primary font-bold text-center text-2xl mt-5 mb-[5rem] ">3-6PM / 9-11PM • $1 OFF ALL BEER | WEDNESDAY 5-11PM • $2 SAKE CARAFFES</p>
                </div>
            </div>
            <div class="happy__img flex flex-row lg:flex mb-[-15rem]">
                <img class=" w-[10.5rem] lg:w-full" src="<?php the_field('cta1') ?>" alt="">
                <img class=" w-[10.5rem] lg:w-full" src="<?php the_field('cta2') ?>" alt="">
                <img class=" w-[10.5rem] lg:w-full" src="<?php the_field('cta3') ?>" alt="">
            </div>
        </section>




<?php get_footer() ?>