<?php session_start(); ?>
<?php require('partials/head.php'); ?>

<body class="university-lp">
<?php require('partials/header.php'); ?>
<div class="container">
<section>
    <?php foreach($results as $result): ?>
    <div class="row">
      <div class="col-lg-12 col-md-5 mb-md-0 mb-4 mt-xl-4 text-wrap">
        <h4 class="font-weight-normal mb-4"><?= $result->name; ?></h4>
        <p class="text-muted"><?= $result->email; ?></p>
        <p>Статус: 
          <?php if($result->status == 0): ?>
            <span  class="text-info">Ожидание</span>
          <?php elseif($result->status == 1): ?>
            <span class="text-danger">В процессе</span>
          <?php elseif($result->status == 2): ?>
            <span class="text-success">Выполнено</span>
          <?php endif; ?>
        </p>
        <form action="update" method="post">
          <input type="text" name="id" hidden value="<?= $result->id; ?>">
          <div class="form-group">
              <label for="exampleFormControlTextarea3">Обновить текс</label>
              <textarea name="text" class="form-control" id="exampleFormControlTextarea3" rows="7"><?= $result->text; ?></textarea>
          </div>
          <button type="submit" class="btn btn-danger">Изменить</button>
        </form>
        <form action="setstatus" method="post">
          <?php if($result->status == 0): ?>
            <input type="text" name="status"value="1" hidden>
            <input type="text" name="id" value="<?= $result->id; ?>" hidden>
            <button type="submit" class="btn btn btn-info">Выполнить</button>
          <?php elseif($result->status == 1): ?>
            <input type="text" name="status"value="2" hidden>
            <input type="text" name="id" value="<?= $result->id; ?>" hidden>
            <button type="submit" class="btn btn-warning">Завершить</button>
          <?php endif; ?>
          </form>
        <hr>
      </div>
    </div>
    <?php endforeach; ?>
  </section>
</div>


<?php require('partials/footer.php'); ?>
