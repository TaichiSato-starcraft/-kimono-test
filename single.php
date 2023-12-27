<?php get_header();?>
<div class="c-single">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
        <div class="c-block-content__white--border c-single__content">
            <h1 class="c-single__title"><?php the_title();?></h1>
            <div class="c-content__image">
            <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else {
                echo '<img src="' . get_stylesheet_directory_uri() . '/path/to/sample.png" alt="デフォルト画像" />';
            }
            ?>
            </div>
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer();?>