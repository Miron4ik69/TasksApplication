<?php require('partials/head.php'); ?>

<body class="university-lp">

  <!--Navigation & Intro-->
  <?php require('partials/header.php'); ?>
  <!--Navigation & Intro-->

  <!--Main content-->
    <main style="padding-top: 50px;">
      
        <div class="container mt-5">
            <section class="dark-grey-text">
              <h2 class="text-center font-weight-bold mb-4 pb-2">Все новости</h2>
              <?php foreach(array_reverse($results) as $result): ?>
                 <div class="row align-items-center m-5">
                    <div class="col-lg-5 col-xl-4">
                        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-7 col-xl-8">

           
            <h4 class="font-weight-bold mb-3"><strong><?= $result->title; ?></strong></h4>
           
            <p class="dark-grey-text"><?= $result->description; ?></p>
           
            <p> <?= $result->date; ?></p>
           
            <a class="btn btn-primary btn-md mx-0 btn-rounded">Просмотреть</a>

            </div>
          

        </div>
              <?php endforeach; ?>

        <hr class="my-5">

        </section>



        </div>
    </main>
  <!--Main content-->

 <?php require('partials/footer.php'); ?>