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
  <img id="fixed-background" src="./image_product/bg_p3.jpg" alt="fixed-image">
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
			  <li data-filter=".filter-a">A-CLASS</li>
              <li data-filter=".filter-c">C-CLASS</li>
              <li data-filter=".filter-e">E-CLASS</li>
			  <li data-filter=".filter-g">G-CLASS</li>
              <li data-filter=".filter-glc">GLC-CLASS</li>
			  <li data-filter=".filter-gle">GLE-CLASS</li>
			  <li data-filter=".filter-mb">MAYBACH</li>
			  <li data-filter=".filter-s">S-CLASS</li>
			  <li data-filter=".filter-v">V-CLASS</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-a">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classa200.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classa200.jpg" data-gall="portfolioGallery" class="venobox" title="A200"><i class="bx bx-plus"></i><h6>A200</h6></a>
                <a href="../Price/Price.php#a200"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-a">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classa250.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classa250.jpg" data-gall="portfolioGallery" class="venobox" title="A250"><i class="bx bx-plus"></i><h6>A250</h6></a>
                <a href="../Price/Price.php#a250"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-c">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classc200.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classc200.jpg" data-gall="portfolioGallery" class="venobox" title="C200"><i class="bx bx-plus"></i><h6>C200</h6></a>
                <a href="../Price/Price.php#c200"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-c">
            <div class="portfolio-wrap">
				
              <img src="./image_product/filter_classc250.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classc250.jpg" data-gall="portfolioGallery" class="venobox" title="C250"><i class="bx bx-plus"></i><h6>C250</h6></a>
				
                <a href="../Price/Price.php#c250"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
			  
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-c">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classc300.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classc300.jpg" data-gall="portfolioGallery" class="venobox" title="C300"><i class="bx bx-plus"></i><h6>C300</h6></a>
                <a href="../Price/Price.php#c300"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-e">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classe200.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classe200.jpg" data-gall="portfolioGallery" class="venobox" title="E200"><i class="bx bx-plus"></i><h6>E200</h6></a>
                <a href="../Price/Price.php#e200"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-e">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classe250.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classe250.jpg" data-gall="portfolioGallery" class="venobox" title="E250"><i class="bx bx-plus"></i><h6>E250</h6></a>
                <a href="../Price/Price.php#e250"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-e">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classe300.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classe300.jpg" data-gall="portfolioGallery" class="venobox" title="E300"><i class="bx bx-plus"></i><h6>E300</h6></a>
                <a href="../Price/Price.php#e300"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-g">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classg65.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classg65.jpg" data-gall="portfolioGallery" class="venobox" title="G65"><i class="bx bx-plus"></i><h6>G65</h6></a>
                <a href="../Price/Price.php#g65"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		  
          <div class="col-lg-4 col-md-6 portfolio-item filter-glc">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classglc200.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classglc200.jpg" data-gall="portfolioGallery" class="venobox" title="GLC 200 4MATIC"><i class="bx bx-plus"></i><h6>GLC 200 4MATIC</h6></a>
                <a href="../Price/Price.php#glc200"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-glc">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classglc300coupe.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classglc300coupe.jpg" data-gall="portfolioGallery" class="venobox" title="GLC 300 COUPE"><i class="bx bx-plus"></i><h6>GLC 300 COUPE</h6></a>
                <a href="../Price/Price.php#glccoupe"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-glc">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_classglc300.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_classglc300.jpg" data-gall="portfolioGallery" class="venobox" title="GLC 300 4MATIC"><i class="bx bx-plus"></i><h6>GLC 300 4MATIC</h6></a>
                <a href="../Price/Price.php#glc4matic"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-gle">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_gle_coupe.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_gle_coupe.jpg" data-gall="portfolioGallery" class="venobox" title="GLE 400 4MATIC"><i class="bx bx-plus"></i><h6>GLE 400 4MATIC</h6></a>
                <a href="../Price/Price.php#gle400"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		   
		   <div class="col-lg-4 col-md-6 portfolio-item filter-gle">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_gle_suv.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_gle_suv.jpg" data-gall="portfolioGallery" class="venobox" title="GLE 450 4MATIC"><i class="bx bx-plus"></i><h6>GLE 450 4MATIC</h6></a>
                <a href="../Price/Price.php#gle450"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		   
		   <div class="col-lg-4 col-md-6 portfolio-item filter-mb">
            <div class="portfolio-wrap">
              <img src="./image_product/filtermb450.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filtermb450.jpg" data-gall="portfolioGallery" class="venobox" title="MAYBACH 450"><i class="bx bx-plus"></i><h6>MAYBACH 450</h6></a>
                <a href="../Price/Price.php#mb450"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-mb">
            <div class="portfolio-wrap">
              <img src="./image_product/filtermb450matic.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filtermb450matic.jpg" data-gall="portfolioGallery" class="venobox" title="MAYBACH 450 4MATIC"><i class="bx bx-plus"></i><h6>MAYBACH 450 4MATIC</h6></a>
                <a href="../Price/Price.php#mb450matic"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-mb">
            <div class="portfolio-wrap">
              <img src="./image_product/filtermb560.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filtermb560.jpg" data-gall="portfolioGallery" class="venobox" title="MAYBACH 560 4MATIC"><i class="bx bx-plus"></i><h6>MAYBACH 560 4MATIC</h6></a>
                <a href="../Price/Price.php#mb560matic"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		   
		   <div class="col-lg-4 col-md-6 portfolio-item filter-s">
            <div class="portfolio-wrap">
              <img src="./image_product/filters450.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filters450.jpg" data-gall="portfolioGallery" class="venobox" title="S 450 L"><i class="bx bx-plus"></i><h6>S 450 L</h6></a>
                <a href="../Price/Price.php#s450"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-s">
            <div class="portfolio-wrap">
              <img src="./image_product/filters500cab.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filters500cab.jpg" data-gall="portfolioGallery" class="venobox" title="S 500 CABRIOLET"><i class="bx bx-plus"></i><h6>S 500 CABRIOLET</h6></a>
                <a href="../Price/Price.php#s500cabriolet"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-s">
            <div class="portfolio-wrap">
              <img src="./image_product/filters500c.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filters500c.jpg" data-gall="portfolioGallery" class="venobox" title="S 500 COUPE"><i class="bx bx-plus"></i><h6>S 500 COUPE</h6></a>
                <a href="../Price/Price.php#s500coupe"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
              </div>
            </div>
          </div>
		   
		  <div class="col-lg-4 col-md-6 portfolio-item filter-v">
            <div class="portfolio-wrap">
              <img src="./image_product/filter_v250.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="./image_product/filter_v250.jpg" data-gall="portfolioGallery" class="venobox" title="V250"><i class="bx bx-plus"></i><h6>V250</h6></a>
                <a href="../Price/Price.php
                
                
                #v250"><i class="bx bx-link"></i><h6>Chi tiết</h6></a>
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
