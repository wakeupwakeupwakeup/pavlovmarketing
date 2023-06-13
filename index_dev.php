<?php
session_start();

if (isset($_SESSION['language'])) {
  $language = $_SESSION['language'];
} elseif (isset($_COOKIE['language'])) {
  $language = $_COOKIE['language'];
} else {
  $language = 'ru';
};

if ($language=='en') {
  $filepath = "templates/index_{$language}.php";
  header('Content-Type: text/html; charset=utf-8');
  readfile($filepath);
};


?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Pavlov Marketing</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2efe4913f3.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="wrapper">
  <?php include "templates/header.php"?>
  <main>
    <section class="welcome_section">
      <div class="ellipse_1"></div>
      <div class="ellipse_2"></div>
      <div class="welcome_title__wrapper">
        <div class="welcome_title">
          <div class="upper_title">
            <h1 class="main_title">Запустим Ваш <span class="blue_text">проект</span> в интернете</h1>
          </div>
          <div class="bottom_title">
            <div class="bottom_line"></div>
            <h1 class="main_title">за 7 дней</h1>
          </div>
        </div>
      </div>

    </section>
<!--    <section class="running_section">-->
<!--      <div class="line_wrapper">-->
<!--        <div class="line_element">Малый бизнес</div>-->
<!--        <div class="line_element"><img src="img/sparkle.png" alt=""></div>-->
<!--        <div class="line_element">Специалисты</div>-->
<!--        <div class="line_element"><img src="img/sparkle.png" alt=""></div>-->
<!--        <div class="line_element">Стартапы</div>-->
<!--      </div>-->
<!--    </section>-->
    <section class="about_section">
      <h3 class="section_title no-wrap">Обо Мне и Команде</h3>
      <div class="about_section__text">
        <span class="about_name">АНТОН ПАВЛОВ</span>
        <p>Меня зовут Павлов Антон. Я digital-маркетолог и действующий предприниматель с опытом больше 5 лет в маркетинге. Вместе с командой мы выстраиваем системы, которые приносят прибыль нашим клиентам и помогают развивать их бизнесы по всему миру. Мы находим варианты работы, которые принесут пользу и прибыль каждому нашему клиенту.</p>
        <ul>
          <li>
            <div class="list_circle"></div>
            <p>Систематизация маркетинга</p>
          </li>
          <li>
            <div class="list_circle"></div>
            <p>Повышение лояльности</p>
          </li>
          <li>
            <div class="list_circle"></div>
            <p>Рост и масштабирование</p>
          </li>
        </ul>
      </div>
      <div class="links">
        <img src="" alt=""><a href=""></a>
        </img>
        <img src="" alt=""><a href=""></a>
        </img>
        <img src="" alt=""><a href=""></a>
        </img>
      </div>
      <div class="about_section__img">
        <img src="" alt="" class="about__image">
      </div>
    </section>
    <section class="stats_section">
      <div class="stats_wrapper">
        <div class="stats__cell">
          <div class="projects_number">0</div>
          <p class="stats__text">Завершенных проектов</p>
        </div>
        <div class="stats__cell">
          <div class="clients_number">0</div>
          <p class="stats__text">Новых клиентов</p>
        </div>
        <div class="stats__cell">
          <div class="income_number">0</div>
          <p class="stats__text">Увеличения
            доходности</p>
        </div>
      </div>
    </section>
    <section class="offer_section">
      <div class="offer_section__text">
        <h3 class="section_title">Мы предлагаем Вам
          следующие услуги</h3>
        <p class="offer_section__description">
          Внедряем эффективные инструменты, которые принесут счастливых клиентов и прибыль для Вашего бизнеса
        </p>
      </div>
      <div class="offer_section__wrapper">
        <div class="offer_section__blocks">
          <div class="blocks__buttons">
            <a href="">Малый бизнес</a>
            <a href="">Стартапы</a>
            <a href="">Специалисты</a>
          </div>
          <img src="img/Group 122.png" alt="">
        </div>
        <div class="offer_section__offers">
          <div class="offer_wrapper">
            <span class="count">01</span>
            <div class="title">
              <h4 class="offer">Разработка веб-сайтов</h4>
              <p>лендинги, визитки, интернет-магазины (Shopify / OpenCart)</p>
            </div>
          </div>
          <div class="offer_wrapper">
            <span class="count">02</span>
            <div class="title">
              <h4 class="offer">Упаковка инфопродуктов</h4>
              <p>лендинги, визитки, интернет-магазины (Shopify / OpenCart)</p>
            </div>
          </div>
          <div class="offer_wrapper">
            <span class="count">03</span>
            <div class="title">
              <h4 class="offer">Дизайн</h4>
              <p>брендинг, логотипы, упаковка и тд</p>
            </div>
          </div>
          <div class="offer_wrapper">
            <span class="count">04</span>
            <div class="title">
              <h4 class="offer">Построение воронок</h4>
              <p>эксперты, блогеры, онлайн-школы</p>
            </div>
          </div>
          <div class="offer_wrapper">
            <span class="count">05</span>
            <div class="title">
              <h4 class="offer">Привлечение трафика</h4>
              <p>таргет, контекст, посевы, закуп у блогеров</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cases_section">
      <h3 class="section_title">Наши работы</h3>
      <div class="cases_wrapper">
        <div class="case_row">
          <img src="img/TeachStore_2 1.png" alt="">
          <div class="case">
            <h5 class="case_name">TechStore</h5>
            <p class="case_description">TechStore -- сеть магазинов, специализируящаяся на продаже игровых консолей, очков виртуальной реальности, а также соответствующих аксессуаров</p>
            <div class="more_button">
              <span class="button_text">Подробнее</span>
              <div class="button_arrow"></div>
            </div>
          </div>
        </div>
        <div class="case_row row_reverse">
          <img src="img/TeachStore_2 1.png" alt="">
          <div class="case">
            <h5 class="case_name">TechStore</h5>
            <p class="case_description">TechStore -- сеть магазинов, специализируящаяся на продаже игровых консолей, очков виртуальной реальности, а также соответствующих аксессуаров</p>
            <div class="more_button">
              <span class="button_text">Подробнее</span>
              <div class="button_arrow"></div>
            </div>
          </div>
        </div>
        <div class="case_row">
          <img src="img/TeachStore_2 1.png" alt="">
          <div class="case">
            <h5 class="case_name">TechStore</h5>
            <p class="case_description">TechStore -- сеть магазинов, специализируящаяся на продаже игровых консолей, очков виртуальной реальности, а также соответствующих аксессуаров</p>
            <div class="more_button">
              <span class="button_text">Подробнее</span>
              <div class="button_arrow"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pulse_section">
      <h3 class="section_title">Рука на пульсе</h3>
    </section>
    <section class="review_section">
      <div class="review_wrapper">
        <blockquote>
          “Очень рада работе с Антоном и его агентством. Вы быстро определили какую мне применить стратегию в своём блоге, какие ввести темы и на что сделать упор. Помогли поднять важные темы для моей целевой аудитории. Результат заметен. Поднялась активность, подписчики стали более вовлечёнными. Я рада, что теперь могу не беспокоиться за низкую статистику в блоге. Спасибо, что всегда помогаете с идеями и подстраиваете план под меня. А ещё с Вами очень комфортно работать.”
        </blockquote>
        <div class="reviewer_block">
          <div class="reviewer_wrapper">
            <img src="" alt="">
            <div class="reviewer">
              <span class="reviewer_name">Екатерина</span>
              <span class="reviewer_occupation">бренд-дизайнер</span>
            </div>
          </div>
          <div class="review_buttons_wrapper">
            <a href=""><i class="fa-solid fa-arrow-left"></i></a>
            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
<!-- Add your site or application content here -->
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<!--<script src="js/vendor/modernizr-3.11.2.min.js"></script>-->
<script src="js/plugins.js"></script>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>
