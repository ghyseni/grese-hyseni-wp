<?php include 'header.php'; ?>
<main id="main" class="page">
    <h2 class="page-title">Resume</h2>
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
</main>
<?php include 'footer.php'; ?>
