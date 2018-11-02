<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet' href='../assets/stylesheets/hhstyle.css' type='text/css'/>
		<!--favicon files begin-->
		<link rel="apple-touch-icon" sizes="180x180" href="../faviconfiles/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../faviconfiles/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../faviconfiles/favicon-16x16.png">
		<link rel="manifest" href="../faviconfiles/site.webmanifest">
		<link rel="mask-icon" href="../faviconfiles/safari-pinned-tab.svg" color="#4ac0ff">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<!--favicon files end-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		
		<title> Hogeschool Hoogeveen</title>
	</head>
	
	<body>
		<a id="top"></a>	
		<div id=header> 
			<a href='index.php'> 
                            <img src='../assets/images/logohh.png' alt='Hogeschool Hoogeveen'> 
			</a>
			
			<div class=streepje></div>
			
			<div id="languageSelect">
				<a class="languageBtn" href="../nl/opleidingen.php">
					NL
				</a>
				<a class="languageBtn active" href="opleidingen.php">
					EN
				</a>
			</div>
			
			<div class=streepje></div>
			
			<ul class="desktopMenu">
				<li><a href="agenda.php">Agenda</a></li>
				<li><a href="contactpagina.php">Contact</a></li>
				<li><a href="gallery.php">Media</a></li>	
				<li class="dropdown">
					<a href="opleidingen.php" class="dropbtn">Educations</a>
					<div class="dropdown-content">
						<a href="techniek.php">Technic</a>
						<a href="economie.php">Economy</a>
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

		<div id=content>
			
			<div id='achtergrondcontent'>
				<div id='backgroundimageopleidingen'> </div>
			</div>
							
			<div id='textbox'>
				<h1> Pick a course at Hogeschool Hoogeveen!  </h1>
				<p> The courses given at Hogeschool Hoogeveen have earned the title 'top-notch courses'. 
				By signing up for one of our courses you can expect an challenging course from great quality. 
				
				</p>
			
			<div class="meerknop">
				<a href='#meerinformatie'> The Courses</a>
			</div>
			
			</div>

			<div class="clearFix"></div>
			
		
		</div>
		<div class='informatiecontent'>
			<a id='meerinformatie' > <h1> Our Courses</h1> </a>
			<p> Hogeschool Hoogeveen has 2 courses, both have two specializations. The technical course's specializations are
			'mechanical engineering' and 'lifesience and chemistry'.
			Hogeschool Hoogeveen also has an economical course with two specializations, 'business economics' and 'Logistics'.
			All courses are bachelor courses, each course takes four years to complete. The courses are all given in English.</p>
			
			
		<div id="opleidingen">
			<a href='economie.php'>
				<div class='pinkblue'> 
					<img src="../assets/images/economie.png" alt="pin"> 
					<div class='opleidingtekst'> <h1> Economical</h1> </div>
				</div>
			</a>
			<a href='techniek.php'>
				<div class='pinkblue'> 
					<img src="../assets/images/werktuigbouwkunde.png" alt="pin">  
					<div class='opleidingtekst'> <h1> Technical</h1>  </div>
				</div>
			</a>
		</div>

			<div class="clearFix"></div>
		</div>

		<div id=footer>
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
                             <li><a href='contactpagina.php'>Sign in</a></li>
                          </ul>
                       </div>
                       <div class="Links">
                          <p>Courses</p>
                          <ul>
                             <li><a href="opleidingen.php">Courses</a></li>
                             <li><a href="techniek.php">Technical</a></li>
                             <li><a href="economie.php">Economics</a></li>
                          </ul>
                       </div>
                       <div id="gegevens">
                          <p> Adress: Hogeschool Hoogeveen, Hoogestraat 99</p>
                          <a>
                             <p> 06 25-73 21-34</p>
                          </a>
                          <p> help@hogeschoolhoogeveen.nl</p>
                       </div>
                    </div>

		</div>
			<div id=backtotop>
				<a href='#top'> <p> Back to top</p> </a>
			</div>


		<script>
			$('#menuBtn').click(function(){
				$('.mobileMenu').toggleClass('active');
			});
		</script>
	</body>
</html>