<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход в учетную запись';
?>
<style media="screen">
  .row{
    height: 99vh;
    margin-top: -50px;
 }
</style>
<div class="row justify-content-center align-items-center">
  <div class="col-8">
    <form class="" action="/site/signin" method="post">
      <h3 class="text-center text-uppercase m-4 color__black">Вход в систему</h3>
      <div class="form-group">
        <label for="login" class="color__black">Логин пользователя</label>
        <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин">
      </div>
      <div class="form-group">
        <label for="password" class="color__black">Пароль пользователя</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Введите пароль">
      </div>
      <small id="emailHelp" class="form-text text-muted float-left mt-2">При возникновении вопросов обращайтесь в тех. поддержку</small>
      <button type="submit" name="signin" class="btn btn-primary float-right button__dark" id="emailHelp" aria-describedby="emailHelp">Войти в систему</button>
      <div class="clearfix"></div>
    </form>
  </div>
</div>
