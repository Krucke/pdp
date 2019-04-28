<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
  <input type="checkbox" id="nav-toggle" hidden>
  <aside class="control_panel" id="control_panel">
    <label for="nav-toggle" class="nav-toggle" onclick></label>
    <div class="control_panel__top">
      <div class="logo">
        <img src="../logo/logo.png" alt="logo" class="logo__img">
        <div class="logo__brand">
          <h2 class="brand__name">ЭКСМО</h2>
          <h6 class="brand__group">Издательская группа</h6>
        </div>
      </div>
    </div>
    <div class="control_panel__bottom">
      <div class="profile_user">
        <img src="../logo/logo.png" alt="" class="profile_user__img">
        <div class="profile_user__info">
          <h4 class="profile_user__name">Иванов Иван</h4>
          <h5 class="profile_user__post">Должность</h5>
        </div>
      </div>
      <nav class="navigation">
        <ul class="navigation__menu">
          <li class="menu__item down"><a href="" class="menu__link"><i class="fas fa-shopping-cart"></i>Закупка товара <i class="arrow__right"></i></a>
            <ul class="submenu">
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 1</a></li>
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link"><i class="fas fa-truck-loading"></i>Принятие поставки <i class="arrow__right"></i></a>
            <ul class="submenu">
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 1</a></li>
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link"><i class="fas fa-people-carry"></i>Хранение товара <i class="arrow__right"></i></a>
            <ul class="submenu">
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 1</a></li>
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link"><i class="fas fa-users"></i>Сотрудники <i class="arrow__right"></i></a>
            <ul class="submenu">
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 1</a></li>
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link"><i class="fas fa-paste"></i>Документы <i class="arrow__right"></i></a>
            <ul class="submenu">
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 1</a></li>
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link"><i class="fas fa-paste"></i>Документы <i class="arrow__right"></i></a>
            <ul class="submenu">
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 1</a></li>
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link"><i class="fas fa-paste"></i>Документы <i class="arrow__right"></i></a>
            <ul class="submenu">
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 1</a></li>
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link"><i class="fas fa-paste"></i>Документы <i class="arrow__right"></i></a>
            <ul class="submenu">
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 1</a></li>
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link"><i class="fas fa-paste"></i>Документы <i class="arrow__right"></i></a>
            <ul class="submenu">
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 1</a></li>
              <li class="submenu__item"><a href="" class="submenu__link">Underpoint 2</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <main class="main__content">
    <?= $content ?>
  </main>
</div>

<?php $this->endBody() ?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.down').click(function(){
      $(this).find('.submenu').slideToggle("slow");
      $(this).toggleClass('active_li');
      $(this).find('.arrow__right').toggleClass('active');
    });
  });
</script>
</body>
</html>
<?php $this->endPage() ?>
