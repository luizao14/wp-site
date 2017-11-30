<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @since OngCrescer 2017-10-23
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav id="navbar" class="l-navbar">
      <div class="row-content">
        <ul class="social-icons">
          <li class="icon-fb">
            <a href="#"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="icon-fb">
            <a href="#"><i class="fa fa-instagram"></i></a>
          </li>
          <li class="icon-fb">
            <a href="#"><i class="fa fa-linkedin"></i></a>
          </li>
        </ul>

        <ul class="actions">
          <li class="phone"><span>(11) 0000-0000</span></li>
        </ul>

        <div class="clear"></div>
      </div>
    </nav>

    <header class="l-header">

      <div class="row-content">
        <a id="logo" href="#"><img src="<?php image_url("logo.png") ?>" alt=""></a>

        <nav id="menu">
          <ul>
            <li>
                <a href="home">Pagina Inicial</a>
            </li>
            <li class="sobre">
                <a href="">Sobre a ONG</a>
              <ul class="submenu">
                  <li><a href="historia">História</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </li>
            <li>
              <a href="">Projetos</a>
            </li>
            <li>
              <a href="">Doe Agora</a>
            </li>
            <li>
              <a href="">Voluntariado</a>
            </li>
            <li>
              <a href="">Blog</a>
            </li>
            <li>
              <a href="">Fale Conosco</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
