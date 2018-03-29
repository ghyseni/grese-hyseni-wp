<?php
get_header();

//This page looks almost the same as the Portfolio page
//They are both used to display posts (in our case as portfolio projects)
?>
<main id="main" class="portfolio">
    <!--      Titulli i pages -->
    <?php
    $category = get_queried_object();
    ?>
    <h2 class="page-title"><?php echo $category->name; ?></h2>

    <?php
    $args = array(
        'post_type' => 'post',
    );
    $query = new WP_Query($args);
    include('parts/posts.php');
    ?>

</main>
<?php
get_footer();
?>
