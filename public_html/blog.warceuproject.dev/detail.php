<?php 
session_start();
include('includes/config.php');
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  

endif;

}
}
}
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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0D072G19LE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0D072G19LE');
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
   <style>
            * {
    box-sizing: border-box;
    margin: 0px;
  }
  
  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    background-color: #1d2330;
  }  
  /*header*/
  .brand{
    text-align: center;
     float: end;
     margin-top: 0px;
  }
  .brand a{
      text-decoration: none;
      color: #fff;
      font-family: Berlin Sans FB;
      -webkit-animation-name: example; /* Chrome, Safari, Opera */
      -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
      animation-name: branddesign;
      animation-duration: 4s;
      animation-iteration-count: 2;
  }
  @keyframes branddesign {
      0%   {color: #282e3b;}
      25%  { color: white;}
      50%  { color: #282e3b;}
      100% { color: white;}
  }
  /*sidenavigation*/
  .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: white;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
  }
  
  .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      display: block;
      transition: 0.3s
  }
  
  .sidenav a:hover{
      color: #ff5a1c;
      text-decoration-thickness: 3px;
  }
  .closebtn {
      font-size: 36px !important;
  }
  .main-side-container{
    display: -webkit-flex;
      display: flex;
      -webkit-flex-wrap: nowrap;
      flex-wrap: nowrap;
  }
  .main-side-container div a{
    font-size: 15pt;
  }
  .main-side-container div hr{
  height: 2px;
  width: 80%;
  border: none;
  border-radius: 7px;
  background-color:#fff;
  }
  .w-f-u{
    background-color: #00b600;
    border-radius: 5px;
  }
  .w-f-u:hover{
    color: white !important;
    box-shadow: 0px 0px 10px red;
  }
  
  .sub-side-container:first-child{
    color: red;
  }
  /* Responsive layout*/
  @media screen and (max-width: 1080px) {
    .main-side-container{
      display: -webkit-flex;
        display: flex;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
    }
    .main-side-container div a{
      font-size: 14pt;
    }
  }@media screen and (max-width: 863px) {
  .main-side-container div a{
      font-size: 13pt;}
    }
    @media screen and (max-width: 820px) {
      .main-side-container div a{
          font-size: 12pt;
      }
      .w-f-u{
       margin-bottom: 10px;
        margin-left: 10px;
      }
  }
  h4 {
      text-align: center;
      font-size: 60px;
      margin-top: 0px;
    }
    .svg-clock{
      width: 11px;
      fill:grey;
    }
    /* Increase the font size of the h1 element */
    .header h1 {
      font-size: 40px;
    }
    
    /* Column container */
    .row {  
      display: flex;
      flex-wrap: wrap;
    }
    
    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
      flex: 30%;
      background-color: #f1f1f1;
      padding: 20px;
    }
    /* Main column */
    .main {   
      flex: 40%;
      
      padding: 20px;
    }
    
    /*  image */
    .imgprops {
      width: 100%;
    }
    @media screen and (max-width: 800px) {
      .side{
  flex: 50%;
      }
      .main{
        flex: 50%;
      }
      
    }
    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 500px) {
      .row {   
        flex-direction: column;
      }
    }
    
    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      .navbar a {
        float: none;
        width:100%;
      }
    }
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right:  0;
        background-color:#282e3b ;
        overflow-x: hidden;
        transition: 0.5s;
        padding:0px;
    opacity: .90;
    }
    
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #fff;
        display: block;
        transition: 0.3s;
    
    }
    
    .sidenav a:hover, .offcanvas a:focus{
        color:red;
        text-decoration: none;
    }
    
    .closebtn {
        position: relative;
        top: 0;
        right: 25px;
        font-size: 36px !important;
         
    }
    
    #main {
        transition: margin-left .5s;
      
      color: white;
    }
    
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
  @media screen and (max-width: 700px){
  .top-nav{
      display: none;
  }
  }
  @media screen and (max-width: 1000px){
    .top-nav{
      margin-left: 70px !important;
    }
    }
  .top-nav{
    margin-bottom: 70px;
    margin-left: 30%;
    
  }
  .nav{
    width: auto;
    height: 40px;
    border: none;
    line-height: 20px;
  }
  .top-nav a{
  text-decoration: none;
  color: #fff;
  font-family: Berlin Sans FB;
  
  }
  .top-nav a:hover{
    color: red;
  }
  .top-nav a li{
    list-style: none;
  float: left;
    font-size: 12pt ;
    margin-right: 20px;
  }
  .fa-circle{
  color: red;
  margin-left: 3px;
  }
  #c-color{
        text-transform: uppercase;
    }
   .header-box{
     background-color: #1d2330;
     height:70px;
   }
   .News-heading{
     text-decoration: navy;    
     font-size:12pt;
     display:flex;
     flex-direction:row;
   }
   .News-heading:before, .News-heading:after{
  content: "";
  flex: 1 1;
  border-bottom: 1px solid;
  margin:auto;
   }
   .News-heading:before{
     margin-right: 10px;
   }
   .News-heading:after{
     margin-left: 10px;
   }
   footer{
     background-color: #282e3b;
     margin: 0px;
   }
  
  .footer-main-container{
    display: -webkit-flex;
        display: flex;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .footer-main-container div{
    margin-left: 5px;
    width: 300px;
  }
  .footer-main-container div hr{
    width: 80%;
    margin-left: 0px;
  }
  .facb:hover{
    color: rgb(62, 62, 214) !important;
  }
  .insg:hover{
    color: rgba(255, 0, 21, 0.493) !important;
  }
  .twit:hover{
    color: skyblue !important;
  }
  .teleg:hover{
    color: rgb(33, 135, 175) !important;
  }
  .footer-main-container div p{
    color: #828da670;
  }
  .footer-main-container div a{
    text-decoration: none;
    font-size: 15pt;
   color: #828da6;
   font-size: 13pt;
   line-height: 35px;
  }
  .footer-main-container div a:hover{
    color: #fff;
  }
  .sub-container:first-child{
    color: #fff;
  }
  .footer-terms{
    text-align: center;
    color:#828da6 ;
    font-size: 10pt;
  }
  .footer-terms a{
    color: #f1f1f1;
    text-decoration: none;
    font-size: 10pt;
  }
 
   .card-title-font{
     color: white;
     font-size: 20px;
     font-family: bold;
   }
 .postimgtop{
  width:100%;
   height:520px;
   border-radius:5px 5px 0 0;
   position: center;
 }
 .postimgtop-con{
   height: auto;
 }
 .postimgtopt{
  width:100%;
   height:150px;
   border-radius:5px 5px 0 0;
 }
 .fixed-bar{
  position: fixed;
  top:0;
  width: 100%;
  z-index: 1;
 }
/*scroll to top*/
 @keyframes rotate {
   to {
     transform: rotate(2520deg);
   }
 }
 #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
  animation-name: rotate;
     animation-duration: 3s;
     animation-timing-function: linear;
     animation-iteration-count: infinite;
}
   </style>
