<?php get_header(); ?>

    <section class="section">
        <h1>index.php</h1>
            <?php if ( have_posts() ) { ?> 
                <?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_title(); ?>
<?php endwhile; ?>
<?php }
?>
    </section> 

      <?php get_footer(); ?>