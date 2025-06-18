<footer class="footer">
      <div class="wrapper footer__inner">
        <a href="<?php echo get_site_url() . '/' ?>" class="footer__logo"
          ><img src="<?php echo O_IMG_DIR ?>/logo-footer.png" alt="logo"
        /></a>

        <div class="footer--links">
        <div class="footer--links__box">
          <a href="<?php echo get_site_url() . '/shops' ?>" class="footer--links__box__link">Магазины</a>
          <a href="<?php echo get_site_url() . '/cafes-and-restaurants' ?>" class="footer--links__box__link">Кафе и рестораны</a>
          <a href="<?php echo get_site_url() . '/services-and-facilities' ?>" class="footer--links__box__link">Услуги и сервисы</a>
          <a href="<?php echo get_site_url() . '/entertainment' ?>" class="footer--links__box__link">Развлечения</a>
        </div>

        <div class="footer--links__box">
          <a href="<?php echo get_site_url() . '/about' ?>" class="footer--links__box__link">О нас</a>
          <a href="<?php echo get_site_url() . '/events' ?>" class="footer--links__box__link">События</a>
          <a href="<?php echo get_site_url() . '/gallery' ?>" class="footer--links__box__link">Галерея</a>
        </div>

        <div class="footer--links__box">
          <a href="<?php echo get_site_url() . '/rent' ?>" class="footer--links__box__link">Аренда</a>
          <a href="<?php echo get_site_url() . '/contacts' ?>" class="footer--links__box__link">Контакты</a>
          <a href="<?php echo get_site_url() . '/vacancies' ?>" class="footer--links__box__link">Вакансии</a>
        </div>

        <div class="footer--links__box">
          <a href="<?php echo get_site_url() . '/tenders' ?>" class="footer--links__box__link">Тендеры</a>
          <a href="<?php echo get_site_url() . '/privacy-policy' ?>" class="footer--links__box__link"
            >Политика конфиденциальности</a
          >
          <a href="<?php echo get_site_url() . '/map' ?>" class="footer--links__box__link">Карта ТЦ</a>
        </div>
        </div>

        <div>
          <form class="footer__form--search">
            <input
              type="text"
              class="footer__form--search__input"
              placeholder="Найти магазин"
            />
            <button type="button" class="footer__form--search__btn"></button>
          </form>

          <div class="footer__icons">
            <a href="#" class="footer__icon--tg"></a>
            <a href="#" class="footer__icon--vk"></a>
          </div>
        </div>

        <div class="footer__text">
          <p>300041, Тульская обл., г. Тула, ул. Путейская, д. 5</p>
          <p>ТЦ Сарафан: 10:00-21:00 Лента: 08:00-22:00</p>
          <p>+7 (4872) 33-80-55</p>
        </div>
      </div>
    </footer>

    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./slick/slick.min.js"></script>
<script src="./app.js"></script> -->
<?php wp_footer(); ?>
  </body>
</html>
