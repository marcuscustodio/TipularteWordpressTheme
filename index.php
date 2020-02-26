<?php get_header();?>

<section>
      <div class="servicos">
        <div class="container">

        <?php
            //args
            $my_args_serv_text = array(
                'post_type' => 'servicos',
                'posts_per_page' => 1,
            );

            //query

            $my_args_serv_text = new WP_Query ($my_args_serv_text);
          ?>

         <?php if($my_args_serv_text->have_posts()) : while($my_args_serv_text->have_posts() ) : $my_args_serv_text->the_post();?>

            <h2><?php the_title();?></h2>
            <p><?php the_content()?></p>
        
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>




          <div class="container-servicos">
            <?php
            //args
            $my_args_cad_service = array(
                'post_type' => 'cad-service',
                'posts_per_page' => -1,
                'order'=>'asc'
            );

            //query

            $my_args_cad_service = new WP_Query ($my_args_cad_service);
          ?>

            <?php if($my_args_cad_service->have_posts()) : while($my_args_cad_service->have_posts() ) : $my_args_cad_service->the_post();?>

            <div class="tipo-servico">
              <a href="#">
                <?php the_post_thumbnail();?>
                <h3><?php the_title();?></h3>
                <?php the_content()?>
              </a>
            </div>
            
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>

          </div>

        </div>
      </div>
    </section>

    <section>
      <div class="avaliacoes">
          <h2>avaliações</h2>
          <div class="box-avaliacoes">
            <div class="container">
                <div id="slide-avaliacoes" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#slide-avaliacoes" data-slide-to="0" class="<?php $c++; if($c == 1) {echo 'active';}?>"></li>
                    <li data-target="#slide-avaliacoes" data-slide-to="1"></li>
                    <li data-target="#slide-avaliacoes" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <?php
                      //args
                      $my_args_avaliacoes = array(
                          'post_type' => 'avaliacoes',
                          'posts_per_page' => -1,
                          'order'=>'asc'
                      );

                      //query

                      $my_args_avaliacoes = new WP_Query ($my_args_avaliacoes);
                    ?>
                    <?php if($my_args_avaliacoes->have_posts()) : $banner = $banners[0];
                  $c = 0; while($my_args_avaliacoes->have_posts() ) : $my_args_avaliacoes->the_post();?>

                    <div class="carousel-item <?php $c++; if($c == 1) {echo 'active';}?>">
                      <?php the_post_thumbnail();?>
                      <h3><?php the_title();?></h3>
                      <p><?php the_content()?></p>
                    </div>


                   
                   <?php endwhile; endif; ?>
                   <?php wp_reset_query(); ?>

                  </div>
                  <a class="carousel-control-prev" href="#slide-avaliacoes" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#slide-avaliacoes" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
          </div>
      </div>
      
    </section>


    <section>
      <div class="bloguinho">
        <div class="container">
          <h2>Bloguinho da Tripularte</h2>
          <div class="container-bloguinho">
            
            <?php
            $my_args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC'
              );

              $my_query = new WP_Query ($my_args);
            ?>

            <?php if($my_query->have_posts()) : while($my_query->have_posts() ) : $my_query->the_post();?>

            <div class="box">
               <?php the_post_thumbnail();?>
              <div class="text">
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
              </div>
            </div>


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
                  <img src="img/fone.png" alt=""><p><?php the_field('telefone'); ?> </p>
                </div>

                <div class="email">
                  <img src="img/email.png" alt=""><p><?php the_field('email'); ?></p>
                </div>

                <div class="face">
                  <img src="img/face.png" alt=""><p><a href="<?php the_field('facebook'); ?>">Tripularte</a></p>
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