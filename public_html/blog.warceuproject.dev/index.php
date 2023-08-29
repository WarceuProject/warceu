<?php 
session_start();
include('includes/config.php');

    ?>

<!DOCTYPE html>
<html lang="en">



<body>
     <!-- Json/Applications 
  <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"WebSite",
      "url":"https://warceuproject.dev/",
      "potentialAction":{
        "@type":"SearchAction",
        "target":{
          "@type":"EntryPoint",
          "urlTemplate":"https://warceuproject.dev/search?q={search_term_string}"
        },
          "query-input":"required name=search_term_string"
        }
      }
  
  </script>
  <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"Article",
      "mainEntityOfPage":{
        "@type":"WebPage",
        "@id":"https://warceuproject.dev/"
      },
      "headline":"Warceu Project Dev",
      "description":"Warceu Project Dev is a community and platform for the world of programming, coding, webdev, cyber security. Which allows you to develop your skills and contribute with us easily.",
      "image":"https://telegra.ph/file/2b67d3ebb1454620e9d28.png",
      "author":{
        "@type":"Person",
        "name":"warceuproject",
        "url":"https://warceuproject.dev/"},
        "publisher":{"@type":"Organization",
        "name":"WarceuProject",
        "logo":{
          "@type":"ImageObject",
          "url":"https://telegra.ph/file/e0283884ed3b286ca81fb.png"
        }
      },
      "datePublished":"2002-08-06T22:12:14+00:00",
      "dateModified":"2023-06-06T01:50:05+00:00"
    }
  
  </script>
 end Applications/Json-->

<?php include('includes/header.php');?>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="typewriter">Welcome to <span style="color: red">Warceu Project</span></h1>
  
      <h2>We are a team of developers in the digital world</h2>
      <a href="#blog" class="btn-get-started">More</a>
    </div>
  </section><!-- End Hero Section -->

  
        
          <!-- ======= Services Section ======= -->
    <section id="blog">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title" style="color: white;">Blog</h3>
          <p class="section-description">Interesting article for you</p>
        </div>  <br><br><br>  <div class="row">
                 
                <div class="main">
              
                  <div class="imgprops" style="height:auto;">
                
      <!-- Blog Post -->
   <?php 
   
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
  <h6 style="border-top: 2px solid #aaa; color: grey;  font-family: Berlin Sans FB;">
  <svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

<span style="float:right" ><i>Category : </i> <a style="color:#113277" href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </span>
</h6>         
<div  class=" postimgtop-con">
 <img class="postimgtop" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">

            <div class="card-body" >
            <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>              
       
              <a href="detail.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
          
          </div>
<?php } ?>


<?php 
           function time_elapsed_string($datetime, $full = false){
             $now = new DateTime;
             $ago = new DateTime($datetime);
             $diff = $now->diff($ago);

             $diff->w = floor($diff->d / 7);
             $diff->d -= $diff->w * 7;

             $string = array(
               'y' => 'year',
               'm' => 'month',
               'w' => 'week',
               'd' => 'day',
               'h' => 'hour',
               'i' => 'minute',
               's' => 'second',
             );
             foreach( $string as $k => &$v){
               if ($diff->$k) {
                 $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
               } else {
                 unset($string[$k]);
               }
               
             }
             if(!$full) $string = array_slice($string, 0, 1);
             return $string ? implode(', ', $string) . ' ago' : 'just now';
           }
           ?>

                </div>
                 
                 </div>
                <div class="side">
                 
                  <div class="imgprops" style="height:auto;">
                 <!-- Sidebar Widgets Column -->
<?php include('includes/sidebar.php');?>
                </div>
                 
                  <h2><a href="category.php?catid=2" class="News-heading">POLITICS</a></h2>
                  <div class="imgprops" style="height:auto;">
                 <!-- Blog Post -->   
   <?php 
         if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
      } else {
          $pageno = 1;
      }
      $no_of_records_per_page = 5;
      $offset = ($pageno-1) * $no_of_records_per_page;


      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
      $result = mysqli_query($con,$total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=2 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Berlin Sans FB;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
               
     
            <a href="detail.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
        
        </div>
<?php } ?>
                </div>
                   
                  
                 
                  <h2><a href="category.php?catid=8" class="News-heading">Crypto Currency</a></h2>
                  <h6 style="border-top: 2px solid white; color: grey;  font-family: Berlin Sans FB;"><svg viewBox="0 0 512 512" class="svg-clock"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> just now</h6>
                  <div class="imgprops" style="height:auto;">
                  <div style="height:62px; background-color: #232937; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>
                  <div style="height:433px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 100%;"><div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>
                  </div>
              </div> 
            
           
</div>



 <!-- Pagination -->
 <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>

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