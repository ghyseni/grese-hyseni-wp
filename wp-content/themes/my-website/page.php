<?php get_header(); ?>

    <main id="main" class="page">
        <?php
        // The loop will show the content based on what you selected on Settings -> Reading: 'Your homepage displays'
        // IF you selected 'static page' than this will show that page
        // Whereas if you selected 'Your latest posts', it will go through your posts and display each
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article class="content">
                    <h2><?php the_title(); ?></h2>
                    <?php
                    if (has_post_thumbnail()):
                    ?>
                    <img src="<?php get_the_post_thumbnail_url('full') ?>" alt="<?php the_post_thumbnail_caption(); ?>" />
                    <?php
                    endif;
                    the_content();
                    ?>
                </article>
            <?php
            endwhile;
        endif;
        ?>
    </main>

<?php get_footer(); ?>