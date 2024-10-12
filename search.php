<?php get_header(); ?>

<?php get_template_part('includes/section', 'menu'); ?>

    <?php if (have_posts()): ?>
        <div class="search-results">
            <?php while (have_posts()): the_post(); ?>

                <div class="single-result" <?php post_class('blog-post'); ?>>

                    <div class="blog-box">
                            

                        <div class="blog-box-result">
                            <div class="blog-box-title">
                                <a href="<?php echo get_the_permalink(); ?>" class="search-blog-links"><?php the_title(); ?></a>
                            </div>
                            <p class="blog-short-para"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

                            <div class="date-time">
                                <p><?php the_time();?></p>
                                <p>|</p>
                                <p><?php the_modified_date();?></p>
                            </div>

                        </div>

                        <div class="blog-box-img">
                           <img src="<?php the_post_thumbnail_url();?>">
                        </div>

                    </div>

                </div>

            <?php endwhile; ?>
            <div class="pagination">
                <?php previous_posts_link('« Previous'); ?>
                <?php next_posts_link('Next »'); ?>
            </div>
        </div>
    <?php else: ?>
        <div class="notfound-div">
        <img class="notfound-logo" src="<?= get_template_directory_uri().'/images/notfound.png'?>" alt="" />
        <p class="search-notfound"><?php the_search_query(); ?> : Not found</p>
        </div>
    <?php endif; ?>


<!-- Footer -->
<?php get_template_part('includes/section', 'footer'); ?>
<?php get_footer(); ?>
 