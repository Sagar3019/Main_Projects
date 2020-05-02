<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link href="https://fonts.googleapis.com/css?family=Cinzel|Germania+One|Bungee Shade|Ewert|Faster One|Monofett|Josefin+Sans|Kaushan+Script" rel="stylesheet">
	<style>
		body
		{
			margin: 0px;
			background-color: #f1c40f;
		}
		div#outer
		{
			text-align: center;
			background-color: #154360;
			padding: 10px;
		}
		div#inner
		{
			display: inline-block;
		}
		div#inner img
		{
			height: 110px;
			float: left;
			margin-top: 30px;
			text-align: left;
			position: relative;
		}
		div#inner h1
		{
			color: white;
			margin-top: 20px;
			font-family: 'Bungee Shade';
			letter-spacing: 2px;
			padding: 15px;
			font-size: 70px;
			display: inline;
		}
		ul#menu
		{
			margin: 0;
			padding: 0;
			list-style: none;
			font-variant: small-caps;
			position: sticky;
			top: 0;
			z-index: 99;
		}
		ul#menu li , ul#ot li
		{
			float: left;
			width: 303.8px;
			height: 50px;
			background-color: white;
			opacity: 1;
			line-height: 50px;
			text-align: center;
			font-size: 23px;
			font-weight: 900;

		}
		ul#ot li
		{
			float: left;
			width: 302px;
			height: 50px;
			background-color: white;
			opacity: 1;
			line-height: 50px;
			text-align: center;
			font-size: 20px;
			font-weight: 900;
			position: relative;
			left: -16%;
		}
		ul#menu li a
		{
			text-decoration: none;
			color: black;
			display: block;
		}
		ul#menu li a:hover
		{
			background-color: #00aa00;
		}
		ul#menu li ul li
		{
			display: none;
		}
		ul#menu li:hover ul li
		{
			display: block;
		}
		div#content_outer
		{
			margin: 100px 120px ;
			padding: 10px 40px;
			border: 4px solid black;
			border-radius: 40px;
			background-color: white;
			opacity: .7;
		}
		div#content_outer h1
		{
			text-underline-position: under;
			font-variant: small-caps;
			font-size: 50px; 
		}
		div#content_inner
		{
			margin: 0;
			padding: 1px 0px;
			font-size: 20px;
			font-family: monospace;
		}
		b
		{
			font-variant: small-caps;
			font-size: 20px;
			font-weight: bolder;
			font-family: 'Times New Roman';
		}
		#bottom
		{
			background-color: #000;
			padding: 5px 140px;
			bottom: 0;
			opacity: .9;
			color: white;
			font-size: 20px;
			font-weight: bolder;
		}
		#bottom h1
		{
			margin-left: 25px;
		}
		p b#heading
		{
			font-variant: small-caps;
			font-size: 30px;
		}
		input
		{
			font-variant: small-caps;
			font-size: 18px;
			font-weight: bolder;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="sidenav.css">
</head>
<body>
	<div id="outer">
	<div id="inner">
		<img src="amity_logo.png" alt="Amity Logo">
		<h1>Amity Central Library</h1>
	</div>
	</div>
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="">Programme</a>
			<ul id="ot">
					<li><a href="extended.php">Btech</a></li>
      				<li><a href="extended.php">BCA</a></li>
      				<li><a href="extended LLB.php">LLB</a></li>
			</ul>
		</li>
		<li><a href="About Us.php">About Us</a></li>
		<?php 
		if(count($_COOKIE)==0 || $_COOKIE["login"]=="Null") 
			{ 
				echo('<li><a href="login.php">Login</a></li>'); 
			} 
		else 
		{ 
			$con=new mysqli("localhost","root","");
			$sql="use users";
			if(($con->query($sql))==TRUE)
			{	
			 $sql="select fname from detail where fnum='".$_COOKIE["login"]."'";
			 $qr=$con->query($sql);
			 $res=$qr->fetch_array();
			 echo('<li><a href="profile.php">User : ').$res["fname"].('</a></li>');
			}
		}
		 ?>
		 <?php 
		if(count($_COOKIE)==0 || $_COOKIE["login"]=="Null") 
			{ 
				echo('<li><a href="register.php">Register</a></li>'); 
			} 
		else 
		{ 
			 echo('<li><a href="logout.php">Logout</a></li>');
		
		}
		?>
	</ul>
	<div id="content_outer">
		<h1><u>About Us</u></h1>
		<div  id="content_inner">
			<p>
				<b id="heading">Our Mission</b><br>
				This is an approach led by the combined efforts of the students of Amity University Haryana, <b>Samyak Agarwal</b> and <b>Sagar Shrivastava</b> with a vision to give some contribution to the <b>Digital India Campaign</b> led by Honourable Prime Minister of India <b>Mr. Narendra Modi</b>.
			</p>
			<p>
				<b id="heading">Our Services</b><br>
				This is an Online platform exclusively desiged for the students of Amity University Haryana to connect easily to the Amity Central Library with the help of which they can easily get any book issued which at that time is currently avaible in the library at any time from any location and can further collect it from there.
			</p>
			<p>
				<b id="heading">Contact Us</b><br>
				For all contact, please write to <strong><a href="mailto: kaymasagarwal@gmail.com">support@amitycentrallibrary.com</a></strong> or make a post on our official forum. If you have a technical question or problem, such as with a circuit or programming, it's best to post on the forum, as it will be seen by more people.
				<br><br>
				All your inquiries and comments will be gladly received and read. I hope to reply as quickly as possible. However, at times due to heavy volume, it is difficult to reply to all emails, so we cannot guarantee we can reply to your email. Thank you very much, though, for all your interest.
			</p>
		</div>
	</div>
	<div id="bottom">
				<h1>Still Have Any Query?</h1>
				<form method="POST">
					<table cellspacing="30px" cellpadding="5px">
						<tr>
							<td>Name :</td>
							<td><input type="text" name="name" required="required"></td>
						</tr>
						<tr>
							<td>Type of Query :</td>
							<td><input type="text" name="qtype" required="required"></td>
						</tr>
						<tr>
							<td>Description :</td>
							<td><textarea rows="5" cols="30" name="query" required="required"></textarea></td>
						</tr>
						<tr>
							<td colspan="2"><center><input type="submit" name="submit" value="Submit"></center></td>
						</tr>
					</table>
					<?php
					if($_POST)
					{
						$name=$_POST['name'];
						$qtype=$_POST['qtype'];
						$Description=$_POST['query'];
						$con=new mysqli("localhost","root","");
						$sql="create database if not exists Query";
						if(($con->query($sql))==TRUE)
						{
						$sql="use Query";
							if(($con->query($sql))==TRUE)
							{	
						 		$sql="create table if not exists Issues(Name varchar(30) NOt NULL,Type varchar(60) NOT NULL,Description text NOT NULL)";
						 		if(($con->query($sql))==TRUE)
						 		{
						   			$sql="insert into Issues(Name,Type,Description) values('$name','$qtype','$Description')";
									if(($con->query($sql))==TRUE)
									{
										echo "<b style='margin-left:50px; color:rgb(0,190,0);'>Your Query has been successfully submitted!!</b>";
									}
									else
									{
										echo "Error Inserting Values : ".$con->error;
									}
						 		}
						 		else
						 		{
						 			echo "Error creating table : ".$con->error;
						 		}
							}
							else
							{
								echo "Error selecting database : ".$con->error;
							}
					 	}
						else
						{
					 	  echo "Error Creating database : ".$con->error;
					 	}
					}
				?>
				</form>
				<br>
				<center><span style="font-size: 18px">&copy; All Rights Reserved</span></center>
				<br>
			</div>
	</body>
</html>
