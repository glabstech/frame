<?php get_header(); ?>

        <!--==========================
          Hero Section
        ============================-->
        <section id="hero" class="home">
            <div class="hero-container a-wp">
                <?php
                    $hero = get_field('hero_section');
                ?>
                <h1 class="a-fadeIn a-up a-delay-2"><?php echo $hero['main_text'] ?></h1>
                <h2 class="a-fadeIn a-down a-delay-4" data-wow-delay="2s"><?php echo $hero['sub_text'] ?></h2>
            </div>
            <div class="cd-background-wrapper">
                <figure class="cd-floating-background">
                    <img class="image-1" src="/wp-content/uploads/2018/05/homehero-bg-o-min.jpg" alt="image-1">
                    <img class="image-2" src="/wp-content/uploads/2018/05/main_photo-min.png" style="width: 85%;margin: 0 auto;left: 0;right: 0;top: 51%;" alt="image-2">
                </figure>
	        </div>
        </section>
        <!-- #hero -->


        <!--==========================
            Main Body Section
          ============================-->
        
       
        <main id="main">
        <?php
            include_once('includes/partials/partials.php');
		?>	
            
            
            <!--map-->
            <!-- <section>
                <div>
                    <div class="container formaptitle">Where we operate</div>
                </div>
                <section id="map"></section>
            </section> -->
            <!--map ********-->
            
            

                        </main>
                        <?php dynamic_sidebar('pre-footer'); ?>

                        


                        <!-- </body>
                        </html> -->


<?php get_footer(); ?>