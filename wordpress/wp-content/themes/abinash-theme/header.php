<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<header class="site-header sticky">
  <div class="container">
    
    <div class="logo">
      <a href="<?php echo home_url(); ?>">Rose Mobiles</a>
    </div>

    <div class="right-actions">

      <nav class="main-nav">
        <?php wp_nav_menu(['theme_location' => 'primary']); ?>
      </nav>

      <a class="cart-icon" href="<?php echo wc_get_cart_url(); ?>">
        Cart
        <span class="cart-count">
          <?php echo WC()->cart->get_cart_contents_count(); ?>
        </span>
      </a>

      <button id="darkToggle" aria-label="Toggle dark mode">🌙</button>

    </div>

  </div>
</header>

<body <?php body_class(); ?>>