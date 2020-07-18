
<?php require('partials/head.php'); ?>


<body class="creative-lp">

<style>
        .intro-2 {
            background: url("https://mdbootstrap.com/img/Photos/Others/images/91.jpg")no-repeat center center;
            background-size: cover;
        }

        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }

        .md-form label {
            color: #ffffff;
        }

        h6 {
            line-height: 1.7;
        }

        html,
        body,
        header,
        .view {
          height: 100vh;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .view {
            height: 700px;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .view  {
            height: 650px;
          }
        }

        .card {
            margin-top: 30px;
            /*margin-bottom: -45px;*/
        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #fb5364;
            box-shadow: 0 1px 0 0 #fb5364;
        }

        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #fb5364;
        }

        .md-form .form-control {
            color: #fff;
        }
    </style>

    <!--Main Navigation-->
    <header>


        <!--Intro Section-->
        <section class="view intro-2">
            <div class="mask rgba-indigo-light h-100 d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

                            <!--Form with header-->
                            <form action="">
                            <div class="card wow fadeIn" data-wow-delay="0.3s">
                                <div class="card-body">

                                    <!--Header-->
                                    <div class="form-header peach-gradient">
                                        <h3>
                                            <i class="fas fa-user mt-2 mb-2"></i> Авторизация</h3>
                                    </div>

                                    <!--Body-->
                                    <div class="md-form mb-0">
                                        <i class="fas fa-user prefix white-text"></i>
                                        <input type="text" id="orangeForm-name" class="form-control">
                                        <label for="orangeForm-name">Your name</label>
                                    </div>
                                    <div class="md-form mb-0">
                                        <i class="fas fa-lock prefix white-text"></i>
                                        <input type="password" id="orangeForm-pass" class="form-control">
                                        <label for="orangeForm-pass">Your password</label>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn peach-gradient btn-lg">Войти</button>
                                        <hr>
                                    </div>

                                </div>
                            </div>
                            </form>
                            
                            <!--/Form with header-->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <!--Main Navigation-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>