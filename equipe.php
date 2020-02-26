<?php

/*

Template Name: equipe

*/

?>

<?php get_header();?>


    <section>
    	<div class="equipe-page">
    		<h2>Equipe</h2>
    		<div class="container">
    			<div class="content-equipe">
            
            <?php
            //args
            $my_args_equipe = array(
                'post_type' => 'equipe',
                'posts_per_page' => -1,
                'order'=>'asc'
            );

            //query

            $my_args_equipe = new WP_Query ($my_args_equipe);
          ?>

            <?php if($my_args_equipe->have_posts()) : while($my_args_equipe->have_posts() ) : $my_args_equipe->the_post();?>

    				<div class="box">
    					<?php the_post_thumbnail();?>
              <div class="nome">
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                
              </div>
    				</div>

            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>

    				

    			</div>
    		</div>
    	</div>
    </section>

   


    <section id="bg-contato-equipe">
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
                  <img src="<?php bloginfo('template_url');?>/img/email.png" alt=""><p><p>atendimento@tripularte.com.br </p>
                </div>

                <div class="face">
                  <img src="<?php bloginfo('template_url');?>/img/face.png" alt=""><p><a href="<?php the_field('facebook'); ?>">Tripularte</a></p>
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