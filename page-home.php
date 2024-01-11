<?php 
  // Template name: Home  
?>
<?php get_header( ); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

<main>
<section class="s-hero">
  <div class="container">
    <div class="left" data-aos="fade-up">
      <span data-aos="fade-up" class="tag">
            <?php the_field('tag_section_hero') ?>
      </span>
      <h1 data-aos="fade-up" data-aos-duration="500">
           <?php the_field('titulo_section_hero') ?>
      </h1>
      <p data-aos="fade-up" data-aos-duration="500">
            <?php the_field('subtitulo_section_hero') ?>
      </p>
        <a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>"
            ><button class="btn-primary" type="button">
              <?php the_field('texto_botao_hero') ?>
            </button></a
        >
    </div>
    <div class="right">
      <img
          data-aos="fade-up"
          data-aos-anchor-placement="center-bottom"
          src="<?php echo get_template_directory_uri(  ) ?>/assets/img/hero-banner.png"
          alt="Banner principal do site Edu3"
       />
      </div>
    </div>
</section>
</main>
    
<section class="benefits" id="servicos">
  <div class="container">
    <div class="benefits-content">
      <h2 data-aos="fade-up" data-aos-duration="400">
        <?php the_field('titulo_section_ferramentas') ?>
      </h2>
      <img
        data-aos="fade-up"
        data-aos-duration="600"
        src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/icon-divisor-xadrez.svg"
        alt="Ícone de torre do Xadrez"
          />
        <p data-aos="fade-up" data-aos-duration="600">
          <?php the_field('subtitulo_section_ferramentas') ?>
        </p>
      </div>
      <div class="cards-benefits">
        <div
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="200"
          data-aos-offset="0"
          class="cards-row"
          >
            <?php the_field('') ?>

            <?php if( have_rows('itens_section_ferramentas') ): while ( have_rows('itens_section_ferramentas') ) : the_row(); ?>

            <div class="card">
              <img
                src="<?php the_sub_field('icone_item') ?>"
                alt="Ícone Portal do Aluno"
              />
              <h3><?php the_sub_field('texto_principal_item') ?></h3>
              <p>
                <?php the_sub_field('texto_secundario_item') ?>
              </p>
            </div>

              <?php endwhile; else : endif;?>

        </div> 
   </div>
</section>

<section class="agenda-digital">
  <div class="container">
    <div class="left" data-aos="fade-up-right">
      <h2><?php the_field('titulo_principal_agenda_digital') ?></h2>
        <p>
          <?php the_field('subtitulo_principal_agenda_digital') ?>
        </p>
          <ul>
            <?php if( have_rows('bullets_agenda_section') ): while ( have_rows('bullets_agenda_section') ) : the_row(); ?>
              
                <li><?php the_sub_field('bullet_text_agenda') ?></li>

              <?php endwhile; else : endif;?>
          </ul>
        <a title="Veja mais informações sobre a nossa Agenda Digital" href="<?php echo get_permalink( get_page_by_path('Agenda') ) ?>"> <button class="btn-secondary">
           <?php the_field('texto_botao_agenda_digital') ?>
            <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/arrow-right-light.svg" alt="" />
        </button></a>
    </div>
    <div class="right" data-aos="fade-up-left">
      <img
        src="<?php echo get_template_directory_uri(  ) ?>/assets/img/banner-agenda-digital.png"
        alt="Banner Agenda Digital Edu3"
        />
     </div>
  </div>
</section>

<section
  class="datas"
  data-aos="fade-up"
  data-aos-anchor-placement="center-bottom"
  id="#meuElemento"
>
  <div class="container">
    <div class="data">
      <h4 id="number1" class="hidden">844</h4>
      <p class="text-data"><?php the_field('texto_um') ?></p>
    </div>
    <div class="data">
      <h4 id="number2" class="hidden">1240</h4>
      <p class="text-data"><?php the_field('texto_dois') ?></p>
    </div>
    <div class="data">
      <h4 id="number3" class="hidden">15419</h4>
      <p class="text-data"><?php the_field('texto_tres') ?></p>
    </div>
    <div class="data">
      <h4 id="number4" class="hidden">67</h4>
      <p class="text-data"><?php the_field('texto_quatro') ?></p>
    </div>
  </div>
</section>

<section class="edupag">
  <div class="container">
    <img
      data-aos="fade-right"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine"
      src="<?php echo get_template_directory_uri(  ) ?>/assets/img/edupag-img.png"
      class="image-edupag"
      alt="Imagem EduPag"
    />
    <div
      class="edupag-content"
      data-aos="fade-left"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine"
    >
        <h2><?php the_field('titulo_edupag_section') ?></h2>
        <p>
          <?php the_field('subtitulo_edupag_section') ?>
        </p>
        <ul>
          <?php if( have_rows('bullets_edupag_section') ): while ( have_rows('bullets_edupag_section') ) : the_row(); ?>
              
                <li><?php the_sub_field('bullet_text') ?></li>

          <?php endwhile; else : endif;?>

        </ul>
            <a href="<?php echo get_permalink( get_page_by_path('Edupag') ) ?>">
              <button class="btn-secondary">
                  <?php the_field('texto_botao_edupag') ?>
                  <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/arrow-right-light.svg" alt="" />
               </button></a>
          </div>
  </div>
</section>

<section
      class="flag-em"
      data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
>
  <div class="container">
    <h2><?php the_field('titulo_novo_ensino_medio') ?></h2>
      <div>
        <a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>">
        <button class="btn-white"><?php the_field('botao_novo_ensino_medio') ?></button>
        </a>
      </div>
  </div>
</section>

