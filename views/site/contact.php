<?php

$this->title = 'Отправка информации об ошибке';
?>
<form class="" action="index.html" method="post">
  <div class="form-group">
    <label for="email">Имя сотрудника</label>
    <input type="email" class="form-control" id="email" name="email" value="<?=Yii::$app->user->identity->email_emp?>" required>
  </div>
  <div class="form-group">
    <label for="firstname">Имя сотрудника</label>
    <input type="text" class="form-control" id="firstname" placeholder="Введите новое имя сотрудника..." name="firstname" value="<?=$emp['firstname_emp']?>" required>
  </div>
  <div class="form-group">
    <label for="firstname">Имя сотрудника</label>
    <textarea type="text" class="form-control" id="firstname" placeholder="Введите новое имя сотрудника..." name="firstname" value="<?=$emp['firstname_emp']?>" required>
  </div>
</form>
