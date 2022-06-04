<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  	<?php wp_body_open(); ?>
    <header class="main-head">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="logo" href="<?php echo home_url(); ?>">
          	<?php 
                 $logo_image = get_field('logo_image','option');
            ?>
          	<img src="<?php echo esc_url($logo_image['url']) ?>" alt=""/>
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <button
              class="navbar-toggler navbar-toggler-main"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <!-- <span class="navbar-toggler-icon"></span> -->
              <span class="stick"></span>
            </button>
            
             <?php
                        wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container'=> "ul",
                        'menu_class' => 'navbar-nav'
                          ) ); 

                        ?>            
          </div>
          <div class="hdr-rgt">
          	<?php $get_started_link = get_field('get_started_link','option')  ?>
            <a class="btn" href="<?php echo $get_started_link['url'] ?>"><?php echo $get_started_link['title'] ?></a>
          </div>
          <button
            class="navbar-toggler navbar-toggler-main"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <!-- <span class="navbar-toggler-icon"></span> -->
            <span class="stick"></span>
          </button>
        </nav>
      </div>

      <button
        class="navbar-toggler"
        id="navoverlay"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      ></button>
    </header>
