<?php get_header(); ?>

    <main id="main" class="about">

        // The loop will show the content based on what you selected on Settings -> Reading: 'Your homepage displays'
        // IF you selected 'static page' than this will show that page
        // Whereas if you selected 'Your latest posts', it will go through your posts and display each
        <article class="content">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                } // end while
            } // end if
            ?>
        </article>

        // With WP_Query we will create a new query ( instead of the default - the one below while(havE_posts())
        // We will specify the arguments based on which the query will bring the result

        <?php
        $args = array(
            'post_type' => 'page',
            
        );
        $query = new WP_Query( $args );

        ?>

        <section class="skills content">
            <h3>Skills</h3>
            <ul>
                <li>
                    HTML5
                </li>
                <li>
                    CSS3
                </li>
                <li>
                    JS/Jquery
                </li>
                <li>
                    PHP
                </li>
                <li>
                    Wordpress
                </li>
                <li>
                    NodeJS
                </li>
                <li>
                    Java
                </li>
            </ul>
            <span class="bg-image"></span>
        </section>

    </main>

<?php get_footer(); ?>