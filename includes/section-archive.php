
<?php
$category = get_queried_object();
$category_slug = $category->slug;

$category_images = array(
    'sports' => 'http://trendsofpk.test/wp-content/uploads/2024/10/sports.png',
    'health' => 'http://trendsofpk.test/wp-content/uploads/2024/10/health.png',
    'politics' => 'http://trendsofpk.test/wp-content/uploads/2024/10/poiltics.png',
    'tech-and-telecom' => 'http://trendsofpk.test/wp-content/uploads/2024/10/tech.png',
    'entertainment' => 'http://trendsofpk.test/wp-content/uploads/2024/10/travel.png',
    'food' => 'http://trendsofpk.test/wp-content/uploads/2024/10/food.png',
    'entertainment' => 'http://trendsofpk.test/wp-content/uploads/2024/10/entert.png',
    'education' => 'http://trendsofpk.test/wp-content/uploads/2024/10/education.png',
    'business' => 'http://trendsofpk.test/wp-content/uploads/2024/10/business.png',
);

$image_url = isset($category_images[$category_slug]) ? $category_images[$category_slug] : 'https://cdn.pixabay.com/photo/2016/04/24/22/30/monitor-1350918_960_720.png';
?>

<section class="page-section-top cursor-color-white topic-text" data-img="<?php echo esc_url($image_url); ?>">
    <h1 class="page-section-top-h1 cursor-color-none"><?php single_cat_title(); ?></h1>
</section>

<div class="pageNews-container">
      <div class="pageNews-article">
<?php if(have_posts() ): while(have_posts() ): the_post();?>


<a class="post-link" href="<?php the_permalink();?>"> <div class="page-article">
    
    <?php if(has_post_thumbnail()):?>

    <img class="page-article-img" src="<?php the_post_thumbnail_url();?>">

    <?php endif;?>


  <div>
    <h1 class="page-article-title">
    <?php the_title();?>
    </h1>
    <p class="page-article-para">
    <?php echo substr(get_the_excerpt(),0,70) ?>
    </p>
    <div class="page-article-timeDate">
    <p class="page-article-cate">

    <?php
    $categories = get_the_category();
    foreach ($categories as $cat):
    if ($cat->name === 'topslider' || $cat->name === 'Trending News') {
        continue;
    }
    ?>
    <a class="page-article-cate-anchor" href="<?php echo get_category_link($cat); ?>">
        <?php echo $cat->name; ?>
    </a>
    <?php endforeach; ?>
    
    </p>
    <p>|</p>
    <p><?php the_modified_date();?></p>
    <p>|</p>
    <p><?php the_time();?></p>
    </div>
  </div>

</div> </a>


<?php endwhile; else: endif;?>
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