<?php
/**
 * Template Name: FaleConosco
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template faleConosco
 * @since OngCrescer 2018-03-21
 */
?>

<?php get_header(); ?>

                <?php the_content();?>
              


<main class="l-main">
    <div class="l-fale-conosco">
        <div class="row-content">
            <h1>Fale Conosco</h1>
            <form action="mensagem.php" method="post" id="form-fale-conosco" enctype="multipart/form-data">
                <div>
                    <input class="campo-fale-conosco" name="cnome" placeholder="Nome Completo" required=""/>
                    <input class="campo-fale-conosco" name="cmail" placeholder="Endereço de E-mail" type="email" required=""/>
                    <input class="campo-fale-conosco" name="ctel" placeholder="Telefone Celular" required=""/>
                    <input class="campo-fale-conosco" name="cong" placeholder="Como você conheceu a ONG?" required=""/>
                </div>
                <div>
                <textarea id="textarea-fale-conosco" name="cmensagem"  placeholder="Escreva sua Mensagem" required=""></textarea>
            <input class="enviar-fale-conosco" type="submit"/>
            <input id="file-fale-conosco" name="canexo" class="enviar-fale-conosco" type="file" hidden=""/>
            <label for="file-fale-conosco" class="enviar-fale-conosco">Anexar Arquivo</label>
                </div>
            </form>
            <p id="contato-fale-conosco">&#9993; ou envie-nos um email via contato@crescerfomentoavida.com.br</p>
        </div><!-- /row-content -->
    </div><!-- /l-projetos -->
</main>

<?php get_footer(); ?>