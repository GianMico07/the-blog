<?php get_header();
/*
  Template Name: Home
*/

?>

<section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1>
              <?php              
              echo get_field('home_title');
              ?>
           </h1>
          <div class="banner__grid">
            <div class="banner__main">

            <?php

            $args = array(
                'post_type' => 'blogPost',
                'posts_per_page' => 1,
            );

            $newQuery = new WP_Query($args);
            ?>

            <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>




              <article class="banner__story">
              

                <?php echo get_the_post_thumbnail()?>
                <div class="banner__story__content">
                    
                  <small><?php echo get_the_date('M-d-y')?></small>
                  <h2><?php the_title() ?></h2>
                  <p>
                    <?php the_excerpt() ?>
                  </p>
                  <a href="#">Read More...</a>
                </div>
              </article>


                    <?php
                        endwhile;
                    else:
                                echo "no available post yet";
                    endif;
                                wp_reset_postdata();
                    ?>
            </div>

            <div class="banner__sidebar">

                <?php

                    $args = array(
                        'post_type' => 'blogPost',
                        'posts_per_page' => 4,
                        'offset' => 1,
                    );

                    $newQuery = new WP_Query($args);
                ?>

                <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                    <div class="card__sm">
                        <!-- <img src="<?php echo get_template_directory_uri() ?>./img/img-3.webp" alt="blog-img" /> -->

                        <?php echo get_the_post_thumbnail()?>
                        <div class="card__sm__content">
                        <small><?php echo get_the_date('M-d-y')?></small>
                        <h3><?php the_title()?></h3>
                        <a href="#">Read More...</a>
                        </div>
                    </div>

              <?php
                endwhile;
            else:
                        echo "no available post yet";
            endif;
                        wp_reset_postdata();
              ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="latest">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__wrapper">

        <?php
              $args = array(
                  'post_type' => 'latestPost',
                  'posts_per_page' => 3,
              );

              $newQuery = new WP_Query($args);
        ?>

        <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
          <div class="card__md">

            <?php echo get_the_post_thumbnail() ?>
            <div class="card__md__content">
              <ul>
                <li><small><?php echo get_the_date('M-dd-y')?></small></li>
                <li><small><?php the_tags('')?></small></li>
              </ul>
              <h3>
                  <?php the_title() ?>
              </h3>

              <p>
                <?php the_excerpt()?>
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>

          <?php
                endwhile;
            else:
                        echo "no available post yet";
            endif;
                        wp_reset_postdata();
          ?>

         
        </div>
      </div>
    </section>

    <section class="feature">
      <div class="feature__content">
        <h2><?php echo get_field('feature_title');?></h2>
        <h3 class="block__header">
        <?php echo get_field('feature_subtitle');?>
        </h3>
        <p>
        <?php echo get_field('feature_details');?>
        </p>
      </div>

      <div class="container">
        <div class="feature__img">
          
            <source srcset="<?php echo get_template_directory_uri() ?>./img/img-9-sm.webp" media="(max-width:719px)" />
            <source srcset="<?php echo get_template_directory_uri() ?>./img/img-9.webp" media="(min-width:720px)" />
            <img src="<?php echo get_template_directory_uri() ?>./img/img-9.webp" alt="blog-img" class="lazy" />
          
        </div>
      </div>

      <div class="container">
        <div class="feature__wrapper">
          <div class="feature__main">
              <?php
                  $args = array(
                      'post_type' => 'featuredPost',
                      'posts_per_page' => 3,
                  );

                  $newQuery = new WP_Query($args);
              ?>

        <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

            <article class="card__lg">
              <?php echo get_the_post_thumbnail() ?>
              <div class="card__lg__content">
                <small><?php echo get_the_date('M d, Y')?></small>
                <h3>
                  <?php the_title() ?>
                </h3>
                <p>
                  <?php the_excerpt() ?>
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>


            <?php
                endwhile;
            else:
                        echo "no available post yet";
            endif;
                        wp_reset_postdata();
          ?>

            
          </div>
          <div class="feature__sidebar">

          <?php
              $args = array(
                  'post_type' => 'sidePost',
                  'posts_per_page' => 5,
              );

              $newQuery = new WP_Query($args);
        ?>

        <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>


            <div class="card__mini">
              <small><?php echo get_the_date('M d, Y')?></small>
              <h4>
                <?php the_title()?>
              </h4>
              <a href="#" style="color:white">Read More ...</a>
            </div>

            <?php
                endwhile;
            else:
                        echo "no available post yet";
            endif;
                        wp_reset_postdata();
          ?>


          </div>
        </div>
      </div>
    </section>

    <script src="./script.js"></script>


<?php get_footer();?>