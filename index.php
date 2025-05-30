<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-idge" />
  <meta name="viewport" content="width=device-width, inital-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Aliance Production</title>
</head>

<body class="front-page">
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="" class="mobile-menu-limk">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="" class="mobile-menu-limk">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a href="#"> Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-limk"> Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-limk"> Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-limk"> Автомобильная химия</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="" class="mobile-menu-limk">Собственные торговые марки</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="" class="mobile-menu-limk">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="" class="mobile-menu-limk">Контакты</a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+ 7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="phone-icon" width="24" height="24">
        <use href="img/icons.svg#mark"></use>
      </svg>
      <address class="mobile-info-adress">
        г. Москва, Холодильный пер. 4к1с8
      </address>
    </div>
    <div class="mobile-info">
      <svg class="phone-icon" width="24" height="24">
        <use href="img/icons.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
        a.dragunov@tdaliance.ru
      </a>
    </div>
    <div class="social">
      <svg class="social-vk" width="24" height="24">
        <use href="img/icons.svg#vk"></use>
      </svg>
      <svg class="social-inst" width="24" height="24">
        <use href="img/icons.svg#inst"></use>
      </svg>
    </div>
  </div>
  <nav class="navbar">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="logo-link logo-light">
      <svg class="logo-svg">
        <use href="img/icons.svg#logo-light"></use>
      </svg>
    </a>
    <a href="./" class="logo-link logo-black">
      <svg class="logo-svg">
        <use href="img/icons.svg#logo-black"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="/about.php" class="header-nav-limk">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="" class="header-nav-limk">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="" class="header-nav-limk">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="" class="header-nav-limk">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="" class="header-nav-limk">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-icon" width="24" height="24">
        <use href="img/icons.svg#phone"></use>
      </svg>
      <a href="tel:74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
    </div>
    <button class="header-button button" data-toggle-modal>
      <svg class="button-icon" width="24" height="24">
        <use href="img/icons.svg#phone"></use>
      </svg>
      <span class="button-text" >Получить консультацию</span>
    </button>
  </nav>
  <header class="header header-image">
    <div class="container">
      <div class="header-content">
        <div class="seporation"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами <br />
          и расходными материалами бизнеса
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей <br> целевой аудитории является
          четким <br>доказательством простого факта: <br> высококачественный прототип
          будущего <br> проекта напрямую зависит от анализа <br>существующих паттернов
          поведения.
        </p>
        <div class="button header-button about-company" data-toggle-modal>Подробнее о компании</div>
      </div>
      <div class="swiper">
        <ul class="swiper-wrapper header-features">
          <!-- Slides -->
          <li class="swiper-slide header-features-item">
            <svg class="logo-svg company" width="21" height="28">
              <use href="img/icons.svg#time"></use>
            </svg>
            <p class="header-features-text">Непрерывная работа c 2017 года</p>
          </li>
          <li class="swiper-slide header-features-item"><svg class="logo-svg company" width="36" height="36">
              <use href="img/icons.svg#certificate"></use>
            </svg>
            <p class="header-features-text">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide header-features-item"><svg class="logo-svg company" width="36" height="36">
              <use href="img/icons.svg#Frame 33"></use>
            </svg>
            <p class="header-features-text">Контроль качества на всех этапах</p>
          </li>
          <li class="swiper-slide header-features-item"><svg class="logo-svg company" width="36" height="36">
              <use href="img/icons.svg#delevery"></use>
            </svg>
            <p class="header-features-text">Возможны поставки по всей России</p>
          </li>
          <li class="swiper-slide header-features-item"><svg class="logo-svg company" width="30" height="23">
              <use href="img/icons.svg#speed"></use>
            </svg>
            <p class="header-features-text">Оперативное производство</p>
          </li>
          ...
        </ul>
        <div class="slider-buttons">
          <div class="slider-button-prev"><svg width="36" height="24">
              <use href="img/icons.svg#arrow-prew"></use>
            </svg></div>
          <div class="slider-button-next"><svg width="36" height="24">
              <use href="img/icons.svg#arrow-next"></use>
            </svg></div>
        </div>
      </div>

    </div>
  </header>
  <section class="section section-light">
    <div class="container">
      <div class="seporation"></div>
      <h2 class="section-title">схема работы</h2>
      <div class="swiper-container swiper-two">
        <ul class="swiper-wrapper steps">
          <li class="swiper-slide steps-iteam">
            <span class="steps-num">01</span>
            <h3 class="steps-title">Знакомство</h3>
            <p class="steps-text">
              Безусловно, сплочённость команды профессионалов позволяет оценить <br>
              значение форм воздействия.
            </p>
            <a href="#" class="steps-link">Оставить заявку</a>
          </li>
          <li class="swiper-slide steps-iteam">
            <span class="steps-num">02</span>
            <h3 class="steps-title">Заключение <br> договора</h3>
            <p class="steps-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </li>
          <li class="swiper-slide steps-iteam">
            <span class="steps-num">03</span>
            <h3 class="steps-title">Производство</h3>
            <p class="steps-text">
              А также стремящиеся вытеснить традиционное производство,
              нанотехнологии функционально разнесены на независимые <br> элементы.
            </p>
          </li>
          <li class="swiper-slide steps-iteam">
            <span class="steps-num">04</span>
            <h3 class="steps-title">Доставка</h3>
            <p class="steps-text">
              В частности, экономическая повестка сегодняшнего дня говорит о
              возможностях приоритизации <br> разума над эмоциями.
            </p>
          </li>
        </ul>
        <div class="slider-buttons-wraper primary-button-wrapper">
          <div class="slider-buttons">
            <div class="slider-button-prev button-steps primary-button-prev"><svg width="36" height="24">
                <use href="img/icons.svg#arrow-prew"></use>
              </svg></div>
            <div class="slider-button-next button-steps primary-button-next"><svg width="36" height="24">
                <use href="img/icons.svg#arrow-next"></use>
              </svg></div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="section prodyction">
    <div class="container">
      <div class="seporation"></div>
      <h2 class="section-title">Контрактное производство</h2>
      <div class="cards">
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
          </div>
          <img src="img/avto-him.png" alt="Автомобильная химия" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые элементы.</p>
            <img src="img/bit-him.png" alt="Бытовая химия" class="card-image">
          </div>
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
            <img src="img/dezinfect.png" alt="Дезинфицирующие средства" class="card-image">
          </div>
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
            <img src="img/dezinfect.png" alt="Пищевые аэрозоли" class="card-image">
          </div>
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
            <img src="img/avto-him.png" alt="Косметическая продукция" class="card-image">
          </div>
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые элементы.
            </p>
            <img src="img/bit-him.png" alt="Краски аэрозольные" class="card-image">
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="section Production">
    <div class="container">
      <div class="seporation"></div>
      <h2 class="section-title marks">Собственные торговые марки</h2>
      <h2 class="section-title marks-mobile">Собственные марки</h2>
      <div class="cards-auto-wraper">
        <div class="cards-auto">
          <svg class="auto-img">
            <use href="img/icons.svg#AG"></use>
          </svg>
          <div class="auto-title"> Автохимия AG-Tech </div>
          <div class="auto-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление
            создаёт предпосылки для поставленных обществом задач.</div>
        </div>
        <div class="cards-auto">
          <svg class="auto-img">
            <use href="img/icons.svg#AP"></use>
          </svg>
          <div class="auto-title"> Автохимия AP </div>
          <div class="auto-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление
            создаёт предпосылки для поставленных обществом задач.</div>
        </div>
      </div>
    </div>
  </section>
  <section class="section founder">
    <img src="img/founder.jpg" alt="founder" class="founder-photo">
    <div class="founder-content-wraper">
      <div class="founder-content">
        <div class="seporation"></div>
        <h2 class="section-title">Отношение к делу и к клиентам</h2>
        <p class="founder-text">
          Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что
          укрепление
          и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно,
          независимые государства, которые представляют собой яркий пример континентально-европейского типа
          политической
          культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной
          обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.
        <p class="founder-text"> А ещё действия представителей оппозиции, превозмогая сложившуюся непростую
          экономическую ситуацию, в равной
          степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в
          значительной степени обусловливает важность дальнейших направлений развития. </p>
        </p>
        <a href="#" class="steps-link founder-desktop">Подробнее о компании</a>
        <a href="#" class="steps-link founder-mobail">О нашей миссии</a>
      </div>
    </div>
  </section>
  <section class="section clients">
    <div class="container">
      <div class="seporation"></div>
      <div class="clients-wrapper">
        <div class="clients-content">
          <h2 class="section-title">Производим аэрозольную продукцию для разных сфер</h2>
          <ul class="clients-list">
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#probirka"></use>
              </svg>Химические производства</li>
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#avtomob"></use>
              </svg>Автомойки</li>
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#pribor"></use>
              </svg>Пищевая продукция</li>
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#kisti"></use>
              </svg>Лаки и краски</li>
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#beautiful"></use>
              </svg>Косметические средства</li>
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#avto-beautiful"></use>
              </svg>Автомобильная косметика</li>
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#footbolka"></use>
              </svg>Косметика по уходу за одеждой</li>
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#tufli"></use>
              </svg>Косметика по уходу за одеждой</li>
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#kirpich"></use>
              </svg>Строительные материалы</li>
            <li class="clients-list-iteam"><svg width="30" height="30" class="client-logo">
                <use href="img/icons.svg#troetochie"></use>
              </svg>И многих других</li>
          </ul>
        </div>
        <div class="clients-logo-list">
          <a href="#" class="cliento-logo-iteam"><img src="img/client.png" alt="" class="clients-logo"></a>
          <a href="#" class="cliento-logo-iteam"><img src="img/client.png" alt="" class="clients-logo"></a>
          <a href="#" class="cliento-logo-iteam"><img src="img/client.png" alt="" class="clients-logo"></a>
          <a href="#" class="cliento-logo-iteam"><img src="img/client.png" alt="" class="clients-logo"></a>
          <a href="#" class="cliento-logo-iteam"><img src="img/client.png" alt="" class="clients-logo"></a>
          <a href="#" class="cliento-logo-iteam"><img src="img/client.png" alt="" class="clients-logo"></a>
          <a href="#" class="cliento-logo-iteam"><img src="img/client.png" alt="" class="clients-logo"></a>
          <a href="#" class="cliento-logo-iteam"><img src="img/client.png" alt="" class="clients-logo"></a>
          <a href="#" class="cliento-logo-iteam"><img src="img/client.png" alt="" class="clients-logo"></a>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="section blog">
    <div class="container">
      <div class="seporation"></div>
      <h2 class="section-title">аэрозольную продукцию для разных сфер</h2>
      <div class="swiper swiper-blog">
        <div class="swiper-wrapper">
          <a href="#" class="swiper-slide blog-card"><img src="img/blog-photo.jpg" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>
          <a href="#" class="swiper-slide blog-card"><img src="img/blog-ph.jpg" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>
          <a href="#" class="swiper-slide blog-card"><img src="img/blog-photo.jpg" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>
        </div>
        <div class="blog-slider-footer">
          <a href="#" class="steps-link"> Весь блог</a>
          <div class="block-buttons-wraper primary-button-wrapper">
            <div class="slider-buttons">
              <div class="block-button-prev button-steps primary-button-prev"><svg width="36" height="24">
                  <use href="img/icons.svg#arrow-prew"></use>
                </svg></div>
              <div class="block-button-next button-steps primary-button-next"><svg width="36" height="24">
                  <use href="img/icons.svg#arrow-next"></use>
                </svg></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php include_once('footer.php');?>