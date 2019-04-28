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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
  <aside class="control_panel" id="control_panel">
    <div class="control_panel__top">
      <div class="logo">
        <img src="" alt="" class="logo__img">
        <h2 class="logo__name">ЭКСМО</h2>
        <h6 class="logo__group">Издательская группа</h6>
      </div>
    </div>
    <div class="control_panel__bottom">
      <div class="profile_user">
        <img src="" alt="" class="profile_user__img">
        <h4 class="profile_user__name">Иванов Иван</h4>
        <h5 class="profile_user__post">Долдность</h5>
      </div>
      <nav class="navigation">
        <ul class="navigation__menu">
          <li class="menu__item down"><a href="" class="menu__link">Point 1</a>
            <ul class="submenu">
              <li class="menu__item"><a href="" class="menu__link">Underpoint 1</a></li>
              <li class="menu__item"><a href="" class="menu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link">Point 2</a>
            <ul class="submenu">
              <li class="menu__item"><a href="" class="menu__link">Underpoint 1</a></li>
              <li class="menu__item"><a href="" class="menu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link">Point 3</a>
            <ul class="submenu">
              <li class="menu__item"><a href="" class="menu__link">Underpoint 1</a></li>
              <li class="menu__item"><a href="" class="menu__link">Underpoint 2</a></li>
            </ul>
          </li>
          <li class="menu__item down"><a href="" class="menu__link">Point 4</a>
            <ul class="submenu">
              <li class="menu__item"><a href="" class="menu__link">Underpoint 1</a></li>
              <li class="menu__item"><a href="" class="menu__link">Underpoint 2</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
