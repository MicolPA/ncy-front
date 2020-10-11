<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

   <header id="site-header" class="fixed-top">
        <div class="container">
          <nav class="navbar navbar-expand-lg stroke px-0">
              <h1> <a class="navbar-brand" href="/">
                  <img src="/frontend/web/images/burger.png" alt="burger logo"width="35px" /> NCY
                  </a></h1>
              <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                  data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                  <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item @@about__active">
                          <!-- <a class="nav-link" href="/frontend/web/site/nosotros">Nosotros</a> -->
                          <a class="nav-link" href="/">Nosotros</a>
                      </li>
                      <li class="nav-item @@menu__active">
                          <a class="nav-link" href="/frontend/web/clases-virtuales/direcciones-zonales">Direcciones Zonales</a>
                      </li>
                      <li class="nav-item @@contact__active">
                          <a class="nav-link" href="/frontend/web/site/contactanos">Contáctanos</a>
                      </li>
                      <!--/search-right-->
                      <div class="search-right">
                          <!-- <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a> -->
                          <!-- search popup -->
                          <!-- <div id="search" class="pop-overlay">
                              <div class="popup">
                                  <h4 class="mb-3">Search here</h4>
                                  <form action="error.html" method="GET" class="search-box">
                                      <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                          autofocus="">
                                      <button type="submit" class="btn btn-style btn-primary">Search</button>
                                  </form>

                              </div>
                              <a class="close" href="#close">×</a>
                          </div> -->
                          <!-- /search popup -->
                      </div>
                      <!--//search-right-->
                  </ul>
              </div>
              <!-- toggle switch for light and dark theme -->
              <!-- div class="mobile-position">
                  <nav class="navigation">
                      <div class="theme-switch-wrapper">
                          <label class="theme-switch" for="checkbox">
                              <input type="checkbox" id="checkbox">
                              <div class="mode-container">
                                  <i class="gg-sun"></i>
                                  <i class="gg-moon"></i>
                              </div>
                          </label>
                      </div>
                  </nav>
              </div> -->
              <!-- //toggle switch for light and dark theme -->
          </nav>
        </div>
    </header>

    <div>
        <?= $content ?>
    </div>

    <!-- footer -->
<footer class="py-5">
  <div class="container py-xl-4">
    <div class="row footer-top">
      <div class="col-lg-4 footer-grid_section_1its footer-text">
        <!-- logo -->
        <h2>
          <a class="logo text-wh" href="-">
            <img src="/frontend/web/images/burger.png" alt="burger logo" width="35px" /> NCY
          </a>
        </h2>
        <!-- //logo -->
        <p class="mt-lg-4 mt-3 mb-4 pb-lg-2">We are dedicated to the safety of our guests and employees and have updated
          our safety measures. We believe in Simple, Creative, Modern and Flexible Design Standards with a Retina and Responsive Approach.
          Browse the amazing Features this template offers.</p>
      </div>
      <div class="col-lg-4 col-sm-6 footer-grid_section_1its mt-lg-0 mt-5">
        <div class="footer-title">
          <h3>Contáctanos</h3>
        </div>
        <div class="footer-text mt-4">
          <p><strong>Address :</strong> Burger Bun, 208 Trainer Avenue street, Corner
            Market, NY - 62617.</p>
          <p class="my-2"><strong>Phone :</strong> 809-608-0454 / 829-568-3217</p>
          <p><strong>Email :</strong> <a href="mailto:contacto@ncy1.com">contacto@ncy1.com</a></p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 footer-grid_section_1its footer-text mt-lg-0 mt-5">
         <div class="footer-title mb-4">
          <h3>Siguenos</h3>
        </div>
        <ul class="top-right-info">
          <li class="facebook-w3">
            <a href="#facebbok">
              <span class="fa fa-facebook-f"></span>
            </a>
          </li>
          <li class="twitter-w3">
            <a href="#twitter">
              <span class="fa fa-twitter"></span>
            </a>
          </li>
          <li class="google-w3">
            <a href="#google">
              <span class="fa fa-google-plus"></span>
            </a>
          </li>
          <li class="dribble-w3">
            <a href="#dribble">
              <span class="fa fa-dribbble"></span>
            </a>
          </li>
        </ul>
        <!--
        <div class="info-form-right mt-4 p-0">
          <p class="mb-4">Enter your email and receive the latest news, updates and special offers from us.</p>
          <form action="#" method="post">
            <div class="form-group mb-2">
              <input type="email" class="form-control" name="Email" placeholder="Email" required="">
            </div>
            <button type="submit" class="btn btn-style btn-primary w-100 d-block ml-auto py-2">Subscribe</button>
          </form>
          <h4 class="mt-4">Subscribe & Get $10 on Your First Order</h4>
        </div> -->
      </div>
    </div>
  </div>
</footer>
<!-- //footer -->

<!--/MENU-JS-->
<script>
  setTimeout(function(){
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
          $("#site-header").addClass("nav-fixed");
        } else {
          $("#site-header").removeClass("nav-fixed");
        }
      });

      //Main navigation Active Class Add Remove
      $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
      });
      $(document).on("ready", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
        $(window).on("resize", function () {
          if ($(window).width() > 991) {
            $("header").removeClass("active");
          }
        });
      });

      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
  },500)
</script>
<!--//MENU-JS-->


<!-- disable body scroll which navbar is in active -->
<script>
  
</script>
<!-- //disable body scroll which navbar is in active -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
