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
  <link rel="stylesheet" href="css/main_production.css">

  <meta name="theme-color" content="#fafafa">

</head>
<body>
<div class="wrapper">
  <div class="bg-text" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
    Business Marketing
  </div>
  <div class="bg-pointer" data-paroller-factor="0.5" data-paroller-type="foreground" data-paroller-direction="vertical">
    <img src="img/pointer.png" alt="" class="pointer-img">
  </div>
  <?php include 'templates/header_en.php'?>
  <main class="content-wrapper">
    <section class="welcome-section">
      <h1 class="main-offer">
        <span class="color">Повышу</span> твой доход в пару кликов
      </h1>
      <h2 class="main-suboffer">
        Привлеку целевых клиентов на твои услуги с помощью нейросетей и актуальных способов
        продвижения
      </h2>
      <div class="person-wrapper">
        <div class="person-interact">
          <h3 class="section-title">Обо мне и команде</h3>
          <p class="about-text">
            Меня зовут <strong>Павлов Антон</strong>. Я digital-маркетолог и
            действующий предприниматель с опытом больше 5
            лет в маркетинге.<br>
            Вместе с командой мы выстраиваем системы,
            которые приносят прибыль нашим клиентам
            и помогают развивать их бизнесы по всему миру.<br>
            Мы находим варианты работы, которые принесут
            пользу и прибыль каждому нашему клиенту.
          </p>
          <div class="links-wrapper">
            <a href="" class="social-link"><img src="img/fb_ico.png" alt="" class="social-icon"></a>
            <a href="" class="social-link"><img src="img/inst_ico.png" alt="" class="social-icon"></a>
            <a href="" class="social-link"><img src="img/tg_ico.png" alt="" class="social-icon"></a>
          </div>
        </div>
        <div class="media-content">
          <img src="img/main_photo.png" alt="" class="main-photo">
          <span class="name">Антон Павлов</span>
          <p class="occupation">Digital-Маркетолог x Консультант x
            Предприниматель</p>
        </div>
      </div>
    </section>
    <section class="stats-section">
      <div class="stats-wrapper">
        <div class="cell">
          <div class="projects_number">0</div>
          <p class="text">Завершенных проектов</p>
        </div>
        <div class="cell">
          <div class="clients_number">0</div>
          <p class="text">Новых клиентов</p>
        </div>
        <div class="cell">
          <div class="income_number">0</div>
          <p class="text">Увеличения
            доходности</p>
        </div>
      </div>
    </section>

    <section class="offer-section">
      <h3 class="section-title">Мы предлагаем Вам следующие услуги</h3>
      <div class="content-wrapper">
        <div class="links-block">
          <div class="links-wrapper">
            <a href="" class="link">Малый бизнес</a>
            <a href="" class="link">Стартапы</a>
            <a href="" class="link">Специалисты</a>
          </div>
          <img src="img/rocket_pic.png" alt="" class="offer-img">
        </div>
        <div class="offers-block">
          <div class="offer-wrapper">
            <span class="number">01</span>
            <div class="title-wrapper">
              <h4 class="title">Разработка веб-сайтов</h4>
              <p class="description">Лендинги, визитки, интернет-магазины</p>
            </div>
          </div>
          <div class="offer-wrapper">
            <span class="number">02</span>
            <div class="title-wrapper">
              <h4 class="title">Упаковка инфопродуктов</h4>
              <p class="description">Лендинги, визитки, интернет-магазины</p>
            </div>
          </div>
          <div class="offer-wrapper">
            <span class="number">03</span>
            <div class="title-wrapper">
              <h4 class="title">Дизайн</h4>
              <p class="description">Лендинги, визитки, интернет-магазины</p>
            </div>
          </div>
          <div class="offer-wrapper">
            <span class="number">04</span>
            <div class="title-wrapper">
              <h4 class="title">Построение воронок</h4>
              <p class="description">Лендинги, визитки, интернет-магазины</p>
            </div>
          </div>
          <div class="offer-wrapper">
            <span class="number">05</span>
            <div class="title-wrapper">
              <h4 class="title">Привдечение трафика</h4>
              <p class="description">Лендинги, визитки, интернет-магазины</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cases-section">
      <h3 class="section-title">Примеры наших работ</h3>
      <div class="cases-wrapper">
        <div class="case">
          <img src="img/case_1.png" alt="" class="case-img">
          <div class="case-card">
            <h5 class="case-name">TechStore</h5>
            <p class="case-description">TechStore - сеть магазинов,
              специализирующаяся на продаже
              игровых консолей, очков
              виртуальной реальности, а так же
              соответствующих аксессуаров</p>
            <a href="" class="case-button">Подробнее</a>
          </div>
        </div>
        <div class="case case-reverse">
          <img src="img/case_2.png" alt="" class="case-img">
          <div class="case-card card-reverse">
            <h5 class="case-name">Акро-Йога</h5>
            <p class="case-description">Клиент – студия акро-йоги. Обратились с просьбой организовать открытый урок для повышения узнаваемости и посещаемости занятий.</p>
            <a href="" class="case-button">Подробнее</a>
          </div>
        </div>
        <div class="case">
          <img src="img/case_3.png" alt="" class="case-img">
          <div class="case-card">
            <h5 class="case-name">Red Fitness</h5>
            <p class="case-description">Red Fitness — фитнес-центр, обеспечивающий доступ к обширному ассортименту тренажёров, спортивного инвентаря и различных занятий спортом, включая несколько кортов для бадминтона и вместительный бассейн.</p>
            <a href="" class="case-button">Подробнее</a>
          </div>
        </div>
      </div>
    </section>
    <section class="in-touch-section">
      <div class="text">
        <h3 class="section-title">Рука на пульсе</h3>
        <p class="description">Мы знаем, как неприятно находиться в состоянии неизвестности, поэтому мы держим Вас в курсе всех действий, которые влияют на бизнес. Мы присылаем детальные отчеты с пояснениями каждую неделю.</p>
        <p class="description">Они помогут сформировать эффективную маркетинговую стратегию, оптимизировать рекламный бюджет и понимать, какие шаги следует предпринять, чтобы увеличить продажи и удовлетворенность клиентов.</p>
      </div>
      <img src="img/in-touch.png" alt="" class="in-touch-img">
    </section>
    <section class="review-section">
      <h3 class="section-title">Отзывы наших клиентов</h3>
      <div class="slider-wrapper">
        <div class="slide">
          "Очень рада работе с Антоном и его агентством. Вы быстро определили какую мне применить стратегию в своём блоге, какие ввести темы и на что сделать упор. Помогли поднять важные темы для моей целевой аудитории. Результат заметен. Поднялась активность, подписчики стали более вовлечёнными. Я рада, что теперь могу не беспокоиться за низкую статистику в блоге. Спасибо, что всегда помогаете с идеями и подстраиваете план под меня. А ещё с Вами очень комфортно работать."
        </div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slider-bottom">
          <div class="reviewer-wrapper">
            <img src="img/reviewer.jpg" alt="" class="reviewer-img">
            <div class="reviewer-description">
              <div class="reviewer-name">Екатерина</div>
              <div class="reviewer-occupation">бренд-дизайнер</div>
            </div>
          </div>
          <div class="buttons-wrapper">
            <button class="slider-button prev"><img src="img/left.png" alt="" class="button-arrow"></button>
            <button class="slider-button next"><img src="img/right.png" alt="" class="button-arrow"></button>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
<!-- Add your site or application content here -->
<!--<script src="js/vendor/modernizr-3.11.2.min.js"></script>-->


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/paroller.js/dist/jquery.paroller.min.js"></script>
<script src="js/main.js"></script>
<script src="js/plugins.js"></script>
<script>
  window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>
