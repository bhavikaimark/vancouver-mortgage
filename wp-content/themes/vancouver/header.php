<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vancouver Mortgage Team</title>

	<?php wp_head(); ?>
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fav.png" type="image/x-icon">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet"> 

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
</head>
<?php 
if ( is_front_page() ) {	
	?> <body class="home-page"> <?php 
    }
else { ?>
	<body>
<?php }
?>

 
    <header class="website-header">
       <div class="container">
         
         <a class="logo" href="<?php echo get_site_url(); ?>"><img src="<?php the_field('site_logo', 5); ?>" alt="logo" /></a>
         
         <div class="right-section">
           <ul>
             <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?php the_field('email', 5); ?>"><?php the_field('email', 5); ?></a></li>
             <li><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:<?php the_field('phone', 5); ?>"><?php the_field('phone', 5); ?></a></li>
           </ul> 
         </div>
         
       </div>
    </header>
