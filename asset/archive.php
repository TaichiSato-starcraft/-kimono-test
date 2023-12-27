<?php get_header(); ?>
<div class="c-column">
<h2 class="c-column__subtitle mid-txt">コラム一覧</h2>
    <div class="c-column-box">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="c-column-box__item">
                <h2 class="c-column-box__item--title"><a class="c-column__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="c-column-box__item--text"><?php the_excerpt(); ?></div>
        </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>投稿が見つかりませんでした。</p>
    <?php endif; ?>
    </div>
    <div class="c-column-pagination">
        <?php
    $args = array(
        'mid_size' => 1,
        'prev_text' => '&lt;&lt;前へ',
        'next_text' => '次へ&gt;&gt;',
        'screen_reader_text' => ' ',
    );
    the_posts_pagination($args);
    ?>
</div>
</div>
<?php get_footer(); ?>