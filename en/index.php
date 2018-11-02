<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet' href='../assets/stylesheets/hhstyle.css' type='text/css'/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		
		<title> Hogeschool Hoogeveen</title>
	</head>
	
	<body>
		<a id="top"></a>	
		<div id="header"> 
			<a href='index.php'> 
			<img src='../assets/images/logohh.png' alt='Hogeschool Hoogeveen'> 
			</a>
			
			<div class="streepje"></div>
			
			<div id="languageSelect">
				<a class="languageBtn" href="../nl/index.php">
					NL
				</a>
				<a class="languageBtn active" href="index.php">
					EN
				</a>
			</div>
			
			<div class="streepje"></div>
			
			<ul class="desktopMenu">
				<li><a href="agenda.php">Agenda</a></li>
				<li><a href="contactpagina.php">Contact</a></li>
				<li><a href="gallery.php">Media</a></li>	
				<li class="dropdown">
					<a href="opleidingen.php" class="dropbtn">Opleidingen</a>
					<div class="dropdown-content">
						<a href="techniek.php">Techniek</a>
						<a href="economie.php">Economie</a>
					</div>
				</li>			
			</ul>
			
			<div id="menuBtn">☰</div>
			<ul class="mobileMenu">
				<li><a href="agenda.php">Agenda</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="gallery.php">Media</a></li>
				<li class="dropdown">
					<a href="opleidingen.php" class="dropbtn">Opleidingen</a>
					<div class="dropdown-content">
						<a href="techniek.php">Techniek</a>
						<a href="economie.php">Economie</a>
					</div>
				</li>
			</ul>				
		</div>

		<div id="content">
			
			<div id='achtergrondcontent'>
				<div id='backgroundimage'> </div>
			</div>
							
			<div id='textbox'>
				<h1>Brighten your view at Hogeschool Hoogeveen</h1>
				<p>Our school is constantly pushing you to develop your talents. Our teachers wil prepare you for a ever changing world. On our school you'll learn to find solutions to problems that have a big impact on the future. With unlimited registrations for students there is enough space for people with innovating ideas.</p>
			
			<div class="meerknop">
				<a href='#meerinformatie'> More </a>
			</div>
			
			</div>

			<div class="clearFix"></div>
			
		
		</div>
		<div class='informatiecontent'>
			<a id='meerinformatie' > <h1>Hogeschool Hoogeveen</h1> </a>
			<p>Our school is very young and currently has 100 students. But we are growing very quickly and have lots of space left. We offer two courses. Technical: lifesience, chemistry and mechanical engineering. Economics: business-economy & logistics. All of our courses are also given in English.</p>
		
			<div id="pinbox">
				<div class='punten'>
					<img src="../assets/images/pin.png" alt="pin">
					<h1> Almost no dropouts</h1>
					<p> On our school there are little dropouts</p>
				</div>
				<div class='punten'>
					<img src="../assets/images/pin.png" alt="pin">
					<h1>The best courses</h1>
					<p> We have the best courses on our school</p>
				</div>
				<div class='punten'>
					<img src="../assets/images/pin.png" alt="pin">
					<h1> International</h1>
					<p>All our courses are also given in Engelish</p>
				</div>
				<div class="clearFix"></div>
			</div>
			
			<div class="meerknop">
				<a href='contactpagina.php'>Sign up</a>
			</div>
			
		<div id="opleidingen">
			<a class='pinkblue' href="economie.php">
				<img src="../assets/images/economie.png" alt="pin">  
				<div class='opleidingtekst'> <h1> Economical</h1> </div>
			</a>
			<a class='pinkblue' href="techniek.php">
				<img src="../assets/images/lifesience.png" alt="pin">  
				<div class='opleidingtekst'> <h1> Technical</h1> </div>
			</a>
		</div>

			<div class="clearFix"></div>
		</div>

		<div id="footer">
			<div id="footercontent">
			
				<div class="Links"> 
					<p>General</p>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="agenda.php">Agenda</a></li>
						<li><a href="gallery.php">Media</a></li>
					</ul>
				</div>
				
				<div class="Links"> 
					<p>Contact</p>
					<ul>
						<li><a href='contactpagina.php'>Contact</a></li>
						<li><a href='contactpagina.php'>Sign up</a></li>
					</ul>
				</div>
				<div class="Links"> 
					<p>Courses</p>
					<ul>
						<li><a href="opleidingen.php">Courses</a></li>
						<li><a href="techniek.php">Tech</a></li>
						<li><a href="economie.php">Economics</a></li>
					</ul>
				</div>
				<div id="gegevens">
				    <p> Adres: Hogeschool Hoogeveen, Hoogestraat 99</p>
					<a> <p> 06 25-73 21-34</p> </a>
					<p> help@hogeschoolhoogeveen.nl</p>
				</div>	
				
			</div>

		</div>
			<div id="backtotop">
				<a href='#top'> <p> Back to top</p> </a>
			</div>


		<script>
			$('#menuBtn').click(function(){
				$('.mobileMenu').toggleClass('active');
			});
		</script>
	</body>
</html>