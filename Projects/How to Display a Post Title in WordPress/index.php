<?php if (have_posts()) : while (have_posts()) : the_post(); //The Loop through post ?>
    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h1><a href="<?php the_permalink(); //The Echo The Post Link ?>"><?php  the_title(); //The Echo The Post Title ?></a></h1>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
    <div class="navigation">
        <div class="next-posts"><?php next_posts_link(); ?></div>
        <div class="prev-posts"><?php previous_posts_link(); ?></div>
    </div>
<?php else : ?>
    <div>
        <h1>Not Found</h1>
    </div>
<?php endif; ?>    
