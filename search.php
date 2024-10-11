<?php get_header(); ?>

<?php get_template_part('includes/section', 'menu'); ?>

<div class="main-search-blog">
    <?php if (have_posts()): ?>
        <div class="search-results">
            <?php while (have_posts()): the_post(); ?>
                <div <?php post_class('blog-post'); ?>>
                    <div class="text-center listing-div px-0">
                    </div>
                    <div class="blog-excerpt">
                        <div>
                            <p class="blog-date"><?php the_modified_date(); ?></p>
                            <h1 class="dark-header mt-2"><?php the_time(); ?></h1>
                            <h1 class="blog-title"><?php the_title(); ?></h1>
                        </div>
                        
                        <div class="blog-box">
                            <a href="<?php echo get_the_permalink(); ?>" class="search-blog-links"><?php the_title(); ?></a>
                            <p class="blog-short-para"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
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
</div>

<!-- Footer -->
<?php get_template_part('includes/section', 'footer'); ?>
<?php get_footer(); ?>
