<?php get_header(); ?>

    <?php get_template_part('includes/section','menu'); ?>

    <main>
      <div class="singleposts-top">
        <div class="singleposts-heading">
          <h1><?php the_title();?></h1>
        </div>

        <div class="singleposts-detail">
          <div class="timeDate timeDate-card">

            
        <p class="timeDate-category">
          <?php
              $categories = get_the_category();
              foreach ($categories as $cat):
              if ($cat->name === 'topslider' || $cat->name === 'Tending News') {
              continue;
              }
              ?>
             <a href="<?php echo get_category_link($cat); ?>">
             <?php echo $cat->name; ?>
             </a>
          <?php endforeach; ?>
        </p>



            <p>|</p>
            <p><?php the_modified_date();?></p>
            <p>|</p>
            <p><?php the_time();?></p>  
            </div>

          <ul class="social-links">
            <li class="single-social-link">
              <a href="#" class="social-anchor"
                ><i class="fab fa-facebook" aria-hidden="true"></i
              ></a>
            </li>
            <li class="single-social-link">
              <a class="social-anchor" href="#"
                ><i class="fab fa-twitter" aria-hidden="true"></i
              ></a>
            </li>
            <li class="single-social-link">
              <a class="social-anchor" href="#"
                ><i class="fab fa-linkedin" aria-hidden="true"></i
              ></a>
            </li>
            <li class="single-social-link">
              <a class="social-anchor" href="#"
                ><i class="fab fa-instagram" aria-hidden="true"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="singleposts-image">

      <?php if(has_post_thumbnail()):?>

<img class="page-article-img" src="<?php the_post_thumbnail_url();?>">

<?php endif;?>

    </div>

      <div class="singleposts-article">
        <div class="singlepost-content">

        <?php get_template_part('includes/section','blogcontent'); ?>

        </div>

        
      <div class="recentBox">
           <div class="recentBox-2">
        <div class="recentBox-search">
            <div class="recentBox-search-img">
                <img src="/assets/img/search.png" alt="" />
            </div>
            <input type="search" placeholder="Search" />
            <!-- <?php get_search_form();?> -->
        </div>

        <div class="recentBox-all">
            <h1 class="recentBox-para">Recent-news</h1>
            <a class="recentBox-viewAll" href="/">view all</a>
        </div>

        <div class="recentBox-posts">
            <?php 
                // The query for default posts
                $the_query = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                )); 
            ?>

            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="recentBox-post">
                        <div class="recentBox-img">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'recentBox-imgSrc')); ?>
                            <?php else : ?>
                                <img class="recentBox-imgSrc" src="<?= get_template_directory_uri().'/images/default-image.jpg'?>" alt="" /> <!-- Fallback image -->
                            <?php endif; ?>

                            <div class="recentBox-gradient"></div>
                            <div class="recentBox-post-content">

                              <div class="recentBox-cate">

                              <?php
                                   $categories = get_the_category();
                                   foreach ($categories as $cat):
                                       // Skip 'Tending News' and 'Top Slider' categories
                                       if ($cat->name === 'topslider' || $cat->name === 'Tending News') {
                                           continue;
                                       }
                                       ?>
                                       <a class="recentBox-cate-anchor" href="<?php echo get_category_link($cat); ?>">
                                           <?php echo $cat->name; ?>
                                       </a>
                            <?php endforeach; ?>

                              </div>

                                <div class="recentBox-post-content-details">
                                    <h1 class="recentBox-post-content-h1">
                                        <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h1>
                                    <a href="<?php echo get_the_permalink(); ?>" class="recentBox-post-content-readMore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e('No News'); ?></p>
            <?php endif; ?>

            <?php wp_reset_postdata(); // Reset post data after custom query ?>
        </div>
           </div>
      </div>

      </div>
    </main>


<?php get_footer(); ?>