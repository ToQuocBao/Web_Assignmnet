<?php
session_start();
$_SESSION['pid'] = "1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Price</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="//localhost/web_as//image/logo.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
  <link rel="stylesheet" href="//localhost/web_as//font-awesome/css/font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="../Price.css">
</head>
<body>
  <img id="fixed-background" src="./dell_inspiron_5502_background.jpg" alt="fixed-image">
	<div id="nav" class="sticky-nav">
	<nav class="navbar navbar-expand-lg ">
		  <div class="container">
			<a class="navbar-brand" href="//localhost/web_as/Home/Home.php">
			  Dell
			</a>
			<div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-bars"></i>
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" aria-current="page" href="//localhost/web_as/Home/Home.php">Trang chủ</a>
				<a class="dropdown-item" aria-current="page" href="//localhost/web_as/Introduce/Introduce.php">Giới thiệu</a>
				<a class="dropdown-item" aria-current="page" href="//localhost/web_as/Products">Sản phẩm</a>
				<a href="//localhost/web_as//Contact/Contacts.php" class="dropdown-item" aria-current="page">Liên hệ</a>
				<a class="dropdown-item" href="//localhost/web_as/account/index.php" class="nav-link" aria-current="page">
                  <?php if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) echo "Trang cá nhân";
                        else echo "Đăng nhập"; ?>
                </a>
			  </div>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
				<li class="nav-item">
				  <a class="nav-link" aria-current="page" href="//localhost/web_as/Home/Home.php">Trang chủ</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" aria-current="page" href="//localhost/web_as/Introduce/Introduce.php">Giới thiệu</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" aria-current="page" href="//localhost/web_as/Products">Sản phẩm</a>
				</li>
				<li class="nav-item">
				  <a href="//localhost/web_as/Contact/Contacts.php" class="nav-link" aria-current="page">Liên hệ</a>
				</li>
			  </ul>
			</div>
			<a href="//localhost/web_as//account/index.php" class="nav-link" aria-current="page">
                  <?php if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) echo "Trang cá nhân";
                        else echo "Đăng nhập"; ?>
                </a>
			<div class="logo"><img class="logo" src="//localhost/web_as/image/logo.png" alt=""></div>
		  </div>
		</nav>
	  </div>
   
