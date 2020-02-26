<?php get_header();?>


    <section>
      <div class="single">
        <div class="container">
          <?php if(have_posts()) : while(have_posts()) : the_post();?>
          <h2><?php the_title();?></h2>


          <div class="content-post post-equipe">
            <?php the_post_thumbnail(); ?>

            <?php the_content();?>
          </div>
        
		<?php endwhile; ?>
		<?php endif; ?>
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
                  <img src="img/fone.png" alt=""><p>(54) 99995-7573 </p>
                </div>

                <div class="email">
                  <img src="img/email.png" alt=""><p>atendimento@tripularte.com.br </p>
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