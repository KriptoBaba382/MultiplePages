<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-idge" />
    <meta name="viewport" content="width=device-width, inital-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>О компании - Aliance Production</title>
  </head>
  <body>
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
              <a href="#" class="mobile-submenu-limk">
                Дезинфицирующие средства</a
              >
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
    <nav class="navbar navbar-light">
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
        <a href="tel:74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>
      <button class="header-button button" data-toggle-modal>
        <svg class="button-icon" width="24" height="24">
          <use href="img/icons.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <section class="underhead">
      <div class="container">
        <div class="underhead-wrapper">
          <div class="underhead-title">
            <div class="seporation"></div>
            <div class="title">О компании</div>
            <div class="breadcrumb">
              <div class="breadcrumb-item">
                <a href="/index.php">Главная</a>
              </div>
              <div class="breadcrumb-seporation"></div>
              <div class="breadcrumb-item">
                <a href="/about.php">О компании</a>
              </div>
            </div>
          </div>
          <div class="underhead-image"></div>
        </div>
      </div>
    </section>
    <?php include_once('footer.php');?>