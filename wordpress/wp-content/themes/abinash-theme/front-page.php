<?php get_header(); ?>

<section class="hero">
  <div class="hero-content">
    <h1>Premium Smartphones</h1>
    <p>Latest models. Best prices. Trusted quality.</p>
    <a href="<?php echo site_url('/shop'); ?>" class="hero-btn">
      Shop Now →
    </a>
  </div>
</section>

<main>
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_content();
    endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>
