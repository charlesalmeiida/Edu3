<?php 
    // Template name: Contato  
?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section class="text-contato">
        <div class="container">
            <h2><?php the_field('titulo_contato_section') ?></h2>
            <img
                data-aos="fade-up"
                data-aos-duration="600"
                src="<?php echo get_template_directory_uri() ?>/assets/svg/icon-divisor-xadrez.svg"
                alt="Ícone de torre do Xadrez"
            />
            <p>
                <?php the_field('subtitulo_contato_section') ?>
            </p>
        </div>
    </section>
    
    <section class="form">
        <div class="container">
            <div class="left">
              <script type="text/javascript" src="<?php echo get_template_directory_uri(  ) ?>/js/form.js"></script>
            </div>
            <div class="right">
                <?php if (have_rows('bullets_pagina_contato')): while (have_rows('bullets_pagina_contato')): the_row(); ?>
                <div class="icon">
                    <div class="content-icon">
                        <img src="<?php the_sub_field('imagem_bullet_contato') ?>" alt="" />
                        <div class="text-icon">
                            <h3><?php the_sub_field('titulo_bullet_contato') ?></h3>
                            <p>
                                <?php the_sub_field('subtitulo_bullet_contato') ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endwhile; else: endif;?>
            </div>
        </div>
    </section>

    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>