</head>

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
  <main id="main">


    <!-- ======= Services Section ======= -->
    <section id="blog">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title" style="color: white;"></h3>
          <p class="section-description"></p>
          </div>
          
<!-- Page Content -->
   <div class="row">
                
                <div class="main">
                      <div class="imgprops" style="height:auto;">
       <!-- Blog Post -->
      <?php
      $pid=intval($_GET['nid']);
       $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
      while ($row=mysqli_fetch_array($query)) {
      ?>
      
                <div class="card mb-4">
            
                  <div class="card-body">
                    <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
                    <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> |
                      <b>Sub Category : </b><?php echo htmlentities($row['subcategory']);?> <b> Posted on </b><?php echo htmlentities($row['postingdate']);?></p>
                      <hr />
      
       <img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
        
                    <p class="card-text"><?php 
      $pt=$row['postdetails'];
                    echo  (substr($pt,0));?></p>
                   
                  </div>
                  <div class="card-footer text-muted">
                   
                 
                  </div>
                </div>
      <?php } ?>
             
      
      </div>
      <div class="imgprops" style="height:auto;">
      <!---Comment Section --->
      <div class="row"  >
         <div class="col-md-12">
      <div class="card my-4">
                  <h5 class="card-header">Leave a Comment:</h5>
                  <div class="card-body">
                    <form name="Comment" method="post">
            <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
       <div class="form-group">
      <input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
      </div>
      
       <div class="form-group">
       <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
       </div>
      
      
                      <div class="form-group">
                        <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                  </div>
                </div>
      
        <!---Comment Display Section --->
      
       <?php 
       $sts=1;
       $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
      while ($row=mysqli_fetch_array($query)) {
      ?>
      <div class="media mb-4">
                  <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="image">
                  <div class="media-body">
                    <h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br />
                        <span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['postingDate']);?></span>
                  </h5>
                 
                   <?php echo htmlentities($row['comment']);?>            </div>
                </div>
      <?php } ?>
      
              </div>
            </div>
          
                      </div> 
                       </div>
                       
                      <div class="side">
                       
                        <div class="imgprops" style="height:auto;">
                       <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
                      </div>
                      <h2><a href="category.php?catid=2" class="News-heading">READ MORE</a></h2>
                       <div class="imgprops" style="height:auto;">
                        <!-- Blog Post -->
         <?php 
         
         if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 4;
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
                       <div class="imgprops" style="height:auto;"></div>
                    </div> 
                  
                 
      </div>
            <!-- /.row -->

           
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
