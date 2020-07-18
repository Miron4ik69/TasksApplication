<?php session_start(); ?>
<?php require('partials/head.php'); ?>

<body class="university-lp">
<?php require('partials/header.php'); ?>


<div class="container">

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTask">
    Добавить задачу
  </button>


<form action="/sort" method="post">
<select id="filter" name="filter" class="mdb-select md-form colorful-select dropdown-primary">
    <option disabled selected mutiple>Все</option>
    <option value="sortName">Сортировка по имени</option>
    <option value="sortEmail">Сортировка по email</option>
    <option value="sortStatus">Сортировка по статусу</option>
  </select>
<label class="mdb-main-label">Сортировка</label>
<button type="submit" class="btn btn-primary">Сортировать</button>
</form>

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
        <p class="text-muted text-break"><?= $result->text; ?></p>
        <?php if($_SESSION && $_SESSION["role"] == "admin"): ?>
          <?php echo "<a name='id' href='edit?id=$result->id' class='btn btn-unique'>Редактировать</a>"?>
        
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
          <?php endif; ?>
        <hr>
      </div>
    </div>
    <?php endforeach; ?>

  </section>

<section>
<nav aria-label="Page navigation example">
  <ul class="pagination pg-blue pagination-lg">
    <?php for($i = 1; $i <= $pages; $i++): ?>
      <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
  </ul>
</nav>
</section>

</div>


<?php require('partials/modals.php'); ?>
<?php require("partials/footer.php"); ?>

