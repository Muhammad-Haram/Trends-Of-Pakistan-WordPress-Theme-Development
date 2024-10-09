<?php get_header(); ?>

    <?php get_template_part('includes/section', 'menu'); ?>



<section class="top-carousel">
  <div class="carousel">
    <div class="progress-bar progress-bar--primary hide-on-desktop">
      <div class="progress-bar__fill"></div>
    </div>

    <header class="main-post-wrapper">
      <div class="slides">
        <?php
        // The query for posts to display in the top carousel
        $carousel_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3, // Adjust the number of posts as needed
            'category_name' => 'topslider', // Replace 'topslider' with the actual slug if different
        ));

        if ($carousel_query->have_posts()) :
            while ($carousel_query->have_posts()) : $carousel_query->the_post(); ?>
                <article class="main-post<?php echo ($carousel_query->current_post === 0) ? ' main-post--active' : ' main-post--not-active'; ?>">
                  <div class="main-post__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php echo get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
                    <?php else : ?>
                      <img src="<?= get_template_directory_uri().'/images/default-image.jpg'?>" alt="" /> <!-- Fallback image -->
                    <?php endif; ?>
                  </div>
                  <div class="main-post__content">
                    <div class="main-post__tag-wrapper">
                      <?php
                      $post_categories = get_the_category();
                      if (!empty($post_categories)) {
                          echo '<span class="main-post__tag">' . esc_html($post_categories[0]->name) . '</span>'; // Display first category
                      }
                      ?>
                    </div>

                    <div class="carousel-brand">
                      <div class="carousel-brand-logo">
                        <img class="carousel-logo" src="<?= get_template_directory_uri().'/images/logo.png'?>" alt="" />
                      </div>
                      <div class="carousel-brand-head">
                        <h1 class="carousel-head">Trends Of Pakistan</h1>
                      </div>
                    </div>

                    <h1 class="main-post__title">
                      <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <a class="main-post__link" href="<?php echo get_the_permalink(); ?>">
                      <span class="main-post__link-text">find out more</span>
                      <svg class="main-post__link-icon main-post__link-icon--arrow" width="37" height="12" viewBox="0 0 37 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11" stroke="white" />
                      </svg>
                    </a>
                  </div>
                </article>
            <?php endwhile;
        else: ?>
            <article class="main-post">
                <p><?php _e('No posts available'); ?></p>
            </article>
        <?php endif; ?>
      </div>
    </header>

    <div class="posts-wrapper hide-on-mobile">
      <?php
      // Reset the query for the posts in the carousel
      $carousel_query->rewind_posts(); // Rewind to the first post
      if ($carousel_query->have_posts()) :
          while ($carousel_query->have_posts()) : $carousel_query->the_post(); ?>
              <article class="post<?php echo ($carousel_query->current_post === 0) ? ' post--active' : ''; ?>">
                <div class="progress-bar">
                  <div class="progress-bar__fill"></div>
                </div>
                <header class="post__header">
                  <?php
                  $post_categories = get_the_category();
                  if (!empty($post_categories)) {
                      echo '<span class="post__tag">' . esc_html($post_categories[0]->name) . '</span>'; // Display first category
                  }
                  ?>
                  <p class="post__published"><?php echo get_the_date(); ?></p>
                </header>
                <h2 class="post__title">
                  <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
              </article>
          <?php endwhile;
      else: ?>
          <article class="post">
              <p><?php _e('No posts available'); ?></p>
          </article>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php wp_reset_postdata(); // Reset post data after custom query ?>


