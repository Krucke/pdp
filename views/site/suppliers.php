<?php
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\Html;

$this->title = 'Поставщики';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="row justify-content-center">
  <h2 class="w-100 text-center mt-3">Поставщики</h2>
  <form action="" class="col-12" id="form">
    <input type="text" name="referal" value="" class="form-control col-md-12 who mb-3 mt-3" id="textsearch" autocomplete="off" placeholder="Поиск по названию поставщика...">
  </form>
  <?php
    foreach ($suppliers as $sup):
  ?>
  <div class="card w-100 mb-4 mt-2">
    <div class="row">
      <div class="col-md-2 d-flex align-items-center">
        <img src="<?=$sup->img_sup?>" class="card-img" alt="Фото профиля">
      </div>
      <div class="col-md-10">
        <div class="card-body">
          <h5 class="card-title"><?=$sup->name_sup?></h5>
          <p class="card-text text-justify"><?=mb_substr($sup->description_sup,0,190)."..."?></p>
          <p class="card-text"><?=$sup->adress_sup?></p>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
<script>
  $(document).ready(function(){
    $(".who").keyup(function(){
      _this = this;

      $.each($('.card'),function(){
        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase())===-1){
          $(this).hide();
        }
        else {
          $(this).show();
        }
      });
    })
  })
</script>
