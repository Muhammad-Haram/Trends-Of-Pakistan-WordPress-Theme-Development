<?php get_header(); ?>

<?php get_template_part('includes/section','menu');?>

<div class="main-search-blog">
<?php if( have_posts('blogs') ):?>

        <?php while( have_posts() ): the_post();?>
        <?php if (get_post_type() === 'blogs'): ?>
        <div <?php post_class('');?> >
                    	<div class="text-center listing-div px-0">
                        </div>
						<div class="blog-excerpt">
                        <div class="">
                        <!-- <p class="blog-date"><?php the_modified_date();?></p> -->
                        <!-- <h1 class="dark-header mt-2"><?php the_time();?></h1> -->
                        <!-- <h1 class="blog-title"><?php the_title();?></h1> -->
                        </div>
                        
                        <div class="blog-box">
                            <a href="<?php echo get_the_permalink(get_the_ID());?>" class="search-blog-links"><?php the_title();?></a>
                            <p class="blog-short-para"><?php echo substr(get_the_excerpt(),0,150) ?></p>
                        </div>

                         <!-- <?php previous_posts_link();?>
                        <?php next_posts_link();?> -->
						</div>
                    </div>
                    <?php endif; ?>
                <?php endwhile;?>               

        </div>

    </div>
    <?php else : ?>
        <p class=""><?php the_search_query();?> : Not found</p>
    <?php endif;?>
    </div>

    <!-- Footer -->
<?php get_template_part('includes/section','footer');?>


<?php get_footer(); ?>
