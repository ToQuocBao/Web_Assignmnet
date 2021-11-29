<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <title>Mercedes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../image/logo.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">  
  <link rel="stylesheet" type="text/css" href="./Home.css">
</head>
<body>

  <img id="fixed-background" src="../image/fixed-background.jpg" alt="fixed-image">
  <div class=header-background>
    <div id="nav" class="sticky-nav">
      <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class="navbar-brand" href="../Home/Home.php">
            Mercedes
          </a>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bars"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" aria-current="page" href="../Home/Home.php">Trang chủ</a>
              <a class="dropdown-item" aria-current="page" href="../Introduce/Introduce.php">Giới thiệu</a>
              <a class="dropdown-item" aria-current="page" href="../Products">Sản phẩm</a>
              <a href="../Contact/Contacts.php" class="dropdown-item" aria-current="page">Liên hệ</a>
              <?php if(isset($_SESSION['is_login'])):?>
                <a class="dropdown-item" aria-current="page" href="../account/index.php">Trang cá nhân</a>
              <?php endif ?>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../Home/Home.php">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../Introduce/Introduce.php">Giới thiệu</a>
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
    <section class="showcase">
      <div class="showcase-container w3-container w3-center">
        <h1 class="w3-text-shadow w3-animate-opacity">Thế giới DELL</h1>
        <hr>
        <p class="w3-animate-opacity">Khoảng 95% máy tính xách tay Dell được sản xuất tại các quốc gia châu Á là Penang, Malaysia và Hạ Môn, Trung Quốc. Ngoài ra để đáp ứng nhu cầu của tiểu lục địa và Nam Mỹ, Dell đã đầu tư vào Chennai, Ấn Độ lẫn Hortolandia, Brazil. Dell luôn luôn nghĩ tới nhu cầu, trải nghiệm người dùng và họ luôn mang tới cho người dùng những chiếc laptop dễ dàng sử dụng và đầy cảm hứng. Dell mang lại trải nghiệm tối ưu với màn hình độ phân giải cao nhất và chất lượng xây dựng vượt trội, vật liệu chế tạo laptop độc đáo và các tính năng mạnh mẽ. Đây là dòng laptop cao cấp được trang bị màn hình độ nét rất cao, với các phần cứng mạnh mẽ, cấu hình cao.</p>
        <button onclick="document.getElementById('start-modal').style.display='block'" class="w3-button w3-red w3-large w3-opacity">Khám phá</button>
      </div>
    </section>
  </div>
  
  <!-- Video -->
  <div class="video-container">
    <div class="video-text"> 
      <h2>DELL</h2>
      <p>Dell Inc. là một công ty đa quốc gia của Hoa Kỳ về phát triển và thương mại hóa công nghệ máy tính có trụ sở tại Round Rock, Texas, Hoa Kỳ. Dell được thành lập năm 1984 do chủ quản gia Michael Dell đồng sáng lập. Đây là công ty có thu nhập lớn thứ 28 tại Hoa Kỳ.</p> 
      <p>Với phương châm: phương thức bán hàng cũng góp phần quan trọng vào thành công của hãng như là sản phẩm mà hãng bán ra, Dell đã dành khá nhiều công sức vào việc đào tạo các nhân viên phục vụ khách hàng của mình bằng việc bắt buộc tất cả các nhân viên phải qua một khóa huấn luyện 6 tuần để trả lời các câu hỏi của khách, giải quyết các khiếu nại, nhận đơn đặt hàng và giúp đỡ các khách hàng lựa chọn sản phẩm theo đúng yêu cầu trước khi đưa họ ra bán hàng.</p>
      <p>Các dòng DELL phổ biển:</p>
    <ul>
      <li>Dòng Dell Inspiron</li>
      <li>Dòng Dell Vostro</li>
      <li>Dòng XPS</li>
      <li>Dòng Dell Alienware</li>
      <li>Dòng Dell Precision</li>
      <li>Dòng Dell Latitude</li>
    </ul>
    </div>
      <video autoplay muted loop class="myVideo">
      <source src="../video1.mp4" type="video/mp4">
       </video>
  </div>

  <div class="container-2">
    <h2>TẠI SAO NÊN CHỌN MUA LAPTOP DELL?</h2>
  <div class="column-layout">
    <div class="column--1">
      <h4>Laptop dell sang trọng và tinh tế</h4>
      <p>Dell mang đến cho chúng ta những sản phẩm có chất lượng tốt với lối thiết kế bền bỉ, mạnh mẽ cùng cấu hình tốt và hiệu suất ổn định. Không chỉ ở Việt Nam mà ngay tại thị trường Mỹ hay các nước châu Âu vẫn luôn trung thành khi chọn mua laptop Dell bởi nó là sản phẩm phù hợp với dân văn phòng bởi có Pin khỏe, chịu va đập tốt và hơn hết là giá thành lại rất phải chăng. Người ta vẫn hay dùng từ “ nồi đồng cối đá” mỗi khi nói về Dell và điều này hoàn toàn không hề sai khi khách hàng Việt có nhiều năm trải nghiệm dòng sản phẩm này.</p>
        <p> Cùng với đó, chế độ bảo hành của hãng cũng tạo được ấn tượng mạnh mẽ khi luôn đáp ứng được yêu cầu của khách hàng một cách nhanh chóng nhất.</p>
    </div>
    <div class="column--1">
      <h4>Laptop Dell thường có bộ xử lý tốt, tốc độ nhanh</h4>
      <P>Các dòng laptop được sản xuất theo nhu cầu từ phía khách hàng, các dòng máy dành cho doanh nhân, sinh viên, hay phổ thông đều có những đặc điểm đánh mạnh vào mục đích sử dụng của các đối tượng này.</P> 
      <p>Khi mua laptop Dell là khi người ta còn tin tưởng vào thời lượng Pin bền, bởi những sản phẩm mới sẽ cho thời gian sử dụng tối thiểu 5h liên tục.</P>
    </div>
  </div>
  <div class="column-layout">
    <div class="column--1">
      <h4> Độ bền cao</h4>
      <p>Khi nhắc đến việc mua laptop Dell điều người ta nghĩ đến đầu tiên đó chính là độ bền. Nếu quý vị yêu cầu một chiếc máy tính xách tay thường xuyên phải theo mình di chuyển, chịu được điều kiện tự nhiên khắc nghiệt hay va đập mạnh thì đừng chọn ai khác ngoài Dell.</div>
    <div class="column--1">
      <h4>Giá thành hấp dẫn so với hiệu năng</h4>
      <P>Với hiệu năng sử dụng ở các sản phẩm cùng tầm mang thương hiệu khác thì Dell vẫn có giá tốt hơn rất nhiều. Chính vì thế ta thường thấy Dell được các bạn sinh viên sử dụng khá nhiều bởi thương hiệu này đáp ứng đầy đủ những yêu cầu của đối tượng khách hàng này.</P>
    </div>
  </div>
