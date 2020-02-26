<?php

/*

Template Name: servicos

*/

?>
<?php get_header();?>

    <section>
    	<div class="servicos-page">
    		<div class="container">
                <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();?>

    			<h2><?php the_title();?></h2>
    			<p><?php the_content();?></p>

            <?php endwhile; ?>
                

                <?php
                $my_args_servicos = array(
                  'post_type' => 'cadastro-servicos',
                  'posts_per_page'=> -1,
                  'order' => 'asc'
                  );

                  $my_args_servicos = new WP_Query ($my_args_servicos);
                ?>

                <?php if($my_args_servicos->have_posts()) : while($my_args_servicos->have_posts() ) : $my_args_servicos->the_post();?>
    			<div class="<?php the_field('tipo'); ?>">
    				
    				<div class="servicos-text">
    					<h3 class="titulo"><?php the_field('titulo'); ?></h3>
    					<?php the_field('descricao'); ?>
    				</div>
    				<div class="servicos-img">
    					<?php 

                        $image = get_field('imagem');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
    				</div>

    				<div class="video">
    					<?php the_field('video'); ?>
    				</div>

    			</div>

                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>

    		</div>
    	</div>
    </section>

     <section id="bg-contato-servicos">
      <div class="contato" id="contato">
        <h2>Atendimento</h2>
        <div class="container">
          <div class="row">
            <div class="col-md-5 co-lg-5">
              <div class="informacoes">
                <div class="tel">
                   <img src="<?php bloginfo('template_url');?>/img/fone.png" alt=""><p>(54) 99995-7573 </p>
                </div>

                <div class="email">
                  <img src="<?php bloginfo('template_url');?>/img/email.png" alt=""><p>atendimento@tripularte.com.br </p>
                </div>

                <div class="face">
                  <img src="img/face.png" alt=""><p>Tripularte</p>
                </div>
              </div>
            </div>
            <div class="col-md-7 co-lg-7">
              <div class="form-contato">
                <form action="">
                  <input type="text" class="responsavel" placeholder="Nome do responsavel">
                  <input type="text" class="nome-crianca" placeholder="Nome da criança">
                  <input type="text" class="idade" placeholder="Idade da criança">
                  <input type="text" class="data" placeholder="Data da Festa">
                  <input type="text" class="local" placeholder="Local do Evento">
                  <input type="text" class="cidade" placeholder="Cidade do Evento">
                  <div class="message">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                    <input type="submit" class="enviar" value="enviar">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer();?>

  