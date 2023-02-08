
<?php get_header(); ?>
<section class="section">
        <div class="container">
          <h1><?php the_title(); ?></h1>
          <p>single site photos</p>
        </div>
        <?php the_content(); ?>
    </section>
<?php
    $args = array(
    'post_type' => 'site_photos', // Указываем наш новый тип записи
    'posts_per_page' => 10,
);
$p = get_posts( $args );
foreach ( $p as $post ) {
    setup_postdata( $post );
    ?>
    <a href="<?= the_permalink() ?>"><?= the_title() ?></a><br />
<?php } wp_reset_postdata(); ?>
<?php get_footer(); ?>