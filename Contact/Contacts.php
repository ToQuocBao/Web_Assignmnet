<!DOCTYPE html>
<html lang="vi">
  <head>
        <title>CONTACTS US</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../image/logo.png" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" type="text/css" href="Contacts.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
    </head>
    <?php
      //include 'connection.php';
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "mercedes";
      $check = $_SESSION["is_login"] = false;

        // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      $sql = "SELECT PhoneNum, Address, Email, Facebook, Twitter, Reddit, Youtube, Instagram, Telegram FROM contact";
      mysqli_set_charset($conn, "utf8");
      $result = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_assoc($result)) {
        $Address = array(); array_push($Address, $row['Address']);
        $PhoneNum = array(); array_push($PhoneNum, $row['PhoneNum']);
        $Email = array(); array_push($Email, $row['Email']);
        $Facebook = array(); array_push($Facebook, $row['Facebook']);
        $Twitter = array(); array_push($Twitter, $row['Twitter']);
        $Reddit = array(); array_push($Reddit, $row['Reddit']);
        $Youtube = array(); array_push($Youtube, $row['Youtube']);
        $Instagram = array(); array_push($Instagram, $row['Instagram']);
        $Telegram = array(); array_push($Telegram, $row['Telegram']);
        
      }
    ?>
    <body>
        <!-- Header -->
        <div class="header-background">
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
                    <a class="dropdown-item" aria-current="page" href="../Home/Home.php">Trang ch???</a>
                    <a class="dropdown-item" aria-current="page" href="../Introduce/Introduce.php">Gi???i thi???u</a>
                    <a class="dropdown-item" aria-current="page" href="../Products">S???n ph???m</a>
                    <a href="../Contact/Contacts.php" class="dropdown-item" aria-current="page">Li??n h???</a>
      
                  </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="../Home/Home.php">Trang ch???</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="../Introduce/Introduce.php">Gi???i thi???u</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="../Products">S???n ph???m</a>
                    </li>
                    <li class="nav-item">
                      <a href="../Contact/Contacts.php" class="nav-link active" aria-current="page">Li??n h???</a>
                    </li>
                  </ul>
                </div>
                <!--<div class="logo"><img class="logo" src="../image/logo.png" alt=""></div>-->
              </div>
            </nav>
          </div>
          </div>
          <!--  -->

        <section class="contact">
            <div class="content">
                <h2>Li??n H???</h2>
                <p>Vi???c k???t n???i v???i kh??ch h??ng l?? ??u ti??n h??ng ?????u c???a c??ng ty. V?? v???y n???u c?? b???t c??? y??u c???u n??o c???n gi???i ????p, b???n vui l??ng li??n h??? v???i ch??ng t??i qua th??ng tin b??n d?????i ho???c ??i???n ?????y ????? th??ng tin v??o m???u g???i ?????n ch??ng t??i. Ch??ng t??i s??? ph???n h???i t???i qu?? kh??ch h??ng trong th???i gian s???m nh???t.</p>
            </div>
            <div class="container-body">
                <div class="contactInfo">
                    <div class="container-info">
                        <div class="box">
                            <div class="imgBx">
                                <img src="../Contact/map.png" alt="map">
                            </div>
                            <div class="content-info">
                                <div class="icon">
                                    <img src="../Contact/map.png" alt="map">
                                </div>
                                <h3>?????a Ch???</h3>
                                <p>
                                  <?php
                                    for ($i = 0; $i < sizeof($Address); $i++){
                                      echo $Address[$i]."<br>";
                                    }
                                  ?>
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../Contact/phone.png" alt="phone">
                            </div>
                            <div class="content-info">
                                <div class="icon">
                                    <img src="../Contact/phone.png" alt="phone">
                                </div>
                                <h3>S??? ??i???n Tho???i</h3>
                                <p>
                                  <?php
                                    for ($i = 0; $i < sizeof($PhoneNum); $i++){
                                      echo $PhoneNum[$i]."<br>";
                                    }
                                  ?>
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../Contact/email.png" alt="email">
                            </div>
                            <div class="content-info">
                                <div class="icon">
                                    <img src="../Contact/email.png" alt="email">
                                </div>
                                <h3>Email</h3>
                                <p>
                                  <?php
                                    for ($i = 0; $i < sizeof($Email); $i++){
                                      echo $Email[$i]."<br>";
                                    }
                                  ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contactConnect">
                        <ul>
                            <li><a href="<?php for ($i = 0; $i < sizeof($Facebook); $i++) echo $Facebook[$i]; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                            <li><a href="<?php for ($i = 0; $i < sizeof($Twitter); $i++) echo $Twitter[$i]; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php for ($i = 0; $i < sizeof($Instagram); $i++) echo $Instagram[$i]; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="<?php for ($i = 0; $i < sizeof($Reddit); $i++) echo $Reddit[$i]; ?>"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
                            <li><a href="<?php for ($i = 0; $i < sizeof($Telegram); $i++) echo $Telegram[$i]; ?>"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                            <li><a href="<?php for ($i = 0; $i < sizeof($Youtube); $i++) echo $Youtube[$i]; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href=""><p class="text">Follow</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="" method="post">
                        <h2>G???i Tin Nh???n</h2>
                        <div class="inputBox">
                            <input type="text" required="required" name="contactForm-name"/>
                            <span>H??? v?? T??n</span>
                        </div>
                        <div class="inputBox">
                            <input type="number" required="required" name="contactForm-phone"/>
                            <span>S??? ??i???n Tho???i</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" required="required" name="contactForm-email"/>
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required" name="contactForm-message"></textarea>
                            <span>Tin nh???n mu???n g???i...</span>
                        </div>
                        <div class="effect-submit" name="submit" id="effect-submit">
                            <a href="">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <input type="submit" name="submit" value="Send"/>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div id="map" style="width:100%;height:auto;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.01154668255!2d105.7907693148617!3d21.03222398599649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4890e95677%3A0xbfd1271529a4efda!2zNjggUC4gROG7i2NoIFbhu41uZywgROG7i2NoIFbhu41uZywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1618752462439!5m2!1svi!2s" 
                 style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
        <?php
          if (isset($_POST['submit'])){
            $name = $_POST['contactForm-name'];
            $phone = $_POST['contactForm-phone'];
            $email = $_POST['contactForm-email'];
            $message = $_POST['contactForm-message'];

            //mail("tung.lelqtungntn@hcmut.edu.vn", "This is my Subject", $name."\n".$phone."\n".$email."\n".$message))
            echo "<script>alert('Ca??m ??n ".$name." ??a?? g????i tin nh????n chu??ng t??i se?? pha??n h????i la??i trong th????i gian s????m nh????t');</script>";
          }
        ?>
          <!-- footer -->


        <div class="page-wrapper">
            <div id="waterdrop"></div>
            <footer>
              <div class="footer-top">
                <div class="container">
                    <div class="customer-column">
                      <div class="widget footer_widget">
                        <h5 class="footer-title">Kh??ch h??ng</h5>
                        <p>C??u h???i th?????ng g???p</p>
                        <p>H??? tr??? kh??ch h??ng</p>
                        <p>H??? tr??? b???o tr??</p>
                        <p>H?????ng d???n s??? d???ng</p>
                        <p>L???ch d???ch v???</p>
                        <p>H?????ng d???n thanh to??n</p>
                      </div>
                    </div>
                        <div class="service-column">
                          <div class="widget footer_widget">
                            <h5 class="footer-title">D???ch v???</h5>
                            <p>B???o h??nh</p>
                            <p>Thay th??? thi???t b???</p>
                            <p>S???a ch???a</p>
                            <p>Mua linh ki???n ph??? t??ng</p>
                            <p>B??o gi?? s???n ph???m</p>
                            <p>Mua xe m???i</p>
                          </div>
                        </div>
                        <div class="about-us-column">
                           <div class="widget widget_gallery gallery-grid-4">
                        <h5 class="footer-title">V??? ch??ng t??i</h5>
                        <p>Gi???i thi???u</p>
                        <p>Ch??nh s??ch ?????i l??</p>
                        <p>Th??ng b??o</p>
                        <p>Khuy???n m??i</p>
                        <p>T??i li???u</p>
                        <p>Blog</p>
                      </div>
                        </div>
                    <div class="contact-column">
                      <!-- <div class="widget widget_gallery gallery-grid-4">
                        <h5 class="footer-title">Dunno</h5>
                      </div> -->
                      <div class="widget">
                        <h5 class="footer-title">Ph???n h???i</h5>
                        <div class="textwidget">
                          <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
          
                            <form method="post" class="wpcf7-form" novalidate="novalidate">
          
                              <div class="contact-form-footer">
                                <p><span class="wpcf7-form-control-wrap your-first-name"><input type="text" name="your-first-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Ho?? va?? t??n"></span></p>
                                <p><span class="wpcf7-form-control-wrap your-email_1"><input type="email" name="your-email_1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="S???? ??i????n thoa??i"></span></p>
                                <p><span class="wpcf7-form-control-wrap your-email_1"><input type="email" name="your-email_1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Email"></span></p>
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
                          <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26"><a href="#">B???n quy???n n???i dung</a></li>
                          <li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a href="#">C??i ?????t</a></li>
                          <li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="#">Quy???n ri??ng t?? v?? b???o v??? d??? li???u</a></li>
                          <li id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29"><a href="#">Th??ng tin ph??p l??</a></li>
                        </ul>
                      </nav>
          
                      <div id="footer-socials">
                        <div class="socials inline-inside socials-colored">
          
                          <a href="<?php for ($i = 0; $i < sizeof($Facebook); $i++) echo $Facebook[$i]; ?>" target="_blank" title="Facebook" class="socials-item facebook">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                          </a>
                          <a href="<?php for ($i = 0; $i < sizeof($Twitter); $i++) echo $Twitter[$i]; ?>" target="_blank" title="Twitter" class="socials-item twitter">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                          </a>
                          <a href="<?php for ($i = 0; $i < sizeof($Instagram); $i++) echo $Instagram[$i]; ?>" target="_blank" title="Instagram" class="socials-item instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                          <a href="<?php for ($i = 0; $i < sizeof($Reddit); $i++) echo $Reddit[$i]; ?>" target="_blank" title="Reddit" class="socials-item reddit">
                            <i class="fa fa-reddit-alien" aria-hidden="true"></i>
                          </a>
                          <a href="<?php for ($i = 0; $i < sizeof($Telegram); $i++) echo $Telegram[$i]; ?>" target="_blank" title="Telegram" class="socials-item telegram">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                          </a>
                          <a href="<?php for ($i = 0; $i < sizeof($Youtube); $i++) echo $Youtube[$i]; ?>" target="_blank" title="YouTube" class="socials-item youtube">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
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
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("nav").style.top = "0";
      } else {
        document.getElementById("nav").style.top = "-1000px";
      }
      prevScrollpos = currentScrollPos;
    }
    </script>
    </body>
</html>