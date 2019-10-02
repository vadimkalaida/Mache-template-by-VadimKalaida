<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mache
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header" style="background: url('<?php echo get_theme_mod('header_background'); ?>')">
    <div class="header_container">
      <div class="header_top">

        <div class="header_top_left">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('site_logo'); ?>" alt="Site Logo" class="header-sitelogo"></a>
        </div>

        <div class="header_top_right">
          <ul class="header_navbar">
            <li class="header_navbar-list"><a href="<?php echo home_url(); ?>" style="color: <?php echo get_theme_mod('header_nav_links_color'); ?>;"
                                              onmouseover="this.style.color = '<?php echo get_theme_mod('header_nav_links_hover_color'); ?>'" onmouseout="this.style.color = '<?php echo get_theme_mod('header_nav_links_color'); ?>'"><?php echo get_theme_mod('header_nav_link1'); ?></a></li>
            <li class="header_navbar-list"><a href="#" style="color: <?php echo get_theme_mod('header_nav_links_color'); ?>;"
                                              onmouseover="this.style.color = '<?php echo get_theme_mod('header_nav_links_hover_color'); ?>'" onmouseout="this.style.color = '<?php echo get_theme_mod('header_nav_links_color'); ?>'">About Us</a></li>
            <li class="header_navbar-list"><a href="#" style="color: <?php echo get_theme_mod('header_nav_links_color'); ?>;"
                                              onmouseover="this.style.color = '<?php echo get_theme_mod('header_nav_links_hover_color'); ?>'" onmouseout="this.style.color = '<?php echo get_theme_mod('header_nav_links_color'); ?>'">Our Services</a></li>
            <li class="header_navbar-list"><a href="#" style="color: <?php echo get_theme_mod('header_nav_links_color'); ?>;"
                                              onmouseover="this.style.color = '<?php echo get_theme_mod('header_nav_links_hover_color'); ?>'" onmouseout="this.style.color = '<?php echo get_theme_mod('header_nav_links_color'); ?>'">Prices</a></li>
            <li class="header_navbar-list"><a href="#" style="color: <?php echo get_theme_mod('header_nav_links_color'); ?>;"
                                              onmouseover="this.style.color = '<?php echo get_theme_mod('header_nav_links_hover_color'); ?>'" onmouseout="this.style.color = '<?php echo get_theme_mod('header_nav_links_color'); ?>'">Contact</a></li>
          </ul>
        </div>

      </div>
    </div>
  </header>

