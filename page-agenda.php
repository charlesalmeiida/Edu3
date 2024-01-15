<?php 
    // Template name: Agenda
  ?>

<?php get_header( ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<body>

  <section class="hero-agenda">
    <div class="container">
      <div class="agenda-text" data-aos="fade-up">
        <h1><?php the_field('titulo_agenda_digital') ?></h1>
        <p><?php the_field('subtitulo_agenda_digital') ?></p>
        <a href="Contato">
          <button class="btn-white">
            <?php the_field('botao_agenda_digital') ?>
          </button>
        </a>
      </div>
      <div class="agenda-icons">
      <?php if( have_rows('icones_agenda_digital') ): while ( have_rows('icones_agenda_digital') ) : the_row(); ?>
        <div class="icon">
          <img src="<?php the_sub_field('icone_bullet_agenda') ?>" alt="">
          <p><?php the_sub_field('texto_bullet_agenda') ?></p>
        </div>
       <?php endwhile; else : endif;?>
      </div>
    </div>
  </section>
    
  <section class="comunication">
    <div class="container">
      <div class="principal-image" data-aos="zoom-in">
        <img src="<?php the_field('imagem_principal_agenda_digital') ?>" alt="">
      </div>
      <div class="content-comunication">
        <div class="left" data-aos="fade-right">
          <?php if( have_rows('textos_comunicacao_section') ): while ( have_rows('textos_comunicacao_section') ) : the_row(); ?>
          <div class="text">
            <h3><?php the_sub_field('titulo_bullet_comunicacao') ?></h3>
            <p><?php the_sub_field('subtitulo_bullet_comunicacao') ?></p>
          </div>
          <?php endwhile; else : endif;?>
        </div>
        <div class="right" data-aos="fade-left">
          <img src="<?php the_field('print_mockup_comunicacao') ?>" alt="">
        </div>
      </div>
    </div>
  </section>

   <section
      class="flag-conhecer"
      data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
    >
      <div class="container">
        <div class="left">
          <h2><?php the_field('titulo_section_divisor') ?></h2>
          <p><?php the_field('subtitulo_section_divisor') ?></p>
        </div>
        <div class="right">
          <a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>"
            ><button class="btn-white"><?php the_field('texto_botao_divisor') ?></button></a
          >
        </div>
      </div>
  </section>

  <section class="rotina">
    <div class="container">
      <div class="left" data-aos="fade-right">
        <img src="<?php the_field('imagem_section_rotina') ?>" alt="Print sistema Agenda Digital">
      </div>
      <div class="right" data-aos="fade-left">
      <?php if( have_rows('textos_section_rotina') ): while ( have_rows('textos_section_rotina') ) : the_row(); ?>
        <div class="text">
          <h3><?php the_sub_field('titulo_texto_rotina') ?></h3>
          <p><?php the_sub_field('subtitulo_texto_rotina') ?></p>
        </div>
      <?php endwhile; else : endif;?>
      </div>
    </div>
  </section>

   <section class="close">
    <div class="container">
        <h2><?php the_field('titulo_rede_social_segura') ?></h2>
        <div class="card-mockup" data-aos="zoom-in">
          <div class="text">
             <p><?php the_field('texto_rede_social_segura') ?></p>
          </div>
          <div class="image-right">
             <img src="<?php the_field('imagem_rede_social_segura') ?>" alt="">
          </div>
      </div>
      </div>
   </section>
   
  <section
      class="flag-conhecer"
      data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
    >
      <div class="container">
        <div class="left">
          <h2><?php the_field('titulo_section_serviços') ?></h2>
          <p><?php the_field('subtitulo_section_serviços') ?></p>
        </div>
        <div class="right">
          <a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>"
            ><button class="btn-white"><?php the_field('texto_botao_servicos') ?></button></a
          >
        </div>
      </div>
  </section>

  <a title="Entre em contato agora mesmo!" class="whats-logo" href="https://wa.me/+5586988534166" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/whats-logo.svg" alt=""></a>

  </body>

  <?php endwhile; else: endif; ?>

<?php get_footer( ); ?>