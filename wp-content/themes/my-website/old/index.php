<?php get_header(); ?>

<main id="main" class="about">
    <article class="content">
        <?php
        /*
         * Use the so called the Loop to display the post/page to which this template is representing.
         * Since we set the Home Page to display a static post, this will show the content of that page only ( don't get confused by 'while' loop)
         *  */
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </article>

    <?php
    /*
     * Here we need to display skills page, and we get it by it's unique slug
     * In order to use the loop we are using setup_postdata() function to temporarly switch the $post object from the static front page to skills page.
     */


    $query = new WP_Query(array('pagename' => 'skills'));
    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();
            ?>
            <section class="skills content">
                <?php
                the_content();
                ?>
                <span class="bg-image">
                </span>
            </section>
            <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</main>

<?php
get_footer();
