<?php 
$con = mysqli_connect("localhost","root","","new_admin") ; 
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Church</title>
      <!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="images/aj.png" type="image/x-icon"/>
	
	<!-- // Meta Tags -->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.css" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
     <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700|PT+Serif" rel="stylesheet">
	  <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   </head>
   <body>
<header>
	<div class="container-fluid" style="background: #800C07;">
		<div class="row">
			<div class="col-md-6" style="line-height: 38px; font-family: 'Roboto Condensed', sans-serif; color: #fff;">Call Us +91-9698541646 <span class="hide_aj_top" style="margin-left: 30px;">Email:xyz@gmail.com</span></div>
			<div class="col-md-6 hide_aj_top ">
				<ul class="social_icon_aj pull-right">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					
				</ul>
			 </div>
		</div>
	</div>
</header>

<header>

    <div class="header-bar">
		<div class="container">
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded ">
               <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
               </button>
			   <div class="hedder-up">
				 <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="    width: 100px;"></a>
			   </div>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home </a>
                     </li>
                     <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="#vision" class="nav-link">Vision</a>
                     </li>
                     <li class="nav-item">
                        <a href="#gallery" class="nav-link">Gallery</a>
                     </li>
					
                     <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                     </li>
                  </ul>
				  
               </div>
			    
				<div class="clearfix"> </div>
            </nav>  
		</div>
   </div>
         <!-- //Navigation -->
</header>
<!--/banner-->

<style>
.mySlides {display:none;}
</style>
<div  style="max-width:100%">
<?php 
  $menu="SELECT * FROM `slider`";
  $result=mysqli_query($con,$menu);
 
  while ($row =mysqli_fetch_array($result)){
    ?>
  <img class="mySlides" src="admin/images_upload/<?php echo $row['slider_name']; ?>" style="width:100%">
  <?php } ?>
</div>


<!--//banner-->

<!-- Announcements -->

<div class="container-fluid tiker">
	<div class="row">
		<div class="col-md-3 annou">Announcements</div>
		<div class="col-md-9" style="line-height: 70px;">
<?php 
  $menu="SELECT * FROM `announcements`";
  $result=mysqli_query($con,$menu);
 
$row =mysqli_fetch_array($result);
	?>
    			
			<marquee onMouseOver="this.stop()" onMouseOut="this.start()" style=" font-weight: bold;"><?= $row['announcements'];  ?></marquee>
		</div>
	</div>
	</div>
<!-- Announcements -->




	<!-- about -->

<!-- //about -->


<section class=""  id="about" style="   margin-top: 40px;">
	<div class="container">
		
		<div class="row ab-agile" style="margin-top: -20px;">
			
				<div class="col-md-4">
					<img src="images/2616-01.jpg" class="cross_s">
								
			</div>
			


			<div class="col-md-8 aboutleft_a">

				<h2 class="why_us about_me" >About Us <br>	<span>New Life Fellowship, Delhi</span></h2>


				<p class=" p_font"> The Church started in December 1987, at New Delhi as a small body of believers, which soon exploded into a sizeable congregation.</p>

<p class=" p_font"> In December 1992, we registered under the Societies Act, in Delhi.</p>
 <p class=" p_font"> God gave us the vision, to establish a strong local church in the city of Delhi, developing it into a mission base forsuccessive church planting, in the neighboring cities, towns, villages, as well as tribal regions  of North India. </p>
 <p class=" p_font"> Today we are having the main church service at St. Thomas’ School Auditorium, Mandir  Marg, New Delhi-110001 and also having 5 celebrations and 11 cell groups scattered over 11 pin-codes in 7 districts within the NCR of Delhi.</p>
 <p class=" p_font"> e have continued with our strong vision to grow and multiply, through leadership development, evangelism and church planting. </p>
	
				
				
 				<h2 class="h2_aj" style="margin-bottom: 10px;">Today the Church is being led by </h2>
				<p><i class="fa fa-check" aria-hidden="true"></i> Senior Pastor S.K. Tandon </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Assistant Pastor Dr. Amit Muchon</p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Elders </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Leaders. </p>
				</div>
			
		
	</div>
	</div>
</section>




<!-- Vision -->
<section class="vision"  id="vision" style="background: #f1f1f1; padding: 56px;">
	<div class="container">
		<h2 class="heading-agileinfo why_us">Vision<span>The vision of the Church is to provide.
</span></h2>
		<div class="row ab-agile">
			<div class="row">
				<div class="col-md-12">
					
					<p>Religious and charitable services, freely to all segments of society regardless of caste, creed and background, in accordance with the teachings of God’s word (from the Holy Bible) and prayers. </p>
				</div>
			</div>


			<div class="row" style="margin-top: 40px">
			<div class="col-md-5 aboutright">
				<img src="images/Thec.jpg" class="img-responsive" alt="" />
			</div>
			<div class="col-md-7 aboutleft">
				<h2 class="h2_aj">The Church aims at:</h2>
				<p><i class="fa fa-check" aria-hidden="true"></i> Disseminating the truths and teachings contained in the Holy Bible. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Supporting Orphans, Widows and Destitutes. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Providing medical care and free medicines to the needy. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Providing education. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Supporting other like minded organizations and institutions to serve the <span style="margin-left: 40px;"> community. </span></p>
			</div>
			</div>
			</div>
		</div>