<section class="top-news-section trend-news-section">

  <div class="news-topic-div">
    <img class="news-topic-logo" src="<?= get_template_directory_uri().'/images/logo.png'?>" alt="" />
    <h1 class="category-title news-topic-heading cursor-none">Trending News</h1>
  </div>

  <div class="trend-news">
  
    <div class="trend-news-left cursor-color">
      <?php
      // Query for the top news (only 1 post)
      $top_news_query = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 1, // Get only the top post
          'category_name' => 'Tending News', // Adjust the category slug as needed
      ));
      
      if ($top_news_query->have_posts()) :
          while ($top_news_query->have_posts()) : $top_news_query->the_post(); ?>
              <h1 class="trend-news-left-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h1>
              <div class="timeDate">
                <p class="timeDate-category">
                  <?php
                  $categories = get_the_category();
                  foreach ($categories as $cat):
                    if ($cat->name === 'topslider' || $cat->name === 'Tending News') {
                      continue;
                  }
                  ?>
                    <a href="<?php echo get_category_link($cat); ?>">
                      <?php echo esc_html($cat->name); ?>
                    </a>
                  <?php endforeach; ?>
                </p>
                <p>|</p>
                <p><?php echo get_the_date(); ?></p>
                <p>|</p>
                <p><?php echo get_the_time(); ?></p>
              </div>
              <div class="imageDiv">
                <?php if (has_post_thumbnail()) : ?>
                  <?php echo get_the_post_thumbnail(get_the_ID()); ?>
                <?php else : ?>
                  <img src="<?= get_template_directory_uri().'/images/default-image.jpg'?>" alt="" />
                <?php endif; ?>
              </div>
          <?php endwhile;
      else: ?>
          <p><?php _e('No trending news available.'); ?></p>
      <?php endif; ?>
    </div>

    <div class="trend-news-right cursor-color">
      <?php
      // Query for the next 3 news articles
      $other_news_query = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 3, // Get the next 3 posts
          'category_name' => 'Tending News', // Adjust the category slug as needed
          'offset' => 1, // Skip the first post
      ));

      if ($other_news_query->have_posts()) :
          while ($other_news_query->have_posts()) : $other_news_query->the_post(); ?>
              <div class="trend-news-side">
                <div class="trend-news-side-content">
                  <h1 class="trend-news-side-content-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h1>
                  <p class="trend-news-side-content-para">
                  <?php echo substr(get_the_excerpt(),0,70) ?>
                  </p>
                  <div class="timeDate timeDate-side">
                    <p class="timeDate-category">
                      <?php
                      $categories = get_the_category();
                      foreach ($categories as $cat):
                        if ($cat->name === 'topslider' || $cat->name === 'Tending News') {
                          continue;
                      }
                      ?>
                        <a href="<?php echo get_category_link($cat); ?>">
                          <?php echo esc_html($cat->name); ?>
                        </a>
                      <?php endforeach; ?>
                    </p>

                    <p>|</p>
                    <p><?php echo get_the_date(); ?></p>
                    <p>|</p>
                    <p><?php echo get_the_time(); ?></p>
                  </div>
                </div>
                <div class="trend-news-side-img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php echo get_the_post_thumbnail(get_the_ID()); ?>
                  <?php else : ?>
                    <img src="<?= get_template_directory_uri().'/images/default-image.jpg'?>" alt="" />
                  <?php endif; ?>
                </div>
              </div>
          <?php endwhile;
      else: ?>
          <p><?php _e('No additional news available.'); ?></p>
      <?php endif; ?>
    </div>
    
  </div>
</section>

<?php wp_reset_postdata(); // Reset post data after custom queries ?>


<section class="top-news-section sports-news-section">

  <div class="news-topic-div">
    <img class="news-topic-logo" src="<?= get_template_directory_uri().'/images/logo.png'?>" alt="" />
    <h1 class="category-title cursor-none">Sports</h1>
  </div>

  <div class="news-cards">
    <?php
    // Query for the top 6 posts in the Sports category
    $sports_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 6, // Get 6 posts
        'category_name' => 'sports', // Adjust the category slug as needed
    ));

    if ($sports_query->have_posts()) :
        while ($sports_query->have_posts()) : $sports_query->the_post(); ?>
            <div class="news-single-card">
              <div class="news-single-card-img">
                <?php if (has_post_thumbnail()) : ?>
                  <img class="newsCard-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" />
                <?php else : ?>
                  <img class="newsCard-img" src="<?= get_template_directory_uri().'/images/default-image.jpg'?>" alt="" /> <!-- Fallback image -->
                <?php endif; ?>
              </div>
              <div class="news-single-card-h1-div">
                <h1 class="news-single-card-h1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              </div>
              <div class="timeDate timeDate-card">
                <p class="timeDate-category"><a href="/sports.html">Sports</a></p>
                <p>|</p>
                <p><?php echo get_the_date(); ?></p>
                <p>|</p>
                <p><?php echo get_the_time(); ?></p>
              </div>
            </div>
        <?php endwhile;
    else: ?>
        <p><?php _e('No sports news available.'); ?></p>
    <?php endif; ?>
    
    <?php wp_reset_postdata(); // Reset post data after custom queries ?>
  </div>

</section>

