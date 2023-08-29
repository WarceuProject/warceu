<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8754301712402323"
     crossorigin="anonymous"></script>
   
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LYD985VT6J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LYD985VT6J');
</script>

  <title>Warceu Project Dev</title>
              
  <meta content="Warceu Project Dev is a community and platform for the world of programming, coding, webdev, cyber security. Which allows you to develop your skills and contribute with us easily." name="description">
  <meta content="Dev Comunnity, WArceu Project, Programming Hub, Conging, Cyber Scurity" name="keywords">
  <meta name="theme-color" content="#172225">

  <!-- Favicons -->
  <link href="https://telegra.ph/file/e0283884ed3b286ca81fb.png" rel="icon">
  <link href="https://telegra.ph/file/e0283884ed3b286ca81fb.png" rel="apple-touch-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://warceuproject.dev/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://warceuproject.dev/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://warceuproject.dev/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://warceuproject.dev/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://warceuproject.dev/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://warceuproject.dev/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="https://warceuproject.dev/assets/css/style.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="typewriter">Welcome to <span style="color: red">Warceu Project</span></h1>
  
      <h2>We are a team of developers in the digital world</h2>
      <a href="#blog" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">


    <!-- ======= Services Section ======= -->
    <section id="blog">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title" style="color: white;">Privacy policy</h3>
          <p class="section-description">Warceu Project Dev</p>
          </div>
          <div class="main">
              
              <div class="imgprops" style="height:auto;">

<?php 
$pagetype='Privacypolicy';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>
  
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Privacy policy</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
     
<!-- Sidebar Widgets Column -->
<?php include('includes/sidebar.php');?>
    </div>
    <!-- /.container -->


 </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title" style="color: white;">Team</h3>
          <p class="section-description">Lintx once said in his project "As a good entertainer it is not justified for you to have more feelings that if you are presumptuous and involve matters of the heart it is also not permissible for you to act unnaturally on her even if it is only longing or just staring at her for a long time"</p>
          <!-- <p>As hard as you try, if you're not what she wants, it's the same as lying</p> -->
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="https://avatars.githubusercontent.com/u/83586926?v=4" alt=""></div>
              <h4 style="color: white;">Kirasinigami Dev</h4>
              <span><font color="red">Founder & CEO</font></span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href="https://facebook.com/kirasinigami.dev"><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href="https://github.com/kirasinigami"><i class="fa fa-github"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="pic"><img src="https://telegra.ph/file/29c065b3b0a234b68fc0e.jpg" alt=""></div>
              <h4 style="color: white;">Lintx </h4>
              <span>BackEnd Developer</span>
              <div class="social">
                <a href="https://github.com/lintanxai" ><i class="fa fa-github"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="https://avatars.githubusercontent.com/u/84020442?v=4" alt=""></div>
              <h4 style="color: white;">Azarela-Vnk</h4>
              <span>Contributor</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href="https://github.com/Azarela-Vnk"><i class="fa fa-github"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="pic"><img src="https://f.top4top.io/p_2717wakz11.jpg" alt=""></div>
              <h4 style="color: white;">Amigamer404</h4>
              <span><font color="">Partner & Contributor</font></span>
              <div class="social">
                <a href="https://twitter.com/amigamer404"><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/amigamer404"><i class="fa fa-instagram"></i></a>
                <a href="https://github.com/Amigamer404"><i class="fa fa-github"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="pic"><img src="https://avatars.githubusercontent.com/u/61402857?v=4" alt=""></div>
              <h4 style="color: white">Fikriiarahmann</h4>
              <span><font color="">FrontEnd Developer</font></span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href="https://github.com/fikriiarahmann "><i class="fa fa-github"></i></a>
					<a href="https://www.linkedin.com/in/fikri-aulia-rahman-a79b60155"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title" style="color: white;">Contact</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      
      <div class="container mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-geo-alt"></i>
                <p>West Java<br>ID</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="84e7e1eaf0e1f6c4f3e5f6e7e1f1f4f6ebeee1e7f0aae0e1f2">[email&#160;protected]</a></p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+62 8575 966 9252</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://facebook.com/warceuproject" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.youtube.com/channel/UCMqbxEdl8L9Wpj_-Stzo1CQ" class="youtube"><i class="fa fa-youtube"></i></a>
              <a href="https://github.com/WarceuProject" class="github"><i class="fa fa-github"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="https://warceuproject.dev/forms/contact.php" method="post" role="form" class="php-email-form" onsubmit="return false;">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button style="width: 100%" name="submit" type="submit">Send</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('includes/footer.php');?>
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://warceuproject.dev/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://warceuproject.dev/assets/vendor/aos/aos.js"></script>
  <script src="https://warceuproject.dev/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://warceuproject.dev/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://warceuproject.dev/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://warceuproject.dev/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://warceuproject.dev/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://warceuproject.dev/assets/js/main.js"></script>
  <!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 15597273;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/15597273/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->


</body>

</html>