<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../image/logo.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  
  
  <!--Products-->
  
  <link href="../vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./Products.css">
  
</head>
<body>
  <img id="fixed-background" src="./image_product/products_background.jpg" alt="fixed-image">
    <div id="nav" class="sticky-nav">
      <nav class="navbar navbar-expand-lg ">
        <div class="container">
          
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bars"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" aria-current="page" href="../Home/Home.php">Trang chủ</a>
              <a class="dropdown-item" aria-current="page" href="../Introduce/Introduce.php">Giới thiệu</a>
              <a class="dropdown-item" aria-current="page" href="../Product/Products.php">Sản phẩm</a>
              <a class="dropdown-item" aria-current="page" href="../Price/Pricea200.php">Bảng giá</a>
              <a href="../Contact/Contacts.php" class="dropdown-item" aria-current="page">Liên hệ</a>
              <a class="dropdown-item" href="../account/index.php" class="nav-link" aria-current="page">
                  <?php if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) echo "Trang cá nhân";
                        else echo "Đăng nhập"; ?>
                </a>
            </div>
           
          </div>
          <a class="navbar-brand" href="../Home/Home.php">
            Mercedes
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../Home/Home.php">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../Introduce/Introduce.php">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../Product/Products.php">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../Price/Price.php">Bảng giá</a>
              </li>
              <li class="nav-item">
                <a href="../Contact/Contacts.php" class="nav-link" aria-current="page">Liên hệ</a>
              </li>
            </ul>
          </div>
          <a href="../account/index.php" class="nav-link" aria-current="page">
                  <?php if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) echo "Trang cá nhân";
                        else echo "Đăng nhập"; ?>
                </a>
          <div class="logo"><img class="logo" src="../image/logo.png" alt=""></div>
        </div>
      </nav>
    </div>
    
  
  
  <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h3>Các dòng xe Mercedes</h3>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
			        <li data-filter=".filter-alienware">Alienware</li>
              <li data-filter=".filter-inspiron">Inspiron</li>
              <li data-filter=".filter-vostro">Vostro</li>
			        <li data-filter=".filter-xps">XPS</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-alienware">
            <div class="portfolio-wrap">
              <img src="./image_product/dell_alienware_m15_r6_1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/dell_alienware_m15_r6_1.jpg" data-gall="portfolioGallery" class="venobox" title="Dell Alienware M15 R6"><i class="bx bx-plus"></i><h6>Dell Alienware M15 R6</h6></a>
                <a href="./DellAlienwareM15R6"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-inspiron">
            <div class="portfolio-wrap">
              <img src="./image_product/dell_inspiron_1_3501.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/dell_inspiron_1_3501.jpg" data-gall="portfolioGallery" class="venobox" title="Dell Inspiron 3501"><i class="bx bx-plus"></i><h6>Dell Inspiron 3501</h6></a>
                <a href="./DellInspiron3501"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-inspiron">
            <div class="portfolio-wrap">
              <img src="./image_product/dell_inspiron_5502_1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/dell_inspiron_5502_1.jpg" data-gall="portfolioGallery" class="venobox" title="Dell Inspiron 5502"><i class="bx bx-plus"></i><h6>Dell Inspiron 5502</h6></a>
                <a href="./DellInspiron5502"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vostro">
            <div class="portfolio-wrap">
              <img src="./image_product/dell_vostro_1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/dell_vostro_1.jpg" data-gall="portfolioGallery" class="venobox" title="Dell Vostro 3400"><i class="bx bx-plus"></i><h6>Dell Vostro 3400</h6></a>
                <a href="./DellVostro3400"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-xps">
            <div class="portfolio-wrap">
              <img src="./image_product/dell_xps_139300_1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/dell_xps_139300_1.jpg" data-gall="portfolioGallery" class="venobox" title="Dell XPS 13 9300"><i class="bx bx-plus"></i><h6>Dell 13 9300</h6></a>
                <a href="./DellXPS139300"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		   
        </div>

      </div>
    </section>

<!--Footer-->

<div class="page-wrapper">
  <div id="waterdrop"></div>
  <footer>
    <div class="footer-top">
      <div class="containerfooter">
          <div class="customer-column">
            <div class="widget footer_widget">
              <h5 class="footer-title">Khách hàng</h5>
              <p>Câu hỏi thường gặp</p>
              <p>Hỗ trợ khách hàng</p>
              <p>Hỗ trợ bảo trì</p>
              <p>Hướng dẫn sử dụng</p>
              <p>Lịch dịch vụ</p>
              <p>Hướng dẫn thanh toán</p>
            </div>
          </div>
              <div class="service-column">
                <div class="widget footer_widget">
                  <h5 class="footer-title">Dịch vụ</h5>
                  <p>Bảo hành</p>
                  <p>Thay thế thiết bị</p>
                  <p>Sửa chữa</p>
                  <p>Mua linh kiện phụ tùng</p>
                  <p>Báo giá sản phẩm</p>
                  <p>Mua xe mới</p>
                </div>
              </div>
              <div class="about-us-column">
                 <div class="widget widget_gallery gallery-grid-4">
              <h5 class="footer-title">Về chúng tôi</h5>
              <p>Giới thiệu</p>
              <p>Chính sách đại lý</p>
              <p>Thông báo</p>
              <p>Khuyến mãi</p>
              <p>Tài liệu</p>
              <p>Blog</p>
            </div>
              </div>
          <div class="contact-column">
            <!-- <div class="widget widget_gallery gallery-grid-4">
              <h5 class="footer-title">Dunno</h5>
            </div> -->
            <div class="widget">
              <h5 class="footer-title">Phản hồi</h5>
              <div class="textwidget">
                <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">

                  <form method="post" class="wpcf7-form" novalidate="novalidate">

                    <div class="contact-form-footer">
                      <p><span class="wpcf7-form-control-wrap your-first-name"><input type="text" name="your-first-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your name"></span></p>
                      <p><span class="wpcf7-form-control-wrap your-email_1"><input type="email" name="your-email_1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Your email"></span></p>
                      <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your message"></textarea></span></p>
                      <div><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container-last">
            <nav id="footer-navigation" class="site-navigation footer-navigation centered-box">
              <ul id="footer-menu" class="nav-menu styled clearfix inline-inside">
                <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26"><a href="#">Bản quyền nội dung</a></li>
                <li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a href="#">Cài đặt</a></li>
                <li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="#">Quyền riêng tư và bảo vệ dữ liệu</a></li>
                <li id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29"><a href="#">Thông tin pháp lý</a></li>
              </ul>
            </nav>

            <div id="footer-socials">
              <div class="socials inline-inside socials-colored">

                <a href="#" target="_blank" title="Facebook" class="socials-item facebook">
                  <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
                <a href="#" target="_blank" title="Twitter" class="socials-item twitter">
                  <i class="fa fa-twitter-square" aria-hidden="true"></i>

                </a>
                <a href="#" target="_blank" title="Instagram" class="socials-item instagram">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#" target="_blank" title="YouTube" class="socials-item youtube">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
                <a href="#" target="_blank" title="Telegram" class="socials-item telegram">
                  <i class="fa fa-telegram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
      </div>
    </div>
  </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>

<script> jQuery('#waterdrop').raindrops({color:'#1c1f2f', canvasHeight:150, density: 0.1, frequency: 20});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../vendor/counterup/counterup.min.js"></script>
  <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../vendor/venobox/venobox.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="../vendor/js/main.js"></script>
  <script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nav").style.top = "0";
  } else {
    document.getElementById("nav").style.top = "-200px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
</body>
</html>
