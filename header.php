<?php

session_start();

//выделяем уникальный идентификатор сессии
$id = session_id();

if ($id != "") {
  //текущее время
  $CurrentTime = time();
  //через какое время сессии удаляются
  $LastTime = time() - 600; // 600 это пользователи за последние  10 минут
  //файл, в котором храним идентификаторы и время
  $base = "session.txt";

  $file = file($base);
  $k = 0;
  for ($i = 0; $i < sizeof($file); $i++) {
    $line = explode("|", $file[$i]);
    if ($line[1] > $LastTime) {
      $ResFile[$k] = $file[$i];
      $k++;
    }
  }

  for ($i = 0; $i < sizeof($ResFile); $i++) {
    $line = explode("|", $ResFile[$i]);
    if ($line[0] == $id) {
      $line[1] = trim($CurrentTime) . "\n";
      $is_sid_in_file = 1;
    }
    $line = implode("|", $line);
    $ResFile[$i] = $line;
  }

  $fp = fopen($base, "w");
  for ($i = 0; $i < sizeof($ResFile); $i++) {
    fputs($fp, $ResFile[$i]);
  }
  fclose($fp);

  if (!$is_sid_in_file) {
    $fp = fopen($base, "a-");
    $line = $id . "|" . $CurrentTime . "\n";
    fputs($fp, $line);
    fclose($fp);
  }
}



$version_site = "ru";
//$version_sitename = "https://stupeni-a.com.ua";
$version_sitename = "https://stupeni-a.netlify.app";
// список языков
$sites = array(
  "ru" => $version_sitename . $_SERVER['REQUEST_URI'],
  "uk" => $version_sitename. "/uk-ua" . $_SERVER['REQUEST_URI'],
);
// получаем язык
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// проверяем язык и если не находим в нашем архиве $sites то отправляем на главную страницу ru
if (!in_array($lang, array_keys($sites))) {
  $lang = 'ru';
}
/* Эта функция будет проверять, является ли посетитель роботом поисковой системы */
function isBot(&$botname = '')
{
  $bots = array(
    'rambler', 'googlebot', 'aport', 'yahoo', 'msnbot', 'turtle', 'mail.ru', 'omsktele',
    'yetibot', 'picsearch', 'sape.bot', 'sape_context', 'gigabot', 'snapbot', 'alexa.com',
    'megadownload.net', 'askpeter.info', 'igde.ru', 'ask.com', 'qwartabot', 'yanga.co.uk',
    'scoutjet', 'similarpages', 'oozbot', 'shrinktheweb.com', 'aboutusbot', 'followsite.com',
    'dataparksearch', 'google-sitemaps', 'appEngine-google', 'feedfetcher-google',
    'liveinternet.ru', 'xml-sitemaps.com', 'agama', 'metadatalabs.com', 'h1.hrn.ru',
    'googlealert.com', 'seo-rus.com', 'yaDirectBot', 'yandeG', 'yandex',
    'yandexSomething', 'Copyscape.com', 'AdsBot-Google', 'domaintools.com',
    'Nigma.ru', 'bing.com', 'dotnetdotcom'
  );
  foreach ($bots as $bot)
    if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false) {
      $botname = $bot;
      return true;
    }
  return false;
}
// перенаправление на субдомен если язык браузера не совпадает с языковой версией страницы только в самом начале сессии, когда еще нет суперглобальной переменной $_SESSION["newsession"]  и если посетитель не бот
if ($lang != $version_site && !$_SESSION["newsession"]  && !isBot()) {
  header('Location: ' . $sites[$lang]);
}

$_SESSION["newsession"] = 1;





if (!$meta_rights) $meta_rights = "Ступени-А";
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru">
<!--<![endif]-->

