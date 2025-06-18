<?php get_header() ?>

<section class="breadcrumbs">
      <div class="wrapper">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' > '); ?>
      </div>
    </section>

    <section class="about">
      <div class="wrapper about__container">
        <div class="about__banner"></div>
        <div class="about__inner">
          <div>
            <h1 class="about__headline">Аренда в ТУЦ &#34;Сарафан&#34;</h1>
            <p class="about__paragraph">
              Торговый центр «Сарафан», расположенный по адресу: г. Тула, ул.
              Путейская, д.5 (Площадь Московского вокзала), предлагает помещения
              в аренду от собственника от 25 до 1000 кв. м.
            </p>
            <a href="#" class="about__paragraph about__paragraph--file">
              Скачать презентацию
              <img
                src="<?php echo O_IMG_DIR ?>/file_download.png"
                class="about__paragraph--file--img"
                alt="file"
              />
            </a>
            <h3 class="about__subtitle">
              Преимущества аренды в нашем торговом центре:
            </h3>
            <ul class="about__list">
              <li class="about__list__item">
                ТЦ «Сарафан» находится в 5 минутах езды от центра города на
                площади Московского вокзала на одной из самых оживленных улиц
                города – Красноармейский проспект.
              </li>

              <li class="about__list__item">
                Рядом жилой массив, пересечение основных транспортных и
                пешеходных потоков –конечная остановка общественного транспорта,
                железнодорожный вокзал.
              </li>
              <li class="about__list__item">
                На территории ТЦ «Сарафан» есть бесплатная парковка для
                клиентов, более 500 машиномест, удобный подъезд.
              </li>
              <li class="about__list__item">
                Ежедневно наш ТЦ посещает порядка 10 000 тысяч человек различной
                целевой аудитории
              </li>
              <li class="about__list__item">
                Демократичные цены за аренду площади
              </li>
              <li class="about__list__item">
                У нас Вы можете арендовать площадь под магазины белья, одежды и
                обуви, салоны, точки общепита и др.
              </li>
            </ul>
          </div>
          <p class="about__paragraph about__paragraph--bottom">
            Открытие торговой точки в одном из оживленных мест города обеспечит
            доходность, развитие и процветание Вашего бизнеса.
          </p>
        </div>
      </div>
    </section>

    <section class="slider-sec">
      <div class="wrapper">
        <h2 class="slider-sec__title">
          Более 130 бутиков и магазинов уже арендуют у нас помещения
        </h2>
        <div class="slider-sec__inner">

          <div class="slider-sec__container">
          <div class="slider">
            <img src="<?php echo O_IMG_DIR ?>/familia.png" alt="slide1" />
            <img src="<?php echo O_IMG_DIR ?>/letu.png" alt="slide2" />
            <img src="<?php echo O_IMG_DIR ?>/lenta.png" alt="slide3" />          
            <img src="<?php echo O_IMG_DIR ?>/familia.png" alt="slide1" />
            <img src="<?php echo O_IMG_DIR ?>/letu.png" alt="slide2" />
            <img src="<?php echo O_IMG_DIR ?>/lenta.png" alt="slide3" />
            <img src="<?php echo O_IMG_DIR ?>/familia.png" alt="slide1" />
            <img src="<?php echo O_IMG_DIR ?>/letu.png" alt="slide2" />
            <img src="<?php echo O_IMG_DIR ?>/lenta.png" alt="slide3" />
          </div>
                   
        <div class="slider__arrows">
          <button class="slider__prev-arrow">&larr;</button>
          <span class="slick-dots"></span>
          <button class="slider__next-arrow">&rarr;</button>
        </div>
        </div>

          

          <ul class="slider-sec__list">
            <li class="slider-sec__list__item">
              Якорные арендаторы - Лента, Детский Мир, Технопарк, Модис,
              Familia, Читай город, Тутанхамон, Л'Этуаль
            </li>
            <li class="slider-sec__list__item">
              Бренды - EWA, Artigli, Gerzedo, Goergo, Du monde, Petek, Neri
              Karra, Ledy Collection, Paolo Conte, P'Cont, VINZER, Ace,
              Tonnelli, Milavitsa, и др.
            </li>
            <li class="slider-sec__list__item">
              Магазины спортивной одежды и инвентаря: Адреналин, Спорт Лайн
            </li>
            <li class="slider-sec__list__item">
              Зона фудкорта - Burger King, Империя вкуса, Про Кофий, Добрая
              сдоба
            </li>
            <li class="slider-sec__list__item">
              Салоны связи: Билайн, Мегафон, YOTA, Связной, Теле2
            </li>
            <li class="slider-sec__list__item">
              Зоосад, аптека «Здесь аптека», «Арт-оптика», Fresh Оптика, ковры,
              салоны штор, текстиль Missis Hatson и Home TEX, салон Арт-Самовар,
              посуда, подарки, картины, сувениры и другие.
            </li>
          </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="advantages">
      <div class="wrapper">
        <div class="advantages__container">
          <div class="advantages__text">
            <div class="advantages__text__box">
              <p>Общая площадь торгового центра</p>
              <h3>25 816 м<sup>2</sup></h3>
            </div>

            <div class="advantages__text__box">
              <p>Площадь, сдаваемая в аренду</p>
              <h3>16 675 м<sup>2</sup></h3>
            </div>

            <div class="advantages__text__box">
              <p>Парковка (машиномест)</p>
              <h3>500</h3>
            </div>

            <div class="advantages__text__box">
              <p>Посещаемость (в неделю)</p>
              <h3>100 000 чел</h3>
            </div>
          </div>

          <img src="<?php echo O_IMG_DIR ?>/adv-polo.png" alt="polo" />
          <img src="<?php echo O_IMG_DIR ?>/adv-street.png" alt="street" />
        </div>

        <div class="advantages__container">
          <img src="<?php echo O_IMG_DIR ?>/adv-east.png" alt="east" />
          <img src="<?php echo O_IMG_DIR ?>/adv-stairs.png" alt="stairs" />
          <img src="<?php echo O_IMG_DIR ?>/adv-white.png" alt="white" />
        </div>
      </div>
    </section>

<?php get_footer() ?>