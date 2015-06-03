<!DOCTYPE HTML>
<html>
<head>
<title>Kipegee</title>
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
	<div class="wrap">
		<div class="header-top">
			<div class="logo">
				<a href="index.php"><img src="<?php echo base_url();?>images/logo.png" alt=""/></a>
			</div>
			<div class="clear"></div>
		</div>
		</div>
		<div class="menu">
		<div class="wrap">
			<div class="top-nav">
			      <ul class="nav">
		            <li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="<?php echo base_url();?>index.php/about">About</a></li>
					<li><a href="<?php echo base_url();?>index.php/administration">Administration</a></li>
					<li><a href="<?php echo base_url();?>index.php/academics">Academics</a></li>
					<li class"dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Resources</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>index.php/events">Events</a></li>
							<li><a href="<?php echo base_url();?>index.php/gallery">Gallery</a></li>
							<li><a href="<?php echo base_url();?>index.php/contact">Contact</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url();?>index.php/events">Events</a></li>
					<li><a href="<?php echo base_url();?>index.php/gallery">Gallery</a></li>
					<li class="active"><a href="<?php echo base_url();?>index.php/contact">Contact</a></li>
					<div class="clear"></div>
				 </ul>
					<div class="clear"></div>
			</div>
	     </div>
	</div>
</div>
<div class="wrap">
	<div class="main">
		   <div class="contact">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>School Contact :</h3>
						    	<p>Kipsigis Girls High School</p>
						   		<p>P.O.Box 194,Kericho 20200</p>
						<p>Phone:+254-052-20058</p>
				 	 	<p>Email: <span>info[at]mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form>
					</div>
  				</div>	
  				<div class="clear"></div>			
	    </div>
	</div>
</div>
	<div class="footer">
			<div class="wrap">
			<div class="footer-grids">
				<div class="footer-grid">
					<h3>KIPSIGIS GIRLS</h3>
					<p>Ut rutrum neque a mollis laoreet diam enim feuiat dui nec ulacoper quam felis id diam. Nunc ut tortor ligula eu petiu risus. Pelleesque conquat dignissim lacus quis altrcies.</p>
				</div>
				<div class="footer-grid">
					<h3>School Anthem</h3>
					<P>
						Proudly we come Kipsigis High School, the school we hold in High Esteem, Education Fount of Knowledge is our Motto, we shall all Succeed!!!
					</P>
				</div>
				<div class="footer-grid footer-lastgrid">
					<h3>CONTACT US</h3>
					<p>Pelleesque conquat dignissim lacus quis altrcies.</p>
					<div class="footer-grid-address">
						<p>Tel.800-255-9999</p>
						<p>Fax: 1234 568</p>
						<p>Email:<a class="email-link" href="#">email(at)academia.com</a></p>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
	</div>
</body>
</html>
