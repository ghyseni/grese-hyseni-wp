<footer id="footer">
    <section class="copyright">
        &copy; 2017 Copyright - Grese Hyseni
    </section>

    <?php
    /*
     * Get contact info, from My Setting option page added fields
     */
    $address = get_field('address', 'option');
    $phone_numbers = get_field('phone_numbers', 'option');
    $emails = get_field('emails', 'option');
    //We'll convert the test returned from phone number to an array, using comma delimiter
    $phone_numbers_array = explode(',', $phone_numbers);
    $emails_array = explode(',', $emails);
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
        if ($phone_numbers):
            foreach ($phone_numbers_array as $phone_number):
                ?>
                <a class="phone" href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
                <?php
            endforeach;
        endif;
        if ($emails):
            foreach ($emails_array as $email):
                ?>
                <a class="email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                <?php
            endforeach;
        endif;
        ?>
    </section>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/app.js"></script>
<?php wp_footer(); ?>
</body>

</html>
