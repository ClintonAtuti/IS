<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>
	<body>
		<header>
		<link rel="stylesheet" type="text/css" href="header/styles.css">
        
	<?php 
	include ("header/Header.php")
	?>
	</header>
	
    <div class="banner_image">
		<div class="banner_content">
			<h1>TOUCH THE LITTLE LIVES.<br/>
				<span>Lets Identify Missing Children.</span>
			</h1>
			<p style="color:#FFD700;">Make Families Smile</p>
		</div>
	</div>
	<div class="body">
	<div class="btn" ><a href="Reporting/view.php"> VIEW LOST AND FOUND CHILIDREN </a></div>

	<div class="about" id="about">
		<h1 class="title" style="color: white;" >About us</h1>
		<p style="color: #FFD700; ">
		Reunit broken families and make them have an everlasting smile</p>
		<div class="btn"><a href="about.html">Learn More</a></div>
	</div>
	<div class="contactus" id="contactus">
		<h1 class="title" style="color: white;">Contact Us</h1>
		<div class="form_wrapper">
			<div class="form_input">
				<input type="email" placeholder="Email">
			</div>
			<div class="form_input">
				<input type="text" placeholder="Subject">
			</div>
			<div class="form_input">
				<textarea placeholder="Message"></textarea>
			</div>
			<div class="btn">
				<a href="#">Submit</a>
			</div>
		</div>
	</div>
</div>
	<div class="ourteam" id="ourteam">
		<h1 class="title">our team</h1>
		<div class="ourteam_wrapper">
			<div class="team-1 team">
				<div class="team_member">
					<img src="https://i.imgur.com/DFZPOdT.jpg" alt="Team_Image">
				</div>
				<div class="team_member">
					<img src="https://i.imgur.com/GionYfa.jpg" alt="Team_Image">
				</div>

			</div>
		</div>
	</div>
	<footer>
<link rel="stylesheet" type="text/css" href="footer/footer.css">
<?php

 include('Footer/footer.php') ?>
 </footer>
</body>
</html>