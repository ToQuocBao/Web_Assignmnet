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
  <link rel="shortcut icon" href="../image/logo.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="../Price.css">
</head>
<body>
  <img id="fixed-background" src="./dell_xps_139300_background.jpg" alt="fixed-image">
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
				<a class="dropdown-item" aria-current="page" href="../Product/Products.php">Sản phẩm</a>
				<a class="dropdown-item" aria-current="page" href="../Price/Pricea200.php">Bảng giá</a>
				<a href="../Contact/Contacts.php" class="dropdown-item" aria-current="page">Liên hệ</a>
				<a class="dropdown-item" href="../account/index.php" class="nav-link" aria-current="page">
                  <?php if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) echo "Trang cá nhân";
                        else echo "Đăng nhập"; ?>
                </a>
			  </div>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
				<li class="nav-item">
				  <a class="nav-link" aria-current="page" href="../Home/Home.php">Trang chủ</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" aria-current="page" href="../Introduce/Introduce.php">Giới thiệu</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" aria-current="page" href="../Product/Products.php">Sản phẩm</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="../Price/Pricea200.php">Bảng giá</a>
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
   
<!--Price-->
<div class="price">
	<div class="dropdown-2">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  <i class="fa fa-bars"></i>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" aria-current="page" href="../Home/Home.php">Trang chủ</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricea200.php">A 200</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricea250.php">A 250</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricec200.php">C 200</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricec250.php">C 250</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricec300.php">C 300</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricee200.php">E 200</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricee250.php">E 250</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricee300.php">E 300</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Priceg65.php">G 65</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Priceglc200.php">GLC 200</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Priceglc300coupe.php">GLC coupe</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Priceglc300matic.php">GLC 4matic</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricegle400.php">GLE 400</a>
			<a class="dropdown-item" aria-current="page" href="../Price/Pricegle450.php">GLE 450</a>
		</div>
	  </div>
	<div id="menu">
		<ul>
			<li>
				<a href="#">A-CLASS</a>
				<ul class="sub-menu">
					<li><a href="../Price/Pricea200.php">A 200</a></li>
					<li><a href="../Price/Pricea250.php">A 250</a></li>
				</ul>
			</li>
			<li>
				<a href="#">C-CLASS</a>
				<ul class="sub-menu">
					<li><a href="../Price/Pricec200.php">C 200</a></li>
					<li><a href="../Price/Pricec250.php">C 250</a></li>
					<li><a href="../Price/Pricec300.php">C 300</a></li>
				</ul>
			</li>
			<li>
				<a href="#">E-CLASS</a>
				<ul class="sub-menu">
					<li><a href="../Price/Pricee200.php">E 200</a></li>
					<li><a href="../Price/Pricee250.php">E 250</a></li>
					<li><a href="../Price/Pricee300.php">E 300</a></li>
				</ul>
			</li>
			<li>
				<a href="#">G-CLASS</a>
				<ul class="sub-menu">
					<li><a href="../Price/Priceg65.php">G 65</a></li>
				</ul>
			</li>
			<li>
				<a href="#">GLC-CLASS</a>
				<ul class="sub-menu">
					<li><a href="../Price/Priceglc200.php">GLC 200</a></li>
					<li><a href="../Price/Priceglc300coupe.php">GLC coupe</a></li>
					<li><a href="../Price/Priceglc300matic.php">GLC 4matic</a></li>
				</ul>
			</li>
			<li>
				<a href="#">GLE-CLASS</a>
				<ul class="sub-menu">
					<li><a href="../Price/Pricegle400.php">GLE 400</a></li>
					<li><a href="../Price/Pricegle450.php">GLE 450</a></li>
					
				</ul>
			</li>
			<li>
				<a href="#">MAYBACH</a>
				<ul class="sub-menu">
					<li><a href="../Price/Pricemb450.php">MB 450</a></li>
					<li><a href="../Price/Pricemb450matic.php">MB 450 4matic</a></li>
					<li><a href="../Price/Pricemb560.php">MB 560 4matic</a></li>
				</ul>
			</li>
			<li>
				<a href="#">S-CLASS</a>
				<ul class="sub-menu">
					<li><a href="../Price/Prices450.php">S 450</a></li>
					<li><a href="../Price/Prices500cabriolet.php">S 500 cabriolet</a></li>
					<li><a href="../Price/Prices500coupe.php">S 500 coupe</a></li>
				</ul>
			</li>
			<li>
				<a href="#">V-CLASS</a>
				<ul class="sub-menu">
					<li><a href="../Price/Pricev250.php">V 250</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="vd">
		<div class="content">
			<div class="cover">
				<h2><strong>Tổng quan về laptop <span>Dell XPS 13 9300</span></strong></h2>
				<p>Nhắc đến Dell, mọi người luôn nhắc đến những chiếc laptop bền bỉ theo thời gian đến từ Mỹ. Năm 2020, Dell chính thức ra mắt thị trường Việt Nam dòng laptop 13 inch dành cho giới doanh nhân- Dell XPS 13 9300. Đây là dòng laptop văn phòng cao cấp, vừa thể hiện được đẳng cấp của người dùng thông qua thiết kế, vừa hỗ trợ thực hiện công việc nhanh chóng nhờ vào cấu hình "cực đỉnh" của nó. Có thể nhận định Dell XPS 13 là chiếc máy tính xách tay 13 inch mạnh mẽ nhất trong phân khúc. </p>
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
				  <img src="./dell_xps_139300_1.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>Dell XPS 13 9300</h5>
					<p></p>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_xps_139300_2.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>HIỆU NĂNG</h5>
					<p>Theo nhận định của hãng, Dell XPS 13 chính là mẫu laptop 13 inch mạnh mẽ nhất trong cùng phân khúc, sau khi xem qua cấu hình, chắc chắn chúng ta đều thấy nhận định của Dell là chính xác. Với bộ vi xử lý Intel Quad Core thế hệ thứ 10, máy có nhiều lõi hơn, đồng nghĩa với việc hiệu suất cũng tăng lên. Nếu bạn đang chạy nhiều ứng dụng cùng lúc thì Dell XPS vẫn chạy rất mượt mà.</p>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_xps_139300_3.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>THIẾT KẾ & NGOẠI HÌNH ĐƠN GIẢN MÀ CUỐN HÚT</h5>
					<p>Lấy cảm hứng từ những đường băng tuyết trắng tinh, Dell XPS 13 9300 mang đến một thiết kế tinh khôi, giản đơn mà thu hút. Kết hợp với sự nhỏ gọn của một chiếc laptop chỉ 13 inch, dòng máy này toát lên sự năng động, phóng khoáng lại thanh lịch. Vỏ máy cũng được phủ một lớp chống tia UV và vết bẩn để ngăn việc bị phai màu, ố vàng.</p>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_xps_139300_4.jpg" class="d-block w-100" alt="...">

				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>MÀN HÌNH (LCD)</h5>
					<p>Màn hình của Dell XPS sẽ mang lại cho bạn một cái nhìn vô song. Màn hình 13 inch nghe có vẻ nhỏ, nhưng tỉ lệ màn hình chiếm đến 80,7% trên thân máy. Màn hình có ít đường viền hơn nên lượng pixel cũng tăng lên, bạn có thể xem được những hình ảnh lớn, tuyệt đẹp, độ phân giải HD với 8 triệu điểm ảnh.</p>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_xps_139300_5.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>BÀN PHÍM, RÊ CHUỘT, KÊ TAY</h5>
					<p>Khi nói về bàn phím và touchpad, chúng ta thực sự sẽ có một trải nghiệm gõ phím đỉnh cao với Dell XPS 13. Bàn phím được thiết kế với khoảng cách vừa đủ để tăng độ chính xác khi gõ máy của người dùng. Đồng thời độ nảy cũng giúp tăng sự thoải mái, thích thú khi đánh máy. Mặc dù là máy tính 13 inch, nhưng bạn đừng lo về việc bàn phím của nó quá bé, những người tay lớn sẽ khó thao tác.</p>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_xps_139300_6.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>ÂM THANH</h5>
					<p>Âm thanh dường như không phải thế mạnh của Dell XPS 13. Tuy nhiên bạn vẫn sẽ được đảm bảo âm thanh trong các cuộc gọi, nghe nhạc, xem phim mà không bị bỏ lỡ một nhịp nào.</p>
					</div>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="./dell_xps_139300_7.jpg" class="d-block w-100" alt="...">
				  <div class="carousel-caption d-none d-md-block">
					<div class="test">
					<h5>PIN VÀ TRỌNG LƯỢNG</h5>
					<p>Người dùng hoàn toàn có thể làm việc, giải trí lâu hơn khi thời lượng pin của Dell XPS 13 9300 thực sự đáng kinh ngạc: hơn 19 tiếng trên mô hình full HD khi sử dụng word, excel; hơn 17 tiếng khi xem Netflix và hơn 11 tiếng khi dùng các ứng dụng nặng.</p>
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
					<li>Trang bị Intel® i5-1035G1 Gen 10th và RAM 8GB LPDDR4 3733MHz Memory Onboard hỗ trợ tăng sức mạnh cho máy.</li>
					<li>Xử lý mọi tác vụ nhanh chóng, không bị giật, lag khi bật nhiều ứng dụng cùng lúc.</li>
					<li>Thiết kế thanh lịch, năng động.</li>
					<li>Nhỏ gọn, tính di động cao, phù hợp với người thường xuyên di chuyển chỗ làm việc.</li>
					<li>Bàn phím thiết kế từng phím khoa học đem lại sự chính xác cao và thoải mái khi đánh máy.</li>
					<li>Thời lượng pin rất lớn.</li>
				</ul>
			</div>
			<div class="cost">
				<h2>Giá bán</h2>
				<div class="grid">
					<figure class="effect-ming">
						<img src="./dell_xps_139300_cost.jpg"/>
						<figcaption>
							<h2><strong>39.990.000 đ</strong></h2>
							<p>Giảm ngay <strong>20%</strong> giá tiền<br>
							Kèm theo bảo hiểm và phụ kiện trang bị</p>
							
						</figcaption>			
					</figure>
					<figure class="effect-ming">
						<img src="./dell_xps_139300_cost2.jpg"/>
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