</section>
<!-- Vision -->
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: center;
    padding: 16px;
}

th:first-child, td:first-child {
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

.fa-check {
    color: green;
}

.fa-remove {
    color: red;
}
.church{
	margin-top: -40px;
}
.church_h2{
	text-align: center;
	font-weight: 500;
}
</style>
<section class="about">
	<div class="container">
		<h2 class="heading-agileinfo why_us">Sunday Church Service / Celebration<span>St. Thomas’ School Auditorium, Mandir Marg, New Delhi – 110001 <br> <span>(Time : 9.30 am – 11.30 am) (Map for Location)
</span>

</span></h2>
		<div class="row church">
			<div class="col-md-12 ">
				<h2 class="h2_aj" style="text-align: center;">Cell Churches <span></span></h2>
				<div class="table-responsive">
				<table class="table">
				  <tr>
				    <th>Day</th>
				    <th>Location</th>
				    <th>Time</th>
				    <th>Address</th>
				    <th>Contact</th>
				  </tr>
<?php 
  $menu="SELECT * FROM `cell_churches`";
  $result=mysqli_query($con,$menu);
 
  while ($row =mysqli_fetch_array($result)){
    ?>				  
				  <tr>
				    <td><?= $row['Day']; ?></td>
				    <td><?= $row['Location']; ?></td>
				    <td><?= $row['Time']; ?></td>
				    <td> <a href="<?= $row['map']; ?>" target="_blank">Map Link</a></td>
				    <td><?= $row['Contact']; ?></td>
				  </tr>
				  
			<?php } ?>  
				   
</table>
</div>


			</div>
			
			
		</div>
	</div>
</section>

<!-- 1. Add latest jQuery and fancyBox files -->

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>



	<!--Gallery -->
<section class="gallery" id="gallery"  style="background: #f1f1f1; padding: 56px;">
	<div class="container">
		<h2 class="heading-agileinfo why_us">Our Gallery<span>Preparation of fresh products for market, and manufacture of prepared food products</span></h2>
		<div class="row agileinfo_work_grids" style="margin-top: -30px;">
			<?php 
  $menu="SELECT * FROM `photo`";
  $result=mysqli_query($con,$menu);
 
  while ($row =mysqli_fetch_array($result)){
    ?>
				<div class="col-md-4 w3_agile_work_grid" style="margin-top: 30px;">
					<div class="wthree_work_grid1">
				
					<a data-fancybox="gallery" href="admin/images_upload/<?php echo $row['photo_name']; ?>" ><img src="admin/images_upload/<?php echo $row['photo_name']; ?>" style="width: 340px; height: 220px;"></a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>	
	<!-- light box -->






<!-- video -->
<section class="video" style="margin: 3em;">
	<div class="container">
		<h2 class="heading-agileinfo why_us">Our Video<span>Preparation of fresh products for market, and manufacture of prepared food products</span></h2>
		<div class="row agileinfo_work_grids">
			<?php 
  $menu="SELECT * FROM `video`";
  $result=mysqli_query($con,$menu);
 
  while ($row =mysqli_fetch_array($result)){
    ?>

				<div class="col-md-4 w3_agile_work_grid video_aj">
					<div class="wthree_work_grid1">
						<iframe width="340" height="223" src="https://www.youtube.com/embed/<?= $row['video_link'];  ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
<?php } ?>


				
			</div>
		</div>
	</section>	

<!-- video -->

<!-- massage -->
<section class="video" style="background: #f1f1f1; padding: 56px;">
	<div class="container">
		<h2 class="heading-agileinfo_d why_us">Message</h2>
		<div class="row agileinfo_work_grids">
			<?php 
  $menu="SELECT * FROM `massage`";
  $result=mysqli_query($con,$menu);
  while ($row =mysqli_fetch_array($result)){
 $text_pdf = substr($row['text_word'],0,25);
    ?>

				<div class="col-md-4 w3_agile_work_grid video_aj">
					<div class="wthree_work_grid1 " style="margin-top: 10px;">
						<a href="admin/wordfile/<?= $row['massage_name'];?>" target="_blank">
							<div class="pdf_background">
							<i class="fa fa-envelope-o" style="    font-size: 30px;"></i> &nbsp;<?= $text_pdf; ?> ....
							</div>
							
						</a>
							
					</div>
					</div>
				
<?php } ?>

</div>

				
			</div>
		</div>
	</section>

<!-- massage -->

<!-- contact -->
	<section class="mail" id="contact">
		<div class="container">
			<h2 class="heading-agileinfo why_us">Contact<span>Preparation of fresh products for market, and manufacture of prepared food products</span></h2>
				<div class="row agileits_mail_grids">
				<div class="col-md-7 agileits_mail_grid_left">
					<form action="#" method="post">
						<h4>Your Name*</h4>
						<input type="text" name="Name" placeholder="Name..." required="">
						<h4>Your Email*</h4>
						<input type="email" name="Email" placeholder="Email..." required="">
						<h4>Your Phone Number*</h4>
						<input type="text" name="Phone" placeholder="Phone..." required="">
						<h4>Your Message*</h4>
						<textarea placeholder="Message..." name="Message"></textarea>
						<input type="submit" name="submit" value="Send message">
					</form>
				</div>


<?php
if (isset($_post['submit'])) {
	$Name =$_POST['Name'];
	$Email =$_POST['Email'];
	$Phone =$_POST['Phone'];
	$Message =$_POST['Message'];
	if ($Name == '' OR $Email == '' OR $Phone == '' OR $Message == '' ) {
		
	}
else {
	$to      = 'ajay.kumar@toponsearch.com';
$subject = 'Phone';
$message = 'Message';
$headers = 'Email';

mail($to, $subject, $message, $headers);
}
	
}



?> 

				<div class="col-md-5 agileits_mail_grid_right">
					<div class="left-agileits">
						<h3>Address </h3>
						<h2 class="h2_aj">Office:</h2>
							<ul>
								<li><span class="fa fa-home" aria-hidden="true"></span>F-48, Second Floor, Madhu Vihar,Delhi-110095</li>
								<li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
								<li><span class="fa fa-phone" aria-hidden="true"></span>+91-9582621447</li>
							</ul>
					</div>
				
					
					
				</div>
			</div>
		</div>
	</section>
	<!-- //contact -->
	<div class="container-fluid" style="  background: #f1f1f1">
		<div class="container">
		<h2 class="heading-agileinfo_aj why_us" style="padding-top: 40px;">Our Address</h2>
		<div class="row" >

			<div class="col-sm-4 left-agileits" style="margin-bottom: 40px">
				<h2 class="h2_aj">President</h2>
				<img src="images/img_avatar.png" class="img-thumbnail img-responsive" >
					<h2 class="h2_name">Mr.Ashok Anand</h2>
				<ul>
								<li><span class="fa fa-home" aria-hidden="true"></span>B-503,Prince apartments,IP Extension, <span class="add_aj">patparganj Delhi -110092</span></li>
								<li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
								<li><span class="fa fa-phone" aria-hidden="true"></span> +91-9818334511</li>
							</ul>
			</div>
			<div class="col-sm-4 left-agileits" style="margin-bottom: 40px">
				<h2 class="h2_aj">Senior Pastor</h2>
				<img src="images/img_avatar.png" class="img-thumbnail img-responsive">
					<h2 class="h2_name">Mr.S.K. Tandon</h2>
				<ul>
								<li><span class="fa fa-home" aria-hidden="true"></span>EG-4, Xavier Apartments, Saraswati <span class="add_aj">Vihar, pitampura, Delhi-110034</span></li>
								<li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
								<li><span class="fa fa-phone" aria-hidden="true"></span>+91-9871611447</li>
							</ul>
			</div>
			<div class="col-sm-4 left-agileits" style="margin-bottom: 40px">
				<h2 class="h2_aj">Assistant Pastor</h2>
				<img src="images/img_avatar.png" class="img-thumbnail img-responsive">
					<h2 class="h2_name">Dr.Amit Muchon</h2>
				<ul>
								<li><span class="fa fa-home" aria-hidden="true"></span>L-387, Rishi Nagar, Delhi-110034</li>
								<li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
								<li><span class="fa fa-phone" aria-hidden="true"></span> +91-9899877477</li>
							</ul>
			</div>
		</div>
	</div>
</div>
<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its">
	<div class="container">
		<div class="row footer-top">
			<div class="col-lg-3 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>The Church started in December 1987, at New Delhi as a small body of believers, which soon exploded into a sizeable congregation. <br>
In December 1992, we registered under the Societies Act, in Delhi. </p>
					<ul class="social_section_1info">
						<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Contact Info</h3>
				</div>
				<div class="contact-info">
					<h4>Location :</h4>
					<p>F-48, Second Floor, Madhu Vihar, Delhi-110095</p>
					<div class="phone">
						<h4>Phone :</h4>
						<p>Phone : +91-9582621447</p>
						<p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Useful Links</h3>
				</div>
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#vision">Vision</a></li>
					<li><a href="#gallery">Gallery</a></li>
					<li><a href="#contact">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-lg-3 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Subscribe</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post" class="sub">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-long-arrow-right"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p>© 2018 Top On Search. All Rights Reserved | Design by <a href="#">nksoftsolution</a> </p>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->
<!-- modal -->

	<!-- //modal -->

     <!--js working-->
      <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
      <!--//js working-->
	  <script src="js/main.js"></script>
	  <!-- clients -->
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 2,
							animationSpeed: 1000,
							autoPlay:false,
							autoPlaySpeed: 2500,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:1
								},
								tablet: { 
									changePoint:768,
									visibleItems: 1
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- //clients -->

	<!-- smooth scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- //smooth scrolling -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
<!-- slider script -->
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<!-- End slider script -->

<!--bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
 <!-- //bootstrap working-->
   </body>
</html>





