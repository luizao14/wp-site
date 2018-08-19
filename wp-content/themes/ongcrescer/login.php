<?php
/**
 * Template Name: Login
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template Login
 * @since OngCrescer 2018-01-02
 */
?>

<?php get_header(); ?>

<?php 
                $args = array('post_type' => 'page', 'pagename' => 'login');
                $my_page = get_posts($args);
                ?>
                <?php if($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>
                
                <?php the_content();?>
              
                <?php endforeach; ?>
                <?php endif; ?>

<main class="l-main">
    <div class="l-login">
    <div class="row-content">
        <hr>
        	
                
        <form id="login">
            <h4>Acesse sua conta</h4>
            <input id="login-email" placeholder="Seu Endereço de E-mail" type="email"/>
            <input id="login-senha" placeholder="Sua Senha" type="password"/>
            <div>
            <a href="">Esqueci minha senha</a>
            <input id="login-entrar" type="submit"/>
            </div>
        </form>
        
        
        <form id="cadastro">
            <h4>Cadastre-se</h4>
            <input class="cadastro-email" placeholder="Seu Endereço de E-mail" type="email"/>
            <input class="cadastro-email" placeholder="Confirme Seu Endereço de E-mail" type="email"/>
            <input class="cadastro-senha" placeholder="Sua Senha" type="password"/>
            <input class="cadastro-senha" placeholder="Confirme Sua Senha" type="password"/>
            <div>
            <input id="cadastro-entrar" type="submit" value="Cadastre-se"/>
            </div>
        </form>
    </div>
    </div>
</main>

<?php get_footer(); ?>
