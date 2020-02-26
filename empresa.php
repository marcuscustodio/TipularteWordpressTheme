<?php

/*

Template Name: a empresa

*/

?>
<?php get_header();?>
	
	<section>
		<div class="sobre">
			<div class="container">
        <?php
                // Start the Loop.
          while ( have_posts() ) : the_post();?>

          <h2><?php the_title();?></h2>
          <p><?php the_field('subtitulo'); ?></p>

           <?php endwhile; ?>

				<div class="descricao">
					<p><?php the_content();?></p>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="equipe">


			<h2><?php the_field('titulo-equipe'); ?></h2>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="img-equipe">
							<?php 

                $image = get_field('imagem-equipe');

                if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="texto-equipe">
							<?php the_field('descricao_equipe'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

  <section>
    <div class="tripularte">
      <h2><?php the_field('Titulo-bloco2');?></h2>
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-lg-7">
             <?php the_field('descricao-bloco2');?>
          </div>
          <div class="col-md-5 col-lg-5">
            <div class="img-renata">
              <?php 

                $image = get_field('img-renata');

                if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="bg-contato-empresa">
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
                  <img src="<?php bloginfo('template_url');?>/img/face.png" alt=""><p>Tripularte</p>
                </div>
              </div>
            </div>
            <div class="col-md-7 co-lg-7">
             <?php echo do_shortcode('[contact-form-7 id="48" title="contato"]');?>
            </div>
          </div>
        </div>
      </div>
    </section>
	
<?php get_footer();?>