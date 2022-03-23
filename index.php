<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project training - website bán hàng</title>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/slick.css" type="text/css" />
  <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>
  <video autoplay muted loop id="bg-video">
    <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
  </video>
  <div class="page-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="cd-slider-nav">
            <nav class="navbar navbar-expand-lg" id="tm-nav">
              <a class="navbar-brand" href="#">CLMCA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-supported-content">
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item selected">
                    <a class="nav-link" aria-current="page" href="#0" data-no="1">Trang chủ</a>
                    <div class="circle"></div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#0" data-no="2">Sản Phẩm</a>
                    <div class="circle"></div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./add_product.php">Thêm sản phẩm</a>
                    <div class="circle"></div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#0" data-no="4">Liên Hệ</a>
                    <div class="circle"></div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid tm-content-container">
      <ul class="cd-hero-slider mb-0 py-5">
        <li class="px-3" data-page-no="1">
          <div class="page-width-1 page-left">
            <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
              <div class="intro-left tm-bg-dark">
                <h2 class="mb-4">Chào mừng đã đến với Shop CLMCA</h2>
                <p class="mb-4">
                  Đây là nơi cung cấp những mặt hàng dễ thương và giá hợp túi tiền nhất.
                </p>
                <p class="mb-0">
                  Nếu như bạn thích món hàng nào đừng ngại đặt ngay hôm nay nhé.
                </p>
              </div>
              <div class="intro-right">
                <img src="img/home-img-3.png" alt="Image" class="img-fluid intro-img-1">
                <img src="img/home-img-4.png" alt="Image" class="img-fluid intro-img-2">
              </div>
              <div class="intro-right">
                <img src="img/home-img-5.png" alt="Image" class="img-fluid intro-img-1">
                <img src="img/home-img-6.png" alt="Image" class="img-fluid intro-img-2">
              </div>

              <div class="circle intro-circle-1"></div>
              <div class="circle intro-circle-2"></div>
              <div class="circle intro-circle-3"></div>
              <div class="circle intro-circle-4"></div>
            </div>
            <div class="text-center">
              <a href="#0" data-page-no="2" class="btn btn-primary tm-intro-btn tm-page-link">
                Xem thêm nhiều sản phẩm hơn
              </a>
        </li>
        <li data-page-no="2">
          <!-- Image Carousel -->
          <h2>Các loại sản phẩm</h2>
          <div class="mx-auto position-relative gallery-container">
            <div class="circle intro-circle-1"></div>
            <div class="circle intro-circle-2"></div>
            <div class="mx-auto tm-border-top gallery-slider">
                <?php require_once("./Entities/product.class.php"); ?>
                <?php
                $prods = Product::list_product();
                //...design
                foreach ($prods as $item) {?>
                <div id="itemdb">
                  <?php
                  echo "<p>Sản phẩm: " . $item["ProductName"] . "</p>";
                  $img_src = $item["Picture"];
                  echo "<img src='$img_src' alt='img' width='200' height='250'>";
                  echo "<p>Giá:" . $item["Price"] . "</p>";
                  echo "<p>Mô tả:" .$item["Description"] . "</p>" ?>
                </div>
                <?php } ?>
            </div>
          </div>
        </li>
        <li data-page-no="3" class="px-3">
          <div class="position-relative page-width-1 page-right tm-border-top tm-border-bottom">
            <div class="circle intro-circle-1"></div>
            <div class="circle intro-circle-2"></div>
            <div class="circle intro-circle-3"></div>
            <div class="circle intro-circle-4"></div>
            <div class="tm-bg-dark content-pad">
              <h2 class="mb-4">Thêm sản phẩm</h2>
              <p class="mb-4">
                Nếu bạn thích nhóm hay <span class="highlight">Theo dõi</span> và ủng hộ chúng tôi.
              </p>
              <p>
                Cảm ơn bạn đã ghe thăm trang web của chúng tôi.<br>Nếu thấy thích các sản phẩm hãy quay lại ủng hộ chúng tôi nhiều hơn nhé.
              </p>
            </div>
          </div>
        </li>
        <li data-page-no="4">
          <div class="mx-auto page-width-2">
            <div class="row">
              <div class="col-md-6 me-0 ms-auto">
                <h2 class="mb-4">Liên hệ</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 tm-contact-left">
                <form action="#" method="POST" class="contact-form">
                  <div class="input-group tm-mb-30">
                    <input name="name" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Name">
                  </div>
                  <div class="input-group tm-mb-30">
                    <input name="email" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Email">
                  </div>
                  <div class="input-group tm-mb-30">
                    <textarea rows="5" name="message" class="textarea form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Message"></textarea>
                  </div>
                  <div class="input-group justify-content-end">
                    <input type="submit" class="btn btn-primary tm-btn-pad-2" value="Gửi">
                  </div>
                </form>
              </div>
              <div class="col-md-6 tm-contact-right">
                <p class="mb-4">
                  Nếu có bất cứ thắc mắc về điều gì hay liên hệ với chúng tôi,
                  hoặc để lại thông tin cá nhân, chúng tôi sẽ hỗ trợ bạn sớm nhất.
                </p>
                <div>
                  Email: <a href="mailto:info@company.com" class="tm-link-white">clmca@company.com</a>
                </div>
                <div class="tm-mb-45">
                  Tel: <a href="tel:0100200340" class="tm-link-white">010-020-0340</a>
                </div>
                <!-- Map -->
                <div class="map-outer">
                  <div class="gmap-canvas">
                    <iframe width="100%" height="550" id="gmap-canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3918.437660127623!2d106.78425511942014!3d10.854278757654836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1646984309631!5m2!1svi!2s" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="container-fluid">
      <footer class="row mx-auto tm-footer">
        <div class="col-md-6 px-0">
          Copyright 2022 CLMCA-HUTECH Company Limited. All rights reserved.
        </div>
        <div class="col-md-6 px-0 tm-footer-right">
          Designed by group CLMCA</a>
        </div>
      </footer>
    </div>
  </div>
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/templatemo-script.js"></script>
</body>

</html>