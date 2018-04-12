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
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/app/header.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/app/faleConosco.js"></script>
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
            <li class="li-navbar"><span><a href="">(11) 0000-0000</a></span></li>
          <li class="li-navbar"><span><a href="">Suporte</a></span></li>
          <li class="li-navbar"><span><a href="login">Login</a></span></li>
          <li class="li-navbar"><span><a href="login">Cadastre-se</a></span></li>
        </ul>

        <div class="clear"></div>
      </div>
    </nav>

    <header class="l-header">

      <div class="row-content">
        <a id="logo" href="home"><img src="<?php image_url("logo.png") ?>" alt="OngCrescer"/></a>
        <p id="dash">&#9776;</p>
        <nav id="menu">
          <ul>
            <li>
                <a href="home">Home</a>
            </li>
            <li class="menus-ongcrescer">
                <a class="link-ongcrescer" href="sobre">Sobre a ONG</a>
                <a class="link-ongcrescer" href="">Sobre a ONG</a>
            <ul class="submenu">
                  <li><a href="historia">Nossa História</a></li>
                  <li><a href="premios">Prêmios</a></li>
            </ul>
            </li>
            <li class="menus-ongcrescer">
                <a class="link-ongcrescer" href="projetos">Projetos</a>
                <ul class="submenu">
                  <li><a href="">Enviar um Projeto</a></li>
                  <li><a href="">Guia de Voluntariado</a></li>
            </ul>
            </li>
            <li>
              <a href="">Eventos</a>
            </li>
            <li class="menus-ongcrescer">
                <a class="link-ongcrescer" href="">Como Ajudar?</a>
                <ul class="submenu">
                  <li><a href="doe">Faça uma Doação</a></li>
                  <li><a href="voluntarios">Voluntariado</a></li>
                  <li><a href="">Voluntariado</a></li>
                  <li><a href="">Seja Sócio</a></li>
                  <li><a href="">Participe dos Eventos</a></li>
            </ul>
            </li>
            <li>
              <a href="loja">Loja Oficial</a>
            </li>
            <li>
              <a href="blog">Blog</a>
            </li>
            <li>
              <a href="faleConosco">Fale Conosco</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    