<section class="swiper-news">

  <div class="news-topic-div">
    <img class="news-topic-logo" src="<?= get_template_directory_uri().'/images/logo.png'?>" alt="" />
    <h1 class="category-title news-topic-heading cursor-none">Health</h1>
  </div>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php
      // Query for the top 6 posts in the Health category
      $health_query = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 6, // Get 6 posts
          'category_name' => 'health', // Adjust the category slug as needed
      ));

      if ($health_query->have_posts()) :
          while ($health_query->have_posts()) : $health_query->the_post(); ?>
              <div class="swiper-slide">
                <div class="swiper-img-div">
                  <?php if (has_post_thumbnail()) : ?>
                    <img class="swiper-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" />
                  <?php else : ?>
                    <img class="swiper-img" src="<?= get_template_directory_uri().'/images/default-image.jpg'?>" alt="" /> <!-- Fallback image -->
                  <?php endif; ?>
                </div>

                <div class="swiper-shade"></div>

                <div class="swiper-inner-content">
                  <div class="swiper-date">
                    <p><a href="/health.html">Health</a></p>
                    <p>|</p>
                    <p><?php echo get_the_date(); ?></p>
                    <p>|</p>
                    <p><?php echo get_the_time(); ?></p>
                  </div>

                  <div class="swiper-news-heading">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  </div>
                </div>
              </div>
          <?php endwhile; ?>

          <div class="swiper-slide">
            <div class="swiper-seeMore cursor-color-white">
              <a href="/health.html" class="cursor-color-none">See More</a>
            </div>
          </div>

      <?php else: ?>
          <div class="swiper-slide">
            <p><?php _e('No health news available.'); ?></p>
          </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); // Reset post data after custom queries ?>
    </div>
  </div>
  
  <div class="swiper-pagination"></div>
</section>


<section class="top-news-section trend-news-section">

  <div class="news-topic-div">
    <img class="news-topic-logo" src="<?= get_template_directory_uri().'/images/logo.png'?>" alt="" />
    <h1 class="category-title news-topic-heading cursor-none">Politics</h1>
  </div>

  <div class="multicard-container">
    <?php
    // Fetch top 6 articles from the Politics category
    $args = array(
      'category_name' => 'politics', // Category slug
      'posts_per_page' => 6 // Limit to top 6 articles
    );

    $politics_query = new WP_Query($args);

    if ($politics_query->have_posts()) :
      while ($politics_query->have_posts()) : $politics_query->the_post();
    ?>
        <div class="card" style="--cards:3">
          <div class="child">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="date-div">
                    <p><a href="/health.html">Poltics</a></p>
                    <p>|</p>
                    <p><?php echo get_the_date(); ?></p>
                    <p>|</p>
                    <p><?php echo get_the_time(); ?></p>
                  </div>

          </div>
          <div class="child"></div>
          <div class="child"></div>
        </div>
    <?php
      endwhile;
      wp_reset_postdata(); // Reset post data after the loop
    else :
    ?>
      <div class="card" style="--cards:3">
        <div class="child">
          <h2>No articles found in this category.</h2>
          <p>0 articles</p>
        </div>
        <div class="child"></div>
        <div class="child"></div>
      </div>
    <?php
    endif;
    ?>
  </div>
</section>


<footer>
  <div class="footer-div">
    <img class="footer-logo" src="<?= get_template_directory_uri().'/images/logo.png'?>" alt="" />
  </div>
  <div class="footer-div">
    <p>Trends of Pakistan is your ultimate source for the latest and most reliable updates on everything shaping the
      nation. From the latest advancements in technology and business developments to the hottest sports events,
      automotive innovations, educational breakthroughs, real estate opportunities, and entertainment buzz, we cover
      it all. Stay informed with our in-depth analysis and comprehensive coverage of the trends that matter most in
      Pakistan today.</p>
  </div>
  <div class="footer-div">
    <p><a href="/sports.html">Sports</a></p>
    <p><a href="/tech.html">Tech And Telecom</a></p>
    <p><a href="/health.html">Health</a></p>
    <p><a href="/business.html">Business</a></p>
    <p><a href="/politics.html">Politics</a></p>
    <p><a href="/entertainments.html">Entertainments</a></p>
    <p><a href="/education.html">Education</a></p>
    <p><a href="/contact.html">Contact Us</a></p>

  </div>
</footer>
    

<?php get_footer(); ?>