<?php

function abinash_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'primary' => 'Primary Menu'
  ]);
}

add_action('after_setup_theme', 'abinash_theme_setup');

function abinash_theme_assets() {
  wp_enqueue_style('abinash-style', get_stylesheet_uri());

  wp_enqueue_script(
    'abinash-script', get_template_directory_uri() . '/js/main.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'abinash_theme_assets');

function abinash_force_login_before_checkout() {
  if (is_checkout() && !is_user_logged_in()) {
    wp_redirect(site_url('/login'));
    exit;
  }
}
add_action('template_redirect', 'abinash_force_login_before_checkout');

function abinash_woocommerce_login_redirect($redirect_to, $request, $user) {
  if (isset($_GET['redirect_to'])) {
    return esc_url($_GET['redirect_to']);
  }

  if (isset($user->roles) && in_array('administrator', $user->roles)) {
    return admin_url();
  }

  return wc_get_checkout_url();
}
add_filter('login_redirect', 'abinash_woocommerce_login_redirect', 10, 3);

