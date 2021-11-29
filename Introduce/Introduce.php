<!DOCTYPE html>
<?php
session_start();
?>
<html lang="vi">
<head>
  <title>Dell</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../image/logo.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./Introduce.css">
  <link href="scroll.css" rel="stylesheet">
</head>
<body>
    <div class=header-background>
      <div id="nav" class="sticky-nav">
        <nav class="navbar navbar-expand-lg ">
          <div class="container">
            <a class="navbar-brand" href="../Home/Home.php">
              DELL
            </a>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bars"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" aria-current="page" href="../Home/Home.php">Trang chủ</a>
                <a class="dropdown-item" aria-current="page" href="../Introduce/Introduce.php">Giới thiệu</a>
                <a class="dropdown-item" aria-current="page" href="../Products">Sản phẩm</a>
                <a href="../Contact/Contacts.php" class="dropdown-item" aria-current="page" >Liên hệ</a>
                <a class="dropdown-item" href="../account/index.php" class="nav-link" aria-current="page">
                  <?php if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) echo "Trang cá nhân";
                        else echo "Đăng nhập"; ?>
                </a>
              </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="../Home/Home.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../Introduce/Introduce.php">Giới thiệu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="../Products">Sản phẩm</a>
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
    </div>
    <div class="container-fluid m-0 p-0 slide">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner h-100">
          <div class="carousel-item active">
            <img class="d-block w-100 " src="../image/slide-intro-1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 " src="../image/carousel1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 " src="../image/carousel2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <h2 class="text-center text-uppercase font-weight-bold pt-5 pb-2">Giới thiệu Dell</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6 my-auto d-md-none">
          <img class="image-size show-on-scroll inline-photo main-photo" src="../image/intro-1.jpg" alt=" Laptop-Dell">
        </div>
        <div class="col-md-6 text-justify my-auto">
          <p class="text-inline">
          Dell là thương hiệu của công ty Dell Inc. Đây là thương hiệu của Hoa Kỳ được thành lập vào năm 1984. 
          Hiện tay, công ty đa quốc gia này có trụ sở đặt tại Round Rock, Texas do ông Michael Dell sáng lập.
          </p>
          <p class="text-inline pt-2">Laptop Dell được đánh giá là một trong những thương hiệu laptop xài bền và có nhiều ưu điểm thích hợp với nhiều nhu cầu sử dụng.</p>
    
          <p class="text-inline pt-2 show-on-scroll">Laptop Dell có các dòng sản phẩm chính như: Dell Inspiron, Dell Vostro, Dell Alienware, Dell XPS, 
            Dell Precision, Dell ChromeBook, Dell Latitude, Dell Gaming series </p>            
          <p class="text-inline pt-2">Mỗi dòng sản phẩm đều có các series và cấu hình khác nhau để phù hợp với từng nhu cầu mỗi người </p>
        </div>
        <div class="col-md-6 my-auto d-none d-md-block">
          <img class="image-size show-on-scroll inline-photo main-photo" src="../image/intro-1.jpg" alt=" Laptop-Dell">
        </div>
      </div>
    </div>
    <h2 class="text-center text-uppercase font-weight-bold pt-5 pb-2">Các dòng sản phẩm chính của Dell</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6 my-auto">
          <img class="image-size show-on-scroll inline-photo" src="../image/mer1.jpg" alt=" Laptop-Dell">
        </div>
        <div class="col-md-6 my-auto text-inline">
          <h3 class="font-weight-bold pb-3">Dòng Dell Inspiron</h3>
          <p> Dell Inspiron là dòng laptop phổ biến nhất với giá thành tầm trung nên được rất nhiều sinh viên lựa chọn sử dụng. 
            Ở phân khúc này Dell Inspiron có cấu hình khá chất với giá khá bình dân, gần như là hoàn thiện đầy đủ các chức năng tiện ích.
            <br>
            <strong>Các sản phẩm nổi tiếng của dòng này</strong></p>
            <ul>
              <li>DELL Inspiron 3000</li>
              <li>DELL Inspiron 5000</li>
              <li>DELL Inspiron 7000</li>
            </ul>            
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 my-auto d-md-none">
          <img class="image-size show-on-scroll inline-photo" src="../image/mer2.jpg" alt=" Laptop-Dell">
        </div>
        <div class="col-md-6 my-auto text-inline">
          <h3 class="font-weight-bold pb-3">Dòng Dell Latitude và Dell Vostro</h3>
          <p>Dòng Dell Latitude siêu mỏng, siêu đẹp, dành cho những doanh nhân. Khả năng đáp ứng tốt giá cả đa dạng ở nhiều mức khác nhau. 
            Máy có tính bảo mật cao, hoạt động mướt mờ, một số mẫu có hỗ trợ tính năng bảo mật vân tay. Dòng Vostro tương tự như Latitude nhưng
            đây là bản cấp thấp hơn.
            <br>
            <strong>Các sản phẩm nổi tiếng của dòng này</strong></p>
            <ul>
              <li>Dell Latitude 3520</li>
              <li>Dell Vostro 3000</li>
              <li>Dell Vostro 5000</li>
            </ul>            
        </div>
        <div class="col-md-6 my-auto d-none d-md-block">
          <img class="image-size show-on-scroll inline-photo" src="../image/mer2.jpg" alt=" Laptop-Dell">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 my-auto">
          <img class="image-size show-on-scroll inline-photo" src="../image/mer3.jpg" alt=" Laptop-Dell">
        </div>
        <div class="col-md-6 my-auto text-inline">
          <h3 class="font-weight-bold pb-3">Dòng Dell Alienware và Dell Gaming</h3>
          <p> Dell Alienware là những chiếc laptop dành cho những dân chơi game chuyên nghiệp, 
            đây là dòng máy tính xách tay chuyên chơi game lâu đời nhất trên thế giới.
            </p>
            <p>
            Dell Gaming series là dòng máy tính có thiết kế mạnh mẽ và độc đáo, các phiên bản của dòng Dell Gaming series phù hợp với cả môi trường văn phòng và chơi game. 
            Mặc dù mức giá không quá đắt nhưng những sản phẩm của dòng này vẫn đảm bảo chất lượng, thỏa mãn nhu cầu của khách hàng.
            <strong>Các phiên bản nổi bật trong dòng này</strong></p>
            <ul>
              <li>Dell G3</li>
              <li>Dell G5</li>
              <li>Dell G7</li>
            </ul>            
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 my-auto d-md-none">
          <img class="image-size show-on-scroll inline-photo" src="../image/mer4.jpg" alt=" Laptop-Dell">
        </div>
        <div class="col-md-6 my-auto text-inline">
          <h3 class="font-weight-bold pb-3">Dòng Dell XPS</h3>
          <p>Thuộc dòng Ultrabook cao cấp cạnh tranh đối thủ với Macbook Pro của Apple, 
            với thiết kế siêu mỏng siêu đẹp và siêu nhẹ, màn hình độ phân giải cao, được trang bị với đa phương tiện chức năng tốt nhất.
            <br>
            <strong>Các phiên bản nổi bật trong dòng này</strong></p>
            <ul>
              <li>Dell XPS 12.</li>
              <li>Dell XPS 13</li>
              <li>Dell XPS 15</li>
            </ul>            
        </div>
        <div class="col-md-6 my-auto d-none d-md-block">
          <img class="image-size show-on-scroll inline-photo" src="../image/mer4.jpg" alt=" Laptop-Dell">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 my-auto">
          <img class="image-size show-on-scroll inline-photo" src="../image/mer5.jpg" alt=" Laptop-Dell">
        </div>
        <div class="col-md-6 my-auto text-inline">
          <h3 class="font-weight-bold pb-3">Dòng Dell Precision</h3>
          <p>Đây là dòng dành riêng cho dân thiết kế đồ họa chuyên nghiệp, sở hữu bởi vi xử lý Xeon của Intel , card đồ họa Nvidia Quadro. 
            Dòng này dành cho dân thiết kế độ họa, IT, design, kỹ sư cơ khí, xây dựng,…
            <strong>Các phiên bản nổi bật dòng này:</strong></p>
            <ul>
              <li>Laptop Workstation Dell Precision 7720</li>
              <li>Dell Precision 7530</li>
              <li>Dell Precision M7720</li>
            </ul>            
        </div>
      </div>
    </div>
    <div class="page-wrapper">
      <div id="waterdrop"></div>
      <footer>
        <div class="footer-top">
          <div class="container">
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
                      <p>Mua laptop mới</p>
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

   
    
    
<script src="show-on-scroll.js"></script>
<script src="https://use.fontawesome.com/648b985d60.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>
<script> jQuery('#waterdrop').raindrops({color:'#1c1f2f', canvasHeight:150, density: 0.1, frequency: 20});
</script>
</body>
</html>
