<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Primary Meta Tags -->
  <title><?php bloginfo( 'name' ) ?>  <?php wp_title('-') ?></title>
<meta name="title" content="Edu3 – Plataforma de Gestão Acadêmica e Financeira  " />
<meta name="description" content="Transforme a Gestão Escolar com tecnologia e inovação
A solução perfeita para você revolucionar sua escola, aliando o melhor de um ERP com agenda escolar, meios de pagamento e muito mais!" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.edu3.com.br/" />
<meta property="og:title" content="Edu3 – Plataforma de Gestão Acadêmica e Financeira  " />
<meta property="og:description" content="Transforme a Gestão Escolar com tecnologia e inovação
A solução perfeita para você revolucionar sua escola, aliando o melhor de um ERP com agenda escolar, meios de pagamento e muito mais!" />
<meta property="og:image" content="https://www.edu3.com.br/wp-content/themes/theme-EDU3/assets/img/meta-tag-image.png" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://www.edu3.com.br/" />
<meta property="twitter:title" content="Edu3 – Plataforma de Gestão Acadêmica e Financeira  " />
<meta property="twitter:description" content="Transforme a Gestão Escolar com tecnologia e inovação
A solução perfeita para você revolucionar sua escola, aliando o melhor de um ERP com agenda escolar, meios de pagamento e muito mais!" />
<meta property="twitter:image" content="https://www.edu3.com.br/wp-content/themes/theme-EDU3/assets/img/meta-tag-image.png" />

<!-- Meta Tags Generated with https://metatags.io -->
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
    <header id="header">
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