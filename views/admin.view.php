<?php require('partials/head.php'); ?>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
      <!-- Navbar links -->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Аккаунт</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Выйти</a>
          </div>
        </li>
      </ul>
      <!-- Navbar links -->
    </nav>
    <!-- Navbar -->
  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">
      <!-- Section: Customers -->
      <section class="section team-section">
        <!-- First row -->
        <div class="row">
          <!-- First column -->
          <div class="col-md-12">
            <div class="row mb-1">
              <div class="col-md-3">
                 <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm">
                   Добавить Пост
                  </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-1">
                <!-- Tabs -->
                <div class="classic-tabs">
                  <!-- Nav tabs -->
                  <div class="tabs-wrapper">
                    <ul class="nav tabs-primary primary-color" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">
                          Посты
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Tab panels -->
                  <div class="tab-content card">
                    <!-- Panel 1 -->
                    <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Пост ID</th>
                              <th>Заголовок поста</th>
                              <th>Описания поста</th>
                              <th>Дата добавления</th>
                              <th>Действия</th>
                            </tr>
                          </thead>
                          
                          <?php foreach(array_reverse($posts) as $post) : ?>
                           
                          <tbody>
                            <tr>
                              <th scope="row"><?= $post->id; ?></th>
                              <td><?= $post->title; ?></td>
                              <td><?= $post->description; ?></td>
                              <td><?= $post->date; ?></td>
                              <td>
                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i
                                    class="far fa-eye"></i></a>                                   
                                <a class="teal-text" type="button" data-target="#updatePostModal" data-toggle="modal" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <form action="/delete" method="POST">
                                  <button name="<?= $post->id; ?>" type="submit" class="red-text" title="Remove"><i class="fas fa-times"></i></button>
                                </form>
                              </td>
                            </tr>
                          </tbody>
                          
                          <?php endforeach; ?>
                            
                        </table>
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

     
      <?php require('partials/modals.php'); ?>

      

    </div>
  </main>
  <!-- Main layout -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="../js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>

  <!-- Custom scripts -->
  <script>

  $('.datepicker').pickadate();
   

  </script>

</body>

</html>