<section class="gestao-educacional" id="quem-somos">
  <div class="container">
    <div
      class="gestao-ed-content"
      data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
    >
    <h2><?php the_field('titulo_gestao_educacional')?></h2>
      <img
        src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/icon-divisor-xadrez.svg"
        alt="Ícone de torre do Xadrez"
      />
    </div>
    <div class="gestao-img" data-aos="fade-up">
      <img class="img-gestao" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/img-gestao.png" alt="" />
      <div class="gestao-img-text">
        <h2><?php the_field('subtitulo_gestao_educacional')?></h2>
          <p>
            <?php the_field('paragrafo_gestao_educacional')?>
          </p>
          <a href="<?php echo get_permalink( get_page_by_path('Escolas-regulares') ) ?>">
          <button class="btn-secondary">
            <?php the_field('botao_gestao_educacional')?>
            <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/arrow-right-light.svg" alt="" />
          </button>
          </a>
      </div>
    </div>
    <div class="etapas-gestao" data-aos="fade-up">
      <h3><? the_field('texto_titulo_segmentos')?></h3>
      <div class="bullets">
        <?php if( have_rows('bullets_segmentos_section') ): while ( have_rows('bullets_segmentos_section') ) : the_row(); ?>
        <div class="bullet">
          <img src="<?php the_sub_field('icone_segmento') ?>" alt="" width="45%" />
          <h3><?php the_sub_field('bullet_titulo_segmento') ?></h3>
            <p>
              <?php the_sub_field('texto_segmentos') ?>
            </p>
       </div>
            <?php endwhile; else : endif;?>
          </div>
        </div>
      </div>
</section>

<section class="depoimentos" id="depoimentos">
  <div class="container">
    <div
        class="depoimentos-text"
        data-aos="fade-up"
        data-aos-anchor-placement="center-bottom"
    >
      <h2><?php the_field('titulo_depoimentos_section') ?></h2>
      <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/divisor-depoimentos.svg" alt="" />
      <p>
        <?php the_field('subtitulo_depoimentos_section') ?>
      </p>
    </div>

    <div class="cards-depoimentos">
      <div class="swiper-wrapper">
           <?php the_field('') ?>

            <?php if( have_rows('depoimentos_cards') ): while ( have_rows('depoimentos_cards') ) : the_row(); ?>
        <div class="swiper-slide">
            <div class="card-depoimento">
              <div class="card-bubble">
                <p>  <?php the_sub_field('depoimento') ?></p>
              </div>
              <div class="card-info">
                <img src="<?php the_sub_field('foto_cliente') ?>" alt="">
                <h3><?php the_sub_field('nome_cliente') ?></h3>
              </div>
            </div>
        </div>
     <?php endwhile; else : endif;?>
      </div>
    </div>
    <div class="swiper-pagination"></div>

    <button class="btn btn-next">
      <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/arrow-right.svg" alt="">
    </button>
    <button class="btn btn-prev"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/arrow-right.svg" alt=""></button>
  </div>
</section>

<section class="button-cta">
  <a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>"
  ><button class="btn-primary">
      <?php the_field('texto_botao_depoimentos_section') ?>
    </button></a>
</section>

<section class="cuidamos">
  <div class="container">
    <div
      class="cuidamos-text"
      data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
    >
      <h2><?php the_field('titulo_section_cuidamos') ?></h2>
      <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/icon-divisor-xadrez.svg" alt="" />
      <p><?php the_field('subtitulo_section_cuidamos') ?></p>
    </div>
    <div
      class="cuidamos-bullets"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <?php if( have_rows('bullets_diferenciais') ): while ( have_rows('bullets_diferenciais') ) : the_row(); ?>
         <div class="bullet">
            <img src="<?php the_sub_field('icone_diferenciais') ?>" alt="" />
            <h3><?php the_sub_field('titulo_diferenciais') ?></h3>
            <p>
              <?php the_sub_field('subtitulo_diferenciais') ?>
            </p>
         </div>
      <?php endwhile; else : endif;?>
      </div>
    </div>
</section>

    <section class="inst">
      <div class="container">
        <div
          class="inst-text"
          data-aos="fade-up"
          data-aos-anchor-placement="center-bottom"
        >
          <h2><?php the_field('titulo_implantacao_section') ?></h2>
          <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/divisor-rocket.svg" alt="" />
          <p>
            <?php the_field('subtitulo_implantacao_section') ?>
          </p>
        </div>
        <div class="inst-content" data-aos="fade-up" data-aos-duration="2000">
          <div class="left">
            <div class="card-left">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/icon-list.svg" alt="" />
              <div class="card-left-text">
                <h3>Importação</h3>
                <p>
                  Importação automatizada ou manual dos dados de cadastro de
                  alunos, turmas, disciplinas, notas etc...
                </p>
              </div>
            </div>
            <div class="card-right">
              <div class="card-right-text">
                <h3>Validação e Ajustes</h3>
                <p>
                  Junto com a equipe da escola, fazemos a validação e aprovação
                  das configurações e dados
                </p>
              </div>
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/icon-pen-bullet.svg" alt="" />
            </div>
            <div class="card-left">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/icon-support-bullet.svg" alt="" />
              <div class="card-left-text">
                <h3>Treinamento</h3>
                <p>
                  Treinamos todos os setores e com poucas horas sua equipe já
                  está apta a operar o sistema
                </p>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="img-inst">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/img-inst.png" alt="" />
            </div>
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
          <h2><?php the_field('titulo_flag_rodape') ?></h2>
          <p><?php the_field('subtitulo_flag_rodape') ?></p>
        </div>
        <div class="right">
          <a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>"
            ><button class="btn-white"><?php the_field('texto_botao_flag_rodape') ?></button></a
          >
        </div>
      </div>
    </section>

    <?php endwhile; else: endif; ?>

    <?php get_footer( ); ?>