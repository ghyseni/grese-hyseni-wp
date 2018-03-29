<?php
/*
 * Template name: Portfolio
 */
get_header();
while (have_posts()):
    the_post();
    ?>
    <main id="main" class="portfolio">
        <!--      Titulli i pages -->
        <h2 class="page-title"><?php the_title(); ?></h2>

        <?php
        $args = array(
            'post_type' => 'post',
        );
        $query = new WP_Query($args);

        include('parts/posts.php');
        ?>

    </main>
<?php
endwhile;
get_footer();
?>
