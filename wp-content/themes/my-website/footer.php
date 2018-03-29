<footer id="footer">
    <section class="copyright">
        &copy; 2017 Copyright - Grese Hyseni
    </section>
    <?php
    $address = get_field('address', 41);
    $tel = get_field('tel', 41);
    $email = get_field('email', 41);

    if ($address || $tel || $email):
        ?>
        <section class="contact-info">
            <?php
            if ($address):
                ?>
                <address class="address">
                    <?php echo $address; ?>
                </address>
            <?php
            endif;
            if ($tel):
                ?>
                <a class="phone" href="tel:<?php echo $tel; ?>">
                    <?php echo $tel; ?>
                </a>
            <?php
            endif;
            if ($email):
                ?>
                <a class="email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            <?php
            endif;
            ?>
        </section>
    <?php
    endif;
    ?>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/app.js"></script>

</body>
<?php wp_footer(); ?>
</html>