<!--Price-->
<div class="price">
<div class="dropdown-2">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  <i class="fa fa-bars"></i>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" aria-current="page" href="//localhost/web_as/Home/Home.php">Trang chủ</a>
			<a class="dropdown-item" aria-current="page" href="../DellAlienwareM15R6">Dell Alienware M15 R6</a>
			<a class="dropdown-item" aria-current="page" href="../DellInspiron3501">Dell Inspiron 3501</a>
			<a class="dropdown-item" aria-current="page" href="../DellInspiron5502">Dell Inspiron 5502</a>
			<a class="dropdown-item" aria-current="page" href="../DellVostro3400">Dell Vostro 3400</a>
			<a class="dropdown-item" aria-current="page" href="../DellXPS139300">C Dell XPS 13 9300</a>
		</div>
	  </div>
	<div id="menu">
		<ul>
			<li>
				<a href="#">Alienware</a>
				<ul class="sub-menu">
					<li><a href="../DellAlienwareM15R6">AlienwareM15R6</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Inspiron</a>
				<ul class="sub-menu">
					<li><a href="../DellInspiron3501">Dell Inspiron 3501</a></li>
					<li><a href="../DellInspiron5502">Dell Inspiron 5502</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Vostro</a>
				<ul class="sub-menu">
					<li><a href="../DellVostro3400">Dell Vostro 3400</a></li>
  				</ul>
			</li>
			<li>
				<a href="#">XPS</a>
				<ul class="sub-menu">
					<li><a href="../DellXPS139300">Dell XPS 13 9300</a></li>
				</ul>
			</li>

		</ul>
	</div>

	<div class="vd">
		<div class="content">
			<div class="cover">
				<h2><strong>Tổng quan về laptop <span>Dell Inspiron 5502</span></strong></h2>
				<p>uối năm 2020, Thương hiệu laptop Dell đã chính thức cho ra mắt dòng laptop dell inspiron 5502 1xgr11 dành cho giới văn phòng, doanh nhanh khiến nhiều tín đồ công nghệ phải đứng ngồi không yên.</p>
			</div>
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
			  </ol>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="./dell_inspiron_5502_1.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>Dell Inspiron 5502</h5>
					<p></p>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_inspiron_5502_2.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>HIỆU NĂNG ĐẦY MẠNH MẼ VỚI CPU INTEL GEN 11TH</h5>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_inspiron_5502_3.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>THIẾT KẾ HƯỚNG ĐẾN SỰ SANG TRỌNG, TINH TẾ, GỌN NHẸ</h5>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_inspiron_5502_4.jpg" class="d-block w-100" alt="...">

				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>MÀN HÌNH (LCD) MANG ĐẾN HÌNH ẢNH SẮC NÉT, SỐNG ĐỘNG</h5>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_inspiron_5502_5.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>BÀN PHÍM CÓ ĐỘ DỐC DỄ DÀNG THAO TÁC ĐÁNH MÁY</h5>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_inspiron_5502_6.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>CHUẨN WIFI, BLUETOOTH CÓ TỐC ĐỘ KẾT NỐI CAO, AUDIO VÀ LOA MANG ĐẾN TRẢI NGHIỆM ÂM THANH CỰC CHẤT</h5>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_inspiron_5502_7.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>THỜI LƯỢNG PIN KHÁ ỔN VÀ TRỌNG LƯỢNG MÁY KHÁ NHẸ</h5>
					</div>
				  </div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			<div class="os">
				<h2><strong>ƯU ĐIỂM</strong></h2>
				<ul>
					<li>Có 2 slot RAM và ổ cứng để người dùng nâng cấp nếu muốn.</li>
					<li>Trang bị CPU gen 11 mới nhất, tăng sức mạnh cho máy.</li>
					<li>Xử lý những tác vụ cơ bản với tốc độ nhanh chóng, chạy mượt mà nhiều ứng dụng văn phòng.</li>
					<li>Thiết kế sang trọng, đẳng cấp.</li>
					<li>Nhỏ gọn, phù hợp với người thường xuyên di chuyển chỗ làm việc.</li>
					<li>Tốc độ sạc pin rất nhanh.</li>
				</ul>
			</div>
			<div class="cost">
				<h2>Giá bán</h2>
				<div class="grid">
					<figure class="effect-ming">
						<img src="./dell_inspiron_5502_cost.jpg"/>
						<figcaption>
							<h2><strong>22.999.000 đ</strong></h2>
							<p>Giảm ngay <strong>20%</strong> giá tiền<br>
							Kèm theo bảo hiểm và phụ kiện trang bị</p>
							
						</figcaption>			
					</figure>
					<figure class="effect-ming">
						<img src="./dell_inspiron_5502_cost2.jpg"/>
						<figcaption>
							<h2><strong>Hỗ trợ cho vay</strong></h2>
							<p>Ngân hàng hỗ trợ vay đến <strong>80%</strong><br>Thời gian cho vay lên đến <strong>5 năm</strong></p>
							
						</figcaption>			
					</figure>
				</div>	
			</div>	
		</div>	
	</div>
	<div class="vd">
		<div class="content">
			<h2 class="text-success font-weight-bold text-uppercase">Bình luận</h2>
			<div class="comment">

			</div>
			<form action="../account/comment.php" method="post">
			<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Viết bình luận..." aria-label="Recipient's username" aria-describedby="button-addon2">
			<input class="btn btn-success" type="submit" name="subcomment" value="Gửi">
			</div>
			</form>
		</div>
	</div>
</div>






<!--Footer-->

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


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  
</body>
</html>
