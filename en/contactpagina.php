<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel='stylesheet' href='../assets/stylesheets/hhstyle.css' type='text/css'/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
		
		<title> Hogeschool Hoogeveen</title>
		
	</head>
	
	<body>
		<a name="top"></a>	
		<div id="header"> 
			<a href='index.php'> 
			<img src='../assets/images/logohh.png' alt='Hogeschool Hoogeveen'> 
			</a>
			
			<div class="streepje"></div>
			
			<div id="languageSelect">
				<a class="languageBtn" href="../nl/contactpagina.php">
					NL
				</a>
				<a class="languageBtn active" href="contactpagina.php">
					EN
				</a>
			</div>
			
			<div class="streepje"></div>
			
			<ul class="desktopMenu">
				<li><a href="agenda.php">Agenda</a></li>
				<li><a href="contactpagina.php">Contact</a></a></li>
				<li><a href="gallery.php">Media</a></a></li>	
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
				<li><a href="gallery.php">Media</li>
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
							
			<div id='contactcontent'>
				<h1> Contact</h1>
				<p>Hogeschool Hoogeveen heeft één locatie. </p>
				<p>
					<div id="mapid" style=></div>
					
						<script>

							
							var mymap = L.map('mapid').setView([52.7267712,6.465842], 14);				
							L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
								maxZoom: 18,
								id: 'mapbox.streets'
								
							}).addTo(mymap);
							var Marker = L.icon({
								iconUrl: '../assets/images/pinpink.png',
								iconSize:     [100, 100], // size of the icon
								popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
							});
							
							L.marker([52.7296723, 6.4570349], {icon: Marker}).addTo(mymap);							

						</script>

				</p>
				
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<h2>Register for education</h2><p></p>
					<h3>Personal information</h3>
					
					Name:
					<input type="text" name="voornaam" id="voornaam" placeholder="First Name">
					<input type="text" name="achternaam" id="achternaam" placeholder="Last Name">
					<p></p>
					 
					E-mail adress:
					<input type="text" name="email" id="email" placeholder="name@example.com"><p></p>
					
					Gender:
					<input type="radio" name="geslacht" value="Man" id="radiogroup"> Man
					<input type="radio" name="geslacht" value="Vrouw" id="radiogroup"> Woman
					<input type="radio" name="geslacht" value="Overig" id="radiogroup"> Other
					<p></p>
					
					Phone Number:
					<input type="text" name="tel" id="tel"><p></p>
					 
					<h3>Education</h3>
					 
					Education:
					
					<select name="opleiding" id="opleiding">
					<option selected>-- Please select --</option>
					<option>Mechanical engineering</option>
							<option>Lifesience: Biology and chemistry</option>
							<option>Business economics</option>
							<option>Logistics</option>
						  </select><p></p>
						  
					English: <input type="checkbox" name="engels" value="checkbox" id="CheckboxGroup1">Check to follow English-language education<p></p>
					
					<h3>Comments</h3>
					<textarea name="opmerkingen" cols="35" rows="5" id="textarea" placeholder="Fill in any details"></textarea><p></p>
					 
					<input type="submit" value="Send">
				</form>
			<?php
				if(isset ($_POST["submit"])){
				$voornaam = $_POST["voornaam"];
				$achternaam = $_POST["achternaam"];
				$ww = $_POST["password"];
				$email = $_POST["email"];
				$geslacht = $_POST["geslacht"];
				$tel = $_POST["tel"];
				$op = $_POST["opleiding"];
				$en = $_POST["engels"];
				$opmerkingen = $_POST["opmerkingen"];
				
				$Bestand = fopen("$achternaam$voornaam.txt", 'w');
				fwrite($Bestand, $voornaam);
				fwrite($Bestand, $achternaam);
				fwrite($Bestand, $email);
				fwrite($Bestand, $geslacht);
				fwrite($Bestand, $tel);
				fwrite($Bestand, $op);
				fwrite($Bestand, $en);
				fwrite($bestand, $opmerkingen);
				fclose($Bestand);}
			?>
				
				<h2> Address data:</h2>
				<p> Hogeschool Hoogeveen </p>
				<p> Hoogestraat 99 </p>
				<p> 7912 AB Hoogeveen </p>					
	
				<h2> Mailing address: </h2>
				<p> mailbox 6969 </p>
				<p> 7912 AB Hoogeveen</p>

				<h2> Parking & public transport:</h2>
				<p> Students and staff can park their vehicles at the campus for free. 
				Other visitors have to pay 2 euros per hour. 
				The univursity is only a short distance away from the trainstation,
				where a lot of busses drive by.
				This makes the campus accessible for students who live far away from the school.</p>	
				
				<h2> Sociale media:</h2>	
				<p> Follow us on<a href='https://twitter.com/?lang=nl'> Twitter </a> </p>
				<p> Like our <a href='https://nl-nl.facebook.com/'> Facebook-page </a> </p>
				<p> Subscribe to our<a href='https://www.youtube.com/'> Youtube-channel </a> </p>
				
				<h2> Contact details:</h2>
				
				<div id='telefoonnummer'> <a> <p> +31 (0)6 25-732 134</p> </a> </div>
				<p> help@hogeschoolhoogeveen.nl</p>
				
			</div>

			<div class="clearFix"></div>
			
		
		</div>

		<div id="footer">
			<div id="footercontent">
			
				<div class="Links"> 
					<p>General</p>
					<ul>
						<a href="index.php"><li>Home</li></a>
						<a href="agenda.php"><li>Agenda</li></a>
						<a href="gallery.php"><li>Media</li></a>
					</ul>
				</div>
				
				<div class="Links"> 
					<p>Contact</p>
					<ul>
						<a href='contactpagina.php'> <li>Contact </li></a>
						<a href='contactpagina.php'> <li>Sign up </li></a>
					</ul>
				</div>
				<div class="Links"> 
					<p>Courses</p>
					<ul>
						<a href="opleidingen.php"><li>Courses</li></a>
						<a href="techniek.php"><li>Tech</li></a>
						<a href="economie.php"><li>Economics</li></a>
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