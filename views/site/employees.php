<?php

  use app\models\Post;
  use app\models\Employees;
  $this->title = 'Сотрудники';
?>
<h2 class="text-center mt-3 mb-4">Сотрудники</h2>
<input type="text" name="" value="" class="form-control mb-3 who" placeholder="Ввведите фамилию, имя, отчество или должность для поиска сотрудника..." autocomplete="off">
<table class="table table-hover text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th>
      <th scope="col">Отчество</th>
      <th scope="col">Должнось</th>
      <th scope="col">Действия</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($employees as $emp): ?>

    <tr>
      <th scope="row"><?=$emp['id_emp']?></th>
      <td><?=$emp['lastname_emp']?></td>
      <td><?=$emp['firstname_emp']?></td>
      <td><?=$emp['otch_emp']?></td>
      <td>
        <?php

          $sotr = Employees::findOne($emp['post_id']);
          $post = $sotr->post;
          echo $post->name_post;
        ?>
      </td>
      <td><i class="fas fa-eye"></i> <i class="fas fa-edit"></i> <i class="fas fa-user-times"></i></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<script>
  $(document).ready(function(){
    $(".who").keyup(function(){
      _this = this;

      $.each($('table tbody tr'),function(){
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
