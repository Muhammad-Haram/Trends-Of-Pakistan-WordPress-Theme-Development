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
              if ($cat->name === 'topslider' || $cat->name === 'Trending News') {
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
              <a href="#" class="social-anchor">

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>

              </a>
            </li>
            <li class="single-social-link">
              <a class="social-anchor" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg>
            </a>
            </li>
            <li class="single-social-link">
              <a class="social-anchor" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
              </a>
            </li>
            <li class="single-social-link">
              <a class="social-anchor" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"/></svg>  
            </a>
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
                                       if ($cat->name === 'topslider' || $cat->name === 'Trending News') {
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