<?php
/**
 * Template Name: Single
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template single
 * @since OngCrescer 2018-02-18
 */
?>

<?php get_header(); ?>

<main class="l-main">
    <div class="l-single">
    <div class="row-content">
            
            <?php
                        $images = rwmb_meta('blog-image', 'type=image_advanced');
                        $image_background = null;
                        foreach ($images as $image) {
                            $image_background = $image["full_url"];
                        }
                        ?>
         
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <p><i class="fa fa-pencil"></i><?php echo rwmb_meta('blog-autor') ?> | <i class="fa fa-tag"></i>
        <?php echo rwmb_meta('blog-topico') ?></p>
                    <?php if ( $image_background == TRUE){?>
                                <img class="imagem-single" src="<?php echo $image_background ?>"><?php }else{?>
                                <img class="imagem-single" src="<?php image_url("perfil.jpg") ?>" />
                                <?php }?>
                                <p id="conteudo-single"><?php the_content(); ?></p>
            <?php endwhile; else: ?>
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>            
            <?php endif; ?>
                    <hr>
                    <h5>LEIA TAMBÉM</h5>
                    <div class="row blog-bloco">
                <?php
                $args = array(
                    'showposts' => '4',
                    'post_type' => 'ong_blog',
                    'orderby'   => 'title',
                    'order'     => 'ASC',
                    );
                $my_page = get_posts($args);
                ?>
                <?php if ($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>
                        <?php
                        $images = rwmb_meta('blog-image', 'type=image_advanced');
                        $image_background = null;
                        foreach ($images as $image) {
                            $image_background = $image["full_url"];
                        }
                        ?>
                        
                    <div class="espaco-linha">
                            <div class="row-content">
                                <a href="<?php the_permalink();?>">
                                <?php if ( $image_background == TRUE){?>
                                <img class="imagem-blog" src="<?php echo $image_background ?>"><?php }else{?>
                                <img class="imagem-blog" src="<?php image_url("perfil.jpg") ?>" />
                                <?php }?>
                                </a>
                                <div>
                                <p class="blog-title"><?php the_title(); ?></p>
                                <div>
                                    <p class="blog-info"><i class="fa fa-pencil"></i><?php echo rwmb_meta('blog-autor') ?> | <i class="fa fa-tag"></i>
        <?php echo rwmb_meta('blog-topico') ?></p>
                                </div>
                                <div class="blog-conteudo">
        <?php the_excerpt(); ?>
                                </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                        </div>
    </div>
    </div>
</main>

<?php  get_footer(); ?>