</div>

  <div class="video-container">
      <video autoplay muted loop class="myVideo">
      <source src="../video2.mp4" type="video/mp4">
       </video>
    <div class="video-text"> 
      <h2>First Move The World
      </h2>
<p>Ngành công nghệ máy tính đã và đang là một ngành công nghiệp có sự cạnh tranh gắt gao nhất trên thế giới. Hiện nay, các ông lớn có được thị phần lớn có thể kể đến như Apple, HP, Asus, Sony Vaio, DELL. Trong số đó thì DELL là một hãng máy tính có lịch sử hình thành và phát triển lâu đời, DELL là doanh nghiệp có thu nhập xếp từ 28 tại Mỹ. Với số vốn ban đầu chỉ khoảng 1000 đô la mỹ, những gì DELL đã đạt được là điều không tưởng với mọi người.</p>    
<p>Mục tiêu lớn của Dell vào năm 2030 là một dự án đầy tham vọng, cam kết tiếp tục sử dụng các nguyên liệu tái chế và tái tạo trong việc sản xuất các dòng sản phẩm. Dell mở rộng việc ứng dụng nhựa sinh học trong việc sản xuất hai sản phẩm Latitude 5421 và 5521 mới. Được làm từ cao dầu (tall oil), những vật liệu tái tạo này được dùng để sản xuất mặt lưng màn hình (chiếm 21% trọng lượng). Dell cũng đang tìm kiếm các giải pháp để sử dụng nhiều hơn các loại vật liệu tái chế trong sản xuất.</p>
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
<script src="/index.js"></script>

</body>
</html>
