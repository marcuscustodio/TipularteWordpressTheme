<?php
/*
Template Name: Archives
*/
get_header(); ?>

    <section>
    	<div class="blog-page">
     
    		<h2>Blog</h2>
    		<div class="container">
    			<div class="content-blog">
          
          <?php 
            $args = array(
              'post_type' => 'post',
              'posts_per_page'=>-1,
              'order' => 'DESC',
            );
           ?>
           
           <?php $query = new WP_Query($args);

            if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post();
          ?>

    				<a href="<?php the_permalink();?>">
    					<div class="box">
    						<?php the_post_thumbnail(); ?>
			              <div class="nome">
			                <h3><?php the_title();?></h3>
			                <button>saiba mais</button>
			              </div>
    					</div>
    				</a>

            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
    				
    			</div>
    		</div>
    	</div>
    </section>

    <section id="bg-contato">
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
                  <img src="<?php bloginfo('template_url');?>/img/fone.png" alt=""><p>atendimento@tripularte.com.br </p>
                </div>

                <div class="face">
                  <img src="<?php bloginfo('template_url');?>/img/fone.png" alt=""><p>Tripularte</p>
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
