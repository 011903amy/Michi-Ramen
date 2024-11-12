<?php 
/**
 * Template Name: Menu
 */

?>

<?php get_header() ?>
</div>
<!-- ANNOUCEMENT -->
      <section class="annoucement bg-tertiary">
        <div class="container">
            <div class="annoucement__wrapper py-3">
                <p class="font-bold text-light text-center  lg:text-xl"><b>MICHI RAMEN</b> • TUESDAY - SUNDAY 11AM - MIDNIGHT • HAPPY HOUR 9PM-11PM </p>
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
                                'terms' => 'ramen',
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

            </div>
        </section>

        <!-- IMAGE -->
         <div class="image">
            <img class="w-full" src="<?php the_field('image1') ?>" alt="">
         </div>

         <!-- RAMEN TOPPINGS -->
          <section class="ramenToppings bg-secondary">
            <div class="container">
                <div class="ramenToppings__title text-center py-10">
                    <h2 class="text-tertiary text-5xl lg:text-[5rem] font-bold"><?php the_field('topping_title') ?></h2>
                    <div class="price flex flex-row justify-center gap-[5rem] mb-5 ">
                        <h3 class="text-primary font-bold text-xl lg:text-3xl"><?php
                        the_field('ramen_type') ?></h3>
                        <h3 class="font-bold text-xl lg:text-3xl"><?php the_field('ramen_price') ?></h3>
                    </div>
                    <p class="text-footer font-bold mb-5"><?php the_field('topping_text') ?></p>
                </div>
                <div class="ramenToppings__wrapper grid grid-cols-2 gap-[5rem] lg:w-[800px] mx-auto">
                        <?php
                        $args= array(
                        'post_type' => 'ramen',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'Toppings',
                            )
                        )
            
                        );
                        $newQuery = new WP_Query($args);

                    ?>

                    <?php
                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>

                        <div class="topping">


                            <div class="topping__card">
                                <div class="price flex flex-row gap-[6rem] lg:justify-between mb-3">
                                    <h3 class="text-footer font-bold font-montserrat"><?php the_title() ?></h3>
                                    <h3 class="text-footer font-bold font-montserrat"><?php the_field('ramen_price') ?></h3>
                                </div>
                                <div class="text-footer font-montserrat font-bold mb-[5rem]"><?php the_excerpt() ?></div>
                            </div>
                            
                        </div><?php
                        endwhile;
                        else : 
                            echo "no available content  yet";
                        
                        endif;
                        wp_reset_postdata();
                        ?>
                     
                
            </div>
          </section>

           <!-- IMAGE -->
         <div class="image">
            <img class="w-full" src="<?php the_field('image2') ?>" alt="">
         </div>

         <!-- DESSERTS -->
           <section class="dessert bg-secondary">
            <div class="container">
                <div class="dessert__title text-center py-10">
                    <h2 class="text-tertiary text-5xl lg:text-[5rem] font-bold">SIDES & DESSERT</h2>
                    
                </div>
                <div class="dessert__wrapper grid grid-cols-2 gap-[5rem] lg:w-[800px] mx-auto">

                 <?php
                        $args= array(
                        'post_type' => 'ramen',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'Dessert',
                            )
                        )
            
                        );
                        $newQuery = new WP_Query($args);

                    ?>

                    <?php
                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>

                        <div class="desserts">
                            <div class="desserts__card">
                                <div class="price flex flex-row gap-[4rem] lg:justify-between mb-3">
                                    <h3 class="text-footer font-bold font-montserrat"><?php the_title() ?></h3>
                                    <h3 class="text-footer font-bold font-montserrat"><?php the_field('ramen_price') ?></h3>
                                </div>
                                <div class="text-footer font-montserrat font-bold mb-[5rem]"><?php the_excerpt() ?></div>
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
          </section>

            <!-- IMAGE -->
         <div class="image">
            <img class="w-full" src="<?php the_field('image3') ?>" alt="">
         </div>

         <section class="drinks pb-20">
      <img src="./img/drinks.png" class="w-full" alt="" />
      <div class="container">
        <div class="mt-20 grid place-items-center">
          <h2 class="text-center font-bold text-[60px] text-tertiary uppercase">
            drinks
          </h2>
          <h2
            class="text-center font-bold text-[40px] text-customGray uppercase mb-4"
          >
            join us for happy hour
          </h2>
          <p class="uppercase font-bold text-center text-[18px] mb-16">
            3-6pm / 9-11pm • $1 off all beer | wednesday 5-11pm • $2 sake
            caraffes
          </p>
        </div>
        <div class="grid place-items-center mb-16">
          <ul
            class="drinksType uppercase flex items-center gap-20 lg:[&>li]:text-[55px] [&>li]:text-[30px] font-bold font-economica [&>li]:cursor-pointer py-8"
          >
                        <?php
                        $args= array(
                        'post_type' => 'Drink',
                        'posts_per_page' => -1,
                        
                        );
                        $newQuery = new WP_Query($args);

                    ?>

                    <?php
                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>


            <li id="drinkTypeItem-<?php the_field('drink_id') ?>" class="drinkNav"><?php the_title() ?></li>
           

            <?php
                        endwhile;
                        else : 
                            echo "no available content  yet";
                        
                        endif;
                        wp_reset_postdata();
                        ?>
          </ul>
        </div>
        <div class="wrapper lg:w-[1000px] mx-auto ">
                        
         <?php
                        $args= array(
                        'post_type' => 'drink',
                        'posts_per_page' => -1,
                        
                        );
                        $newQuery = new WP_Query($args);

                    ?>

                    <?php
                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>



                      
          <div id="drinkTypeItem-<?php the_field('drink_id') ?>-content" class="drinkGroup hidden ">

            <?php if(have_rows('drink_type')): ?>
             <?php while(have_rows('drink_type')) : the_row()?>


            <div>
              <p class="uppercase text-center text-xl font-bold mb-4"><?php the_sub_field('group_name') ?></p>


               <?php if(have_rows('drink_group')): ?>
                            <?php while(have_rows('drink_group')) : the_row()?>
              <div class="toppingsItem text-footer">
                <div class="flex justify-between">
                  <div class="toppingsName">
                    <p class="uppercase text-2xl font-bold"><?php the_sub_field('name') ?></p>
                    <p class="text-sm font-semibold">
                      <?php the_sub_field('descriptions') ?>
                    </p>
                  </div>
                  <div class="thePrice">
                    <p class="text-2xl font-bold"><?php the_sub_field('price') ?></p>
                  </div>
                </div>
              </div>

              <?php endwhile; ?>
                    <?php endif; ?>
            </div>
            

               <?php endwhile; ?>
                    <?php endif; ?>
          </div>  
                        <?php
                        endwhile;
                        else : 
                            echo "no available content  yet";
                        
                        endif;
                        wp_reset_postdata();
                        ?>
        </div>
        
      </div>
    </section>



 <script>
    const drinkNav = document.querySelectorAll(".drinkNav").item(0);
    drinkNav.classList.add("active");
    

    const drinkGroupContent = document.querySelectorAll(".drinkGroup").item(0);
    drinkGroupContent.classList.add("active");
    

      const itemNav = document.querySelectorAll(".drinksType li");
      const drinkGroup = document.querySelectorAll(".drinkGroup");
      itemNav.forEach((menuList) => {
        menuList.addEventListener("click", () => {
          removeActiveMenu();
          menuList.classList.add("active");
          const drinkGroupContent = document.querySelector(
            `#${menuList.id}-content`
          );
          removeContentActive();
          drinkGroupContent.classList.add("active");
        });
      });


      function removeActiveMenu() {
        itemNav.forEach((menu) => {
          menu.classList.remove("active");
        });
      }


      function removeContentActive() {
        drinkGroup.forEach((content) => {
          content.classList.remove("active");
        });
      }
    </script>


            <!-- SCRIPT -->
           <!-- <script src="../js/menuTabs.js"></script> -->
           <script src="../js/toggleMenu.js"></script>

<?php get_footer() ?>