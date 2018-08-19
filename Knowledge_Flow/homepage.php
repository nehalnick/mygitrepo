<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="content-type" content="width=device-width, initial-scale=1" />
<script src="js/bootstrap.min.js" type="application/javascript" >
</script>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all"  />
<link href="css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" media="all" />
<style>

</style>
</head>


<body>

<nav class="navbar navbar-default navbar-fixed-top" >
	<div class="container">
		<div class="navbar-header">
						<a href="#" class="navbar-brand">Knowledge Flow</a>
                        
		</div>
	
			<ul class="nav navbar-nav navbar-right">
				<li><a href="" >HOME</a></li>
				
				<li><a href="#team">ARTICLES</a></li>
				<li><a href="#upcomming">UPCOMING EXAMS</a></li>
				<li><a href="#service">PLACEMENTS</a></li>
                <li><a href="#contact">CONTACT US</a></li>
                <li><form class="myform" action="homepage.php" method="post"><button name="logout"  id="logout_btn" value="Log Out" style="margin-top:12px; margin-left:10px;  width:100%; text-color:white;" >Log out</button> 
                    
                    </form>
                    <?php if(isset($_POST['logout']))
                    {
                    
                        session_destroy();
                        header('location:index.php');
                    }
                    ?>
	
                
                
                </li>
                <li><h4 style="margin-left:20px; margin-top:15px;"><b><i>Welcome <?php echo $_SESSION['username']?></i></b></h4></li>
			</ul>
        
	</div>
</nav>
<section id="aboutus">
 <div class="row center-block text-center">
 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
 <h2 class="danger text-center " style="margin-top:220px;" ><font size='7'><u>About Us</u></font></h2>
 <p style="text-align:center;" ><font size='6'>The idea of Knowledge flow comes from the fact that not all colleges have a portal for sharing ideas. It  will be a portal for all students and teachers of the college to share their ideas, knowledge, facts, research and news with eachothers.
We look forward to welcome you and initiate the exploring journey of ideas!!!</font>
</p>
 </div>
 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
 <img style="margin-top:180px;" src="images/logos.png" class="img-responsive center-block"  />
 </div>
 </div>
 </section>
 <br />
 <br />
 <br />
 <br />
 <section id="team">
 <div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center col-xs-12 col-xs-offset-12 ">
                <br><br>
				<h1 class="heading">ARTICLES..</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp col-lg-4 col-xs-4" data-wow-delay="0.3s">
				
				<h4><u>What Every Programmer Should know about Time</u></h4>
				<p><i>Apart from Character encoding, time and date is another area, where many programmers struggle, including me. Even senior developers lost between GMT, UTC, day light saving and between leap seconds. Frankly speaking, It's not easy to deal with time zones without making any mistake, then add day light savings and effect of that. Problems become worse if you using trial and error method because you will never able to solve your problem by doing that. There are so many things which can go wrong and there is an equal number of misconceptions. Things like, whether date contains time-zone or not can confuse you like hell, converting UNIX time to another time-zone can freak you out, forget about clock synchronization and delays. I hope many of your misconception about time will go away and you will build sound fundamental about Time, by reading this classic article.</i></p><br>
                <h7>-by<i> Derek Arnold</i></h7>
                <br><br>
                <a href="https://unix4lyfe.org/time/?v=1">Click here to read the full article.</a>
                
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp col-lg-4 col-xs-4" data-wow-delay="0.6s">
				
				<h4><u>What Every Programmer Should Know About SEO</u></h4>
                <p><i>This is another article, which is very important for web developers, programmers, and blogger. SEO is too big to ignore since many programmers are also bloggers, it’s important to learn few basics of Search Engine Optimization to help Google find their content and present to other fellow programmers. Since no company can survive without web presence in today's inter-connected world, SEO becomes even more important. If you own start-up, selling any product, then SEO is something to care about. All programmers, especially web developers can largely benefit from this article. Remember, Search Engine Optimization is vast and very dynamic subject, and also varies between different search engines e.g. Google, Yahoo, and others. So, In order to master this topic you will always need to update your knowledge.

</i></p><br>
                <h7>-by<i> Kate</i></h7>
                 <br><br><br><br>
                 <a href="http://katemats.com/what-every-programmer-should-know-about-seo/">Click here to read the full article.</a>
                
				
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp col-lg-4 col-xs-4" data-wow-delay="0.9s">
                <h4><u>What Every Programmer Need to know about networking</u></h4><p><i>From the article itself "You’re a programmer. Have you ever wondered how multi-player games work? From the outside it seems magical: two or more players sharing a consistent experience across the network like they actually exist together in the same virtual world. But as programmers we know the truth of what is actually going on underneath is quite different from what you see. It turns out that it’s all an illusion." This is very interesting article about networking, written for game programmers but I think every programmer and developer can benefit from this.</i></p>



                     <h7>-by<i> Glenn Fiedler</i></h7>
                    <br><br><br><br><br><br><br><br><br>
                    <a href="https://gafferongames.com/post/what_every_programmer_needs_to_know_about_game_networking/">Click here to read the full article.</a>
                    
				
			</div>
		</div>
	</div>
    <br />
    <br />
    <br />
    <br />
</section>
    
    <!--new section -->
    <section id="upcomming">
 <div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center col-xs-12 col-xs-offset-12 ">
                <br><br>
				<h1 class="heading">UPCOMING EXAMS..</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp col-lg-4 col-xs-4" data-wow-delay="0.3s">
				
				<h2><u>First Year</u></h2>
                <br>
             <h3>Model Exams</h3>
                
                <a href="#"> Click here to download Schedule</a>
                  <h3>Model Practicals</h3>
                
                <a href="#"> Click here to download Schedule</a>
                <h3>University Exams</h3>
                
                <a href="#"> Click here to download Schedule</a>
                 <h3>University Practicals</h3>
                <a href="#"> Click here to download Schedule</a>
                
                
               
                
                
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp col-lg-4 col-xs-4" data-wow-delay="0.6s">
				
			<h2><u>Second Year</u></h2>
                
                <br>
                <h3>Model Exams</h3>
                
                <a href="#"> Click here to download Schedule</a>
                  <h3>Model Practicals</h3>
                
                <a href="#"> Click here to download Schedule</a>
                <h3>University Exams</h3>
                
                <a href="#"> Click here to download Schedule</a>
                 <h3>University Practicals</h3>
                <a href="#"> Click here to download Schedule</a>
                
                
				
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp col-lg-4 col-xs-4" data-wow-delay="0.9s">
                
                    <h2><u>Third Year</u></h2>
                <br>
                <h3>Model Exams</h3>
                
                <a href="#"> Click here to download Schedule</a>
                  <h3>Model Practicals</h3>
                
                <a href="#"> Click here to download Schedule</a>
                <h3>University Exams</h3>
                
                <a href="#"> Click here to download Schedule</a>
                 <h3>University Practicals</h3>
                <a href="#"> Click here to download Schedule</a>
                
                
				
			</div>
		</div>
	</div>
    <br />
    <br />
    <br />
    <br />
</section>
    
    <!--section new ends-->

<section id="service">
 <div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center col-xs-12 col-xs-offset-12"><br><br>
				<h1 class="heading">PLACEMENTS..</h1>
				<hr>
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInUp col-lg-6 col-xs-6"  data-wow-delay="0.3s">
                <h3><u>Sensitizer</u></h3>
                <p><font size='4'>View 1st Sensitizer Result</font></p><a href="">Click here</a>
                <br><br><br>
                <p><font size='4'>View 2nd Sensitizer Result</font></p><a href="">Click here</a>
                <br><br><br>
                <p><font size='4'>View 3nd Sensitizer Result</font></p>
                <p>will be uploaded soon..</p>
				  
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
				 
                <h3><u>Dream Offers</u></h3>
                <p><b>Dream companies offer 5 lacs/ annum and above salary packages</b></p>
                <p><font size='4'>Amadeus, Siemens, Hyundai Motors, Bank of America, BlueStar, Dell, Hashedin, Honda, Hyundai, Maruti Suzuki, Huwaei, Michelin, Qualcomm, Vedanta, Sony India, Saint Gobain, Tata Technologies, L&T, Mahindra & Mahindra</font>
                    
                </p><br>
                <p><b>Dream companies offer 10 lacs/ annum and above salary packages</b></p>
                <p><font size='4'>Amazon, CISCO, DBS, SAP Labs, HSBC, Google, Goldman Sachs, Directi</font>
                    <br><br>


 </p>

                
			</div>
            <div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 wow fadeInUp" data-wow-delay="0.9s">
				
				<h3><u>Interview Questions</u></h3>
                <h4><i>Visit below mention websites for Interview preparation</i></h4>
                <p><font size='3'>GeekFORGeeks</font></p><a href="">Click here</a>
                <br><br>
              <p><font size='3'>Careercup</font></p><a href="">Click here</a>
                <br><br>
                <p><font size='3'>IndiaBix</font></p><a href="">Click here</a>
                
			</div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 wow fadeInUp" data-wow-delay="0.9s">
								<h3><u>Contacts</u></h3>
                <p ><font size='3'>Team <br>Ms. Dhowmya Bhatt<br>
Manager Placement<br>
Contact: 08859000710<br>
Email: placement@srmimt.net</font></p>
                
              
		</div>
	</div>
    </div>
</section>


<section id="contact" class="parallax-section">
<form method="post" action="homepage.php">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 col-md-12 col-xs-12  text-center">
				<h1 class="heading">Submit Your Ideas</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6">
						<input name="name" type="text" class="form-control" id="name"  placeholder="Name" required>
				  </div>
					<div class="col-md-6 col-sm-6">
						<input name="email" type="email" class="form-control" id="email"  placeholder="Email" required>
				  </div>
					<div class="col-md-12 col-sm-12">
						<textarea name="message" rows="8" class="form-control" id="message" placeholder="Message" required></textarea>
					</div>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-lg-6 col-xs-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="Submit">
					</div>
				</form>
                <?php 
  if(isset($_POST['submit']))
      {         @$name=$_POST['name'];
				@$email=$_POST['email'];
                @$message=$_POST['message'];
				
                $query = "insert into submission values('$name','$email','$message')";
							$query_run = mysqli_query($con,$query);
       echo '<script type="text/javascript">alert("We have recieved your message.")</script>';
 
      }
                    else
                    {
                         echo '<script type="text/javascript">alert("Welcome")</script>';
                    }
                
                
                
                
                
                ?>
			</div>
			<div class="col-md-2 col-sm-1 col-lg-1 col-xs-1 " ></div>
		</div>
	</div>
	</form>
</section>
<section id="contact">
<footer class="parallax-section" style="background:#F07B93;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6  wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Contact Info.</h2>
				<div class="ph">
					<p><i class="fa fa-phone"></i> Phone</p>
					<h4>099-106-33377</h4>
				</div>
				<div class="address">
					<p><i class="fa fa-map-marker"></i> Our Location</p>
					<h4>Knowledge Flow, SRM University</h4>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Developers</h2>
					<p> Nehal Goel</p>
                <p> Himadri Mishra</p>
					
			</div>
			
		</div>
	</div>
</footer>
</section>

</body>
</html>
