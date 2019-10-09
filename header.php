<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MySuperSimpleTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-header">
	
    <section class="velkommen_pernille">
        <h2 class="Velkommen">Velkommen til min Portfolio</h2>
        <h2  class="Navn"> Pernille Sofie Hylleberg Mortensen</h2> 
        <img src="/wp-content/themes/prut/img/klatf.png" alt="">
        </section >     
        <ul class="menu"> 
                <a href="/Forside/"><li class="menu_forside">FORSIDE</li></a>
                <a href="/minpassionforfotografering/"><li class="menu_fotografering">MIN PASSION FOR FOTOGRAFERING</li></a>
                <a href="/projekter/"><li class="menu_projekter">PROJEKTER</li></a>         
    </ul>
    



	</header><!-- #masthead -->


