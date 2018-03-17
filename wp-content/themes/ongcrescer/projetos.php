<?php
/**
 * Template Name: Projetos
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template projetos
 * @since OngCrescer 2017-10-23
 */
?>

<?php get_header(); ?>

<main class="l-main">
	<div class="l-projetos">
		<div class="row-content">
			<div class="col-md-12 titulo-projeto">
				<h1 class="title">Nossos Projetos</h1>
			</div>
			<div class="row botoes-cima">
				<div class="col-12 col-4 ml-auto">
					<a href="" class="btn btn-warning btn-lg">PONTUAIS</a>
					<a href="" class="btn btn-warning btn-lg">RECORRENTES</a>
					<a href="" class="btn btn-warning btn-lg">ENCERRADOS</a>
				</div>
			</div><!-- row botoes-cima -->
<!-- A partir daqui monta-se as caixas dos projetos -->
<div class="caixa">
                            <?php 
          
                $args = array('post_type' => 'ong_projetos' );
                $my_page = get_posts($args);
                ?>
                <?php if($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>
                            
                            <?php
        $images = rwmb_meta( 'projetos-image', 'type=image_advanced' );
        $image_background = null;
        foreach($images as $image){
          $image_background = $image["full_url"];
        }
        
    ?>
                            
                            <div class="div-img-projetos">
					<img align="middle" class="img-circle" src="<?php echo $image_background ?>" />
				</div>
                            <div class="info">
                                    
                
              
                
					<p class="titulo-caixa"><?php the_title();?></p>
					<p class="subtitle"><?php the_excerpt();?></p>
					<div class="row botoes-baixo">
						<div>
                                                    <a href="<?php the_permalink();?>" class="btn btn-default btn-lg">INFORMAÇÕES</a>
							<a href="" class="btn btn-warning btn-lg">INSCREVER-ME</a>
                                                        <div class="causas"><strong>Causas: </strong><?php if (rwmb_meta( 'projetos-causas' ) == TRUE) echo rwmb_meta( 'projetos-causas' ); else echo "undefined" ?></div>
						</div>
					</div><!-- row botoes-baixo -->
				</div><!-- col-10 -->
                                <hr />
                                <?php endforeach; ?>
                <?php endif; ?>
			</div><!-- row caixa -->
			
                        

		</div><!-- /row-content -->
	</div><!-- /l-projetos -->
</main>

<?php  get_footer(); ?>