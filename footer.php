  <footer>
    <div class="container">
      <div class="top">
        <div class="left" data-aos="fade-right">
            <a href="#header"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/logo.png" alt="" /></a>
        </div>
        <div class="right" data-aos="fade-left">
          <?php
            $args = array(
              'menu' => 'Header Principal',
              'theme_location' => 'header-principal',
              'container' => false
              );
              wp_nav_menu( $args );
          ?>
        </div>
      </div>
      <img class="line-footer" src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/line-footer.svg" alt="" />
      <div class="bottom">
        <div class="left" data-aos="fade-right">
          <p>São Bernardo do Campo / SP</p>
          <br />
          <p>11 4502-4580</p>
          <br />
          <p>contato@edu3.com.br</p>
          <br />
        </div>
        <div class="right">
             <div class="apps">
            <a href="https://play.google.com/store/apps/details?id=br.com.criativasoft.mobile.edu3&hl=pt_BR&gl=US" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/google-play.svg" alt="Botão para download na Play Store"></a>
            <a href="https://apps.apple.com/br/app/edu3-portal-acadêmico/id1207483397" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/app-store.svg" alt="Botão para download na app store"></a>
          </div>
          <ul>
            <li>
              <a href="https://www.facebook.com/Edu3Tec/" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/facebook.svg" alt="" /></a>
            </li>
            <li>
              <a href="https://www.instagram.com/edu3tec/" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/instagram.svg" alt="" /></a>
            </li>
            <li>
              <a href="https://wa.me/+5586988534166" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/svg/icon-whats.svg" alt="" /></a>
            </li>
          </ul>
          </div>
        </div>
        <p class="copyright">Copyright © 2024 Todos os direitos reservados</p>
      </div>
  </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo get_template_directory_uri(  ) ?>/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(  ) ?>/js/slide.js"></script>
    <?php wp_footer(); ?>
 </body>
</html>