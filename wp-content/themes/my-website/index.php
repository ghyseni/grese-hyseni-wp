<?php get_header();?>

<main id="main" class="about">

  <article class="content">
<?php
while (have_posts()):
  the_post();
the_content();
endwhile;
?>
  </article>
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
    <span class="bg-image">
    </span>
  </section>

</main>

<?php get_footer(); ?>
