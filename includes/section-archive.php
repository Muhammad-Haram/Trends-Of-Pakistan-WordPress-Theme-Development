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
    if ($cat->name === 'Tending News') {
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
          </div>

          <div class="recentBox-all">
            <h1 class="recentBox-para">Recent-news</h1>
            <a class="recentBox-viewAll" href="/">view all</a>
          </div>

          <div class="recentBox-posts">
            <div class="recentBox-post">
              <div class="recentBox-img">
                <img class="recentBox-imgSrc" src="<?= get_template_directory_uri().'/images/babar.avif'?>" alt="" />


                <div class="recentBox-gradient"></div>
                <div class="recentBox-post-content">
                  <div class="recentBox-cate">
                    <a href="/" class="recentBox-cate-anchor">Sports</a>
                  </div>
                  <div class="recentBox-post-content-details">
                    <h1 class="recentBox-post-content-h1">
                      Babar Azam Reportedly Set to Lose White-Ball Captaincy
                    </h1>
                    <a href="/" class="recentBox-post-content-readMore"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="recentBox-post">
              <div class="recentBox-img">
                <img class="recentBox-imgSrc" src="<?= get_template_directory_uri().'/images/england-team.jpg.avif'?>" alt="" />

                <div class="recentBox-gradient"></div>
                <div class="recentBox-post-content">
                  <div class="recentBox-cate">
                    <a href="/" class="recentBox-cate-anchor">Sports</a>
                  </div>
                  <div class="recentBox-post-content-details">
                    <h1 class="recentBox-post-content-h1">
                      Here’s England’s Squad for Pakistan Test Series
                    </h1>
                    <a href="/" class="recentBox-post-content-readMore"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="recentBox-post">
              <div class="recentBox-img">
                <img class="recentBox-imgSrc" src="<?= get_template_directory_uri().'/images/bank img.jpg'?>" alt="" />
                <div class="recentBox-gradient"></div>
                <div class="recentBox-post-content">
                  <div class="recentBox-cate">
                    <a href="/" class="recentBox-cate-anchor">Business</a>
                  </div>
                  <div class="recentBox-post-content-details">
                    <h1 class="recentBox-post-content-h1">
                      Brokerage House Expects Further Cut in Policy Rate Next
                      Week
                    </h1>
                    <a href="/" class="recentBox-post-content-readMore"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="recentBox-post">
              <div class="recentBox-img">

                <img class="recentBox-imgSrc" src="<?= get_template_directory_uri().'/images/books.avif'?>" alt="" />


                <div class="recentBox-gradient"></div>
                <div class="recentBox-post-content">
                  <div class="recentBox-cate">
                    <a href="/" class="recentBox-cate-anchor">Education</a>
                  </div>
                  <div class="recentBox-post-content-details">
                    <h1 class="recentBox-post-content-h1">
                      Punjab Makes Major Course Changes for Class 9 and Class 11
                    </h1>
                    <a href="/" class="recentBox-post-content-readMore"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="recentBox-post">
              <div class="recentBox-img">

                <img class="recentBox-imgSrc" src="<?= get_template_directory_uri().'/images/currency img.jpg'?>" alt="" />

                <div class="recentBox-gradient"></div>
                <div class="recentBox-post-content">
                  <div class="recentBox-cate">
                    <a href="/" class="recentBox-cate-anchor">Business</a>
                  </div>
                  <div class="recentBox-post-content-details">
                    <h1 class="recentBox-post-content-h1">
                      Remittances Sent by Overseas Pakistanis Remain Near $3
                      Billion for Fourth Straight Month
                    </h1>
                    <a href="/" class="recentBox-post-content-readMore"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>