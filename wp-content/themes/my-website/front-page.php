<?php get_header(); ?>
    <main id="main" class="about">

        <article class="content">
            <?php
            // The loop will show the content based on what you selected on Settings -> Reading: 'Your homepage displays'
            // IF you selected 'static page' than this will show that page
            // Whereas if you selected 'Your latest posts', it will go through your posts and display each
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                } // end while
            } // end if
            ?>
        </article>

        <section class="skills content">
            <?php
            // With WP_Query we will create a new query ( instead of the default - the one below while(havE_posts())
            // We will specify the arguments based on which the query will bring the result
            $args = array(
                'post_type' => 'page',
                'pagename' => 'skills'
            );
            $skills_query = new WP_Query($args);

            if ($skills_query->have_posts()):
                while ($skills_query->have_posts()):
                    $skills_query->the_post();
                    ?>
                    <h3><?php the_title(); ?></h3>
                    <?php
                    the_content();
                endwhile;
            endif;
            // This allows that every template tag
            // (like the_post_thumbnail()) will refer to the main
            // query not to the custom query ($skills_query)
            wp_reset_postdata();
            ?>
            <span class="bg-image"
                  style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">

            </span>
        </section>

    </main>

<?php get_footer(); ?>