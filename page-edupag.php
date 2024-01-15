<?php 
    // Template name: Edupag
  ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ) ?>  <?php wp_title('-') ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  ) ?>/css/main.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      rel="shortcut icon"
      href="<?php echo get_template_directory_uri(  ) ?>/assets/img/favicon.png"
      type="image/x-icon"
    />

    <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-145708722-1', 'auto');
			ga('send', 'pageview');
		</script>

    <?php wp_head(); ?>
  </head>
  <body>  
    <header id="header" class="header-edupag">
      <div class="container">
        <a class="logo" href="<?php get_template_directory_uri(  ) ?>/index.php"
          ><img
            data-aos="fade-right"
            src="<?php echo get_template_directory_uri(  ) ?>/assets/img/logo.png"
            alt="Logo do Edu3"
        /></a>
        <nav data-aos="fade-left">
          <div class="btn-mobile" id="btn-mobile">
            <img
              class="burger-menu"
              src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/menu-burger.svg"
              alt=""
            />
          </div>

         <?php 
          if( is_page('Home') || is_page('Agenda') || is_page('Edupag') ){
          ?>
          <?php
              $args = array(
                'menu' => 'Header Principal',
                'theme_location' => 'header-principal',
                'container' => false,
                'menu_id' => 'nav' // Adicione esta linha para definir a ID do menu
              );
              wp_nav_menu( $args );
          ?>

          <?php } else { ?>
          <ul>
            <li><a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>">Contato</a></li>
          </ul>
          <?php } ?> 

        </nav>
      </div>
    </header>

<body id="edupag">
  <section class="hero-edupag">
    <div class="container">
      <div class="left"  data-aos="zoom-in">
        <h1><?php the_field('titulo_principal_edupag') ?></h1>
        <p><?php the_field('subtitulo_principal_edupag') ?></p>
        <a href=""><button class="btn-primary">
          <?php the_field('texto_botao_principal') ?>
        </button></a>
      </div>
      <div class="right"  data-aos="zoom-in">
        <div class="img-edupag">
          <img src="<?php the_field('imagem_principal_edupag') ?>" alt="">
        </div>
      </div>
    </div>
  </section>
  <section class="edupag-contents">
    <div class="container">
      <?php if( have_rows('edupag_contents') ): while ( have_rows('edupag_contents') ) : the_row(); ?>
      <div class="card-edupag">
        <div class="text-card-edupag"  data-aos="fade-right">
          <h3><?php the_sub_field('titulo_icone_edupag') ?></h3>
          <p><?php the_sub_field('subtitulo_icone_edupag') ?></p>
        </div>
        <div class="image-card-edupag"  data-aos="fade-left">
            <img src="<?php the_sub_field('imagem_icone_edupag') ?>" alt="">
        </div>
      </div>
      <?php endwhile; else : endif;?>
    </div>
  </section>
   <section
      class="flag-conhecer"
      data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
    >
      <div class="container">
        <div class="left">
          <h3><?php the_field('titulo_principal_divisor') ?></h3>
          <p><?php the_field('subtitulo_divisor') ?></p>
        </div>
        <div class="right">
          <a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>"
            ><button class="btn-white"><?php the_field('texto_botao_divisor') ?></button></a
          >
        </div>
      </div>
    </section>
     <section class="edupag-contents">
      <div class="container">
        <?php if( have_rows('edupag_contents_fileira_dois') ): while ( have_rows('edupag_contents_fileira_dois') ) : the_row(); ?>
    <div class="card-edupag">
      <div class="text-card-edupag"  data-aos="fade-left">
        <h3><?php the_sub_field('titulo_fileira_dois') ?></h3>
        <p><?php the_sub_field('subtitulo_fileira_dois') ?></p>
      </div>
    </div>
    <?php endwhile; else : endif;?>
      </div>
  </section>

   <section
      class="flag-conhecer"
      data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
    >
      <div class="container">
        <div class="left">
          <h3>Quer conhecer mais sobre <br> os nossos serviços?</h3>
          <p>Agende uma demonstração gratuita com nossos consultores!</p>
        </div>
        <div class="right">
          <a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>"
            ><button class="btn-white">Solicitar demonstração</button></a
          >
        </div>
      </div>
    </section>

<a title="Entre em contato agora mesmo!" class="whats-logo" href="https://wa.me/+5586988534166" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/whats-logo.svg" alt=""></a>

</body>

<?php get_footer( ); ?>