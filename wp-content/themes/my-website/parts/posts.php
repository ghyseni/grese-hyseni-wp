<?php
if ($query->have_posts()) :
    ?>
    <ul class="portfolio-entries">
        <!--        while fillon query (the loop)-->
        <?php
        while ($query->have_posts()) :
            $query->the_post();
            ?>
            <li class="portfolio-entry content">
                <?php
                if (has_post_thumbnail()):
                    ?>
                    <img src="<?php the_post_thumbnail_url('thumbnail') ?>"
                         alt="<?php the_post_thumbnail_caption(); ?>"/>
                <?php
                endif;
                ?>
                <!-- the permalink mundeson hapjen e postit ne single page, ku shihet permbajtja e plote -->
                <a href="<?php the_permalink(); ?>">
                    <!-- titulli i postit-->
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </a>
                <!--
                 Content i postit
                 the_excerpt() printon tekstin nga field Excerpt, nese ajo nuk plotesohet atehere printon 50 fjalet e para te permbajtjes nga Editori
                -->
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <ul class="external-links">
                    <!--
                    Ketu kemi kriju 2 Custom Fields qe permbajne nga nje link te jashtem te post-it
                    field names jane 'code-link' dhe 'live-link'
                    -->
                    <?php
                    $code_link = get_field('code_link');
                    if ($code_link):
                        ?>
                        <li>
                            <a target="_blank" href="<?php echo $code_link; ?>" title="Code">Code</a>
                        </li>
                    <?php
                    endif;
                    $live_link = get_field('live_link');
                    if ($live_link):
                        ?>
                        <li>
                            <a target="_blank" href="<?php echo $live_link; ?>" title="Live">Live</a>
                        </li>
                    <?php
                    endif;
                    ?>
                </ul>

                <!-- Categories -->
                <?php
                $categories = get_the_category();
                if ($categories):
                    ?>
                    <ul class="categories">
                        <?php
                        foreach ($categories as $category):
                            ?>
                            <li>
                                <a href="<?php echo get_category_link($category); ?>"
                                   title="<?php echo $category->name ?>">
                                    <?php echo $category->name; ?>
                                </a>
                            </li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                <?php
                endif;
                ?>
            </li>
        <?php
        endwhile;
        ?>
        <!--  endwhile -->
    </ul>
<?php
endif;
?>