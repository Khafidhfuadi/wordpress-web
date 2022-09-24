<?php

function theme_setup()
{
  add_theme_support('post-thumbnail');
}

add_action('after_setup_theme', 'theme_setup');

function personal_style()
{
  wp_enqueue_style('boot', get_theme_file_uri('assets/css/bootstrap.min.css'));
  wp_enqueue_style('style', get_theme_file_uri('assets/css/templatemo-softy-pinko.css'));
  wp_enqueue_style('font', get_theme_file_uri('assets/css/font-awesome.css'));

  wp_enqueue_script('jq', get_theme_file_uri('assets/js/jquery-2.1.0.min.js'), null, '1.0', true);
  wp_enqueue_script('pop', get_theme_file_uri('assets/js/popper.js'), null, '1.0', true);
  wp_enqueue_script('boot', get_theme_file_uri('assets/js/bootstrap.min.js'), null, '1.0', true);
  wp_enqueue_script('scroll', get_theme_file_uri('assets/js/scrollreveal.min.js'), null, '1.0', true);
  wp_enqueue_script('way', get_theme_file_uri('assets/js/waypoints.min.js'), null, '1.0', true);
  wp_enqueue_script('counter', get_theme_file_uri('assets/js/jquery.counterup.min.js'), null, '1.0', true);
  wp_enqueue_script('img', get_theme_file_uri('assets/js/imgfix.min.js'), null, '1.0', true);
  wp_enqueue_script('custom', get_theme_file_uri('assets/js/custom.js'), null, '1.0', true);
}


add_action('wp_enqueue_scripts', 'personal_style');