<head>


  <style>
    /* cyrillic */
    @font-face {
      font-family: 'Forum';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/forum/v11/6aey4Ky-Vb8Ew8IVOpIq3g.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      font-display: swap;
    }

    /* latin */
    @font-face {
      font-family: 'Forum';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/forum/v11/6aey4Ky-Vb8Ew8IROpI.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      font-display: swap;
    }

    @font-face {
      font-family: 'Vollkorn';
      font-style: italic;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/vollkorn/v13/0ybuGDoxxrvAnPhYGxksckM2WMCpRjDj-DJGWlmaObTa3w.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      font-display: swap;
    }

    .photo-com {
      width: 400px
    }
  </style>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-116362889-1');
  </script>



  <script>
    if (window.XMLHttpRequest) {
      xhr = new XMLHttpRequest();
    } else {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.open("GET", '/static/css/bootstrap.min.css?t=<?php echo (microtime(true)); ?>', false);
    xhr.send();
    var lazyStyle = document.createElement('style');
    lazyStyle.innerHTML = xhr.responseText;
    document.head.appendChild(lazyStyle);

    if (window.XMLHttpRequest) {
      xhr2 = new XMLHttpRequest();
    } else {
      xhr2 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr2.open("GET", '/static/css/main.css?t=<?php echo (microtime(true)); ?>', false);
    xhr2.send();
    var lazyStyle2 = document.createElement('style');
    lazyStyle2.innerHTML = xhr2.responseText;
    document.head.appendChild(lazyStyle2);
  </script>

  <!--<base href="http://www.stupeni-a.com.ua/">-->
  <meta name="p:domain_verify" content="e97ca1af8f2b2244378f414b490cbfeb" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="robots" content="index, follow">
  <meta name="rights" content="<?php echo $meta_rights ?>">
  <meta name="description" content="<?php echo $meta_description ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $meta_title ?> от Ступени-А</title>
  <!--<link rel="stylesheet" href="/static/css/bootstrap.min.css?t=<?php echo (microtime(true)); ?>"> -->
  <!--<link rel="stylesheet" href="/static/css/jquery.fancybox.css">-->
  <!--<link rel="stylesheet" href="/static/css/main.css?t=<?php echo (microtime(true)); ?>">-->
  <!--<link rel="stylesheet" href="/static/css/responsive.css">-->
  <!--<link rel="stylesheet" href="/static/css/animate.min.css">-->
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
  <link href="/static/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
  <!--<link href="/static/css/prise.css" rel="stylesheet" type="text/css" />-->
  <?php if ($canonical) echo  '<link rel="canonical" href="' . $canonical . '" />'; ?>
  <?php if ($alternate_hreflang) echo  '<link rel="alternate" hreflang="uk" href="' . $alternate_hreflang . '" />'; ?>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
  <?php if ($link_style) echo  '<link rel="stylesheet"  href="' . $link_style . '" />'; ?>



</head>

<body>
  <!-- header section -->
  <div class="paralax-back">
  </div>

  <div id="helpDiv0" class="helpDiv0 opacity0_tran">
    <div id="helpDiv1" class="helpDiv1">
      <div id="helpDiv2" class="helpDiv2 ">
        <span id="help1" style="font-size: 0.8em;"></span>
        <div id="help_buttons" style="text-align:center;"></div>
      </div>
    </div>
  </div>

  <!-- header section -->
  <section class="banner" role="banner">
    <!--<div class="banner-image" style="background-image:url(/static/images/background9.jpg);"> -->
    <div class="banner-image">
      <!--<img src='/static/images/background.jpg' class="banner-image"> -->
    </div>
    <header id="header">
      <!-- social net  -->
      <div style="width:100%;height: 6px;">
        <div style=" visibility:hidden; float:left;">
          <img class="img-logo" src="/static/images2/logo_ru_710x185.jpg" alt="Ступени-А" style="position: absolute; max-width:150px;">
        </div>

        <div class="div-youtube">
          <a href="https://www.youtube.com/channel/UC4EVXY3s4sQvb4LMLQB4SNw"><img src="/static/images/youtube_icon2.png" alt="youtube" style="width:24px;height:24px;opacity: 0.5;"></a>
        </div>
        <div class="div-instagram">
          <a href="https://www.instagram.com/stupeni_a/"><img src="/static/images/Instagram_icon.png" alt="Instagram" style="margin:  0 15px;width:24px;height:24px;opacity: 0.5;"></a>
        </div>
        <!-- multy lang  -->
        <div class="div-multy-lang">
          <a style="color:#eee;font-family: 'Ubuntu', sans-serif;" href="<?php echo $version_sitename . "/uk-ua" . str_replace('', '', $_SERVER['REQUEST_URI']) ?>">UA</a>
          <span>&nbsp;|&nbsp; </span>
          <a style="color:#eee;font-family: 'Ubuntu', sans-serif;" href="<?php echo $version_sitename . str_replace('', '', $_SERVER['REQUEST_URI']) ?>">RU</a>
          <span>&nbsp;|&nbsp; </span>
          <a style="color:#eee;font-family: 'Ubuntu', sans-serif;" href="<?php echo $version_sitename . "/en" .  str_replace('', '', $_SERVER['REQUEST_URI']) ?>">EN</a>
        </div>






      </div>
      <!-- navigation section  -->
      <!-- <div class="header-content clearfix">   <a href="/"><span class="logo">Ступени-А</span></a> -->
      <div class="header-content clearfix"> <a href="/"><img class="img-logo" src="/static/images2/logo_ru_333x47.png" alt="Ступени-А" style="margin: -11px 0 0 0px; max-width:333px;"></a>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav" style="margin: -10px 0 10px 0;">
            <li><a href="/index.php">Главная</a></li>
            <li><a href="/arhitekturnyj-mramor-beton.php">Мрамор-Бетон</a></li>
            <li><a href="/portfolio.php">Фотогалерея</a></li>
            <li><a href="/posts.php">Статьи</a></li>
            <li><a href="/cena.php">Цена</a></li>

          </ul>
          <ul class="primary-nav">
            <li><a href="/comments.php">Отзывы</a></li>
            <li><a href="/betonnyie-perila.php">Бетонные перила</a></li>
            <li><a href="/betonnyie-poruchni.php">Бетонные поручни</a></li>
            <li><a href="/chasto-zadavaemye-voprosy.php">FAQs</a></li>
            <li><a href="/contact.php">Контакты</a></li>

          </ul>



        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
      </div>
      <!-- navigation section  -->
    </header>


    <?php


    ?>