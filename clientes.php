<?php

/*

Template Name: Clientes e Parceiros

*/

?>
<?php get_header();?>


    <section>
    	<div class="clientes">
    		<h2>Clientes</h2>
    		<div class="container">
    			<div class="content-clientes">
            
            <?php
            //args
            $my_args_clientes = array(
                'post_type' => 'clientes',
                'posts_per_page' => -1,
            );

            //query

              $my_args_clientes = new WP_Query ($my_args_clientes);
            ?>

             <?php if($my_args_clientes->have_posts()) : while($my_args_clientes->have_posts() ) : $my_args_clientes->the_post();?>

    				<div class="box">
    					<?php the_post_thumbnail();?>
    				</div>

    			 <?php endwhile; endif; ?>
           <?php wp_reset_query(); ?>

    			</div>
    		</div>
    	</div>
    </section>

    <section>
    	<div class="parceiros">
    		<h2>Parceiros</h2>
    		<div class="container">
    			<div class="content-parceiros">
          
          <?php
            //args
            $my_args_parceiros = array(
                'post_type' => 'parceiros',
                'posts_per_page' => -1,
            );

            //query

              $my_args_parceiros = new WP_Query ($my_args_parceiros);
            ?>

             <?php if($my_args_parceiros->have_posts()) : while($my_args_parceiros->have_posts() ) : $my_args_parceiros->the_post();?>

    				<div class="box">
    					<?php the_post_thumbnail();?>
    				</div>
            <?php endwhile; endif; ?>
           <?php wp_reset_query(); ?>
    			

    			</div>
    		</div>
    	</div>
    </section>


    <section id="bg-contato-clientes">
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


<?php get_header();?>