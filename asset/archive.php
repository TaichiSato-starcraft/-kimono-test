<?php get_header(); ?>
archive-投稿一覧
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php endwhile; ?>
    <?php else : ?>
        <p>投稿が見つかりませんでした。</p>
    <?php endif; ?>
<?php get_footer(); ?>