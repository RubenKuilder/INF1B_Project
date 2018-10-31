<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width">

		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#4ac0ff">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">

		<link rel='stylesheet' href='../assets/stylesheets/hhstyle.css' type='text/css'/>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		
		<title> Hogeschool Hoogeveen</title>
	</head>
	
	<body>
		<a name="top"></a>	
		<div id="header"> 
			<a href='index.php'> <img src='../assets/images/logohh.png' alt='Hogeschool Hoogeveen'> </a>
			
			<div class="streepje"></div>
			
			<div id="languageSelect">
				<a class="languageBtn active" href="contactpagina.php">
					NL
				</a>
				<a class="languageBtn" href="../en/contactpagina.php">
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
				<li><a href="contactpagina.php">Contact</a></li>
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

		<div id=content>
							
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
					<h2>Inschrijven voor opleiding</h2><p></p>
					<h3>Persoonlijke gegevens</h3>
					
					Naam:
					<input type="text" name="voornaam" id="voornaam" placeholder="Voornaam">
					<input type="text" name="achternaam" id="achternaam" placeholder="achternaam">
					<p></p>
					 
					E-mail adres:
					<input type="text" name="email" id="email" placeholder="naam@example.com"><p></p>
					
					Geslacht:
					<input type="radio" name="geslacht" value="Man" id="radiogroup"> Man
					<input type="radio" name="geslacht" value="Vrouw" id="radiogroup"> Vrouw
					<input type="radio" name="geslacht" value="Overig" id="radiogroup"> Overig
					<p></p>
					
					Telefoonnummer:
					<input type="text" name="tel" id="tel"><p></p>
					 
					<h3>Opleiding</h3>
					 
					Opleiding:
					
					<select name="opleiding" id="opleiding">
					<option selected>-- Selecteer a.u.b. --</option>
					<option>Werktuigbouwkunde</option>
							<option>Lifesience: Biologie en chemie</option>
							<option>Bedrijfsecnomie</option>
							<option>Logistiek</option>
						  </select><p></p>
						  
					Engels: <input type="checkbox" name="engels" value="checkbox" id="CheckboxGroup1">Check om Engelstalige opleiding te volgen<p></p>
					
					<h3>Opmerkingen</h3>
					<textarea name="opmerkingen" cols="35" rows="5" id="textarea" placeholder="Vul eventuele bijzonderheden in"></textarea><p></p>
					 
					<input name="submit" type="submit" value="verstuur">
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
				<h2> Adresgegevens: </h2>
				<p> Hogeschool Hoogeveen </p>
				<p> Hoogestraat 99 </p>
				<p> 7912 AB Hoogeveen </p>					
	
				<h2> Postadres: </h2>
				<p> Postbus 6969 </p>
				<p> 7912 AB Hoogeveen</p>

				<h2> Parkeren & OV:</h2>
				<p> Op de campus kunnen studenten en personeel hun voertuig gratis parkeren met hun studenten pas. 
				Overige bezoekers moeten een tarief betalen van 2 euro per uur. De hogeschool ligt op loopafstand van treinstation Hogeveen. Naar deze locatie rijden veel bussen. 
				Hierdoor is de campus erg toegankelijk voor studenten die op lange afstand wonen.</p>	
				
				<h2> Sociale media:</h2>	
				<p> Volg ons op <a href='https://twitter.com/?lang=nl'> Twitter </a> </p>
				<p> Like ons op <a href='https://nl-nl.facebook.com/'> Facebook </a> </p>
				<p> Abonneer op ons <a href='https://www.youtube.com/'> Youtube-kanaal </a> </p>
				
				<h2> Contactgegevens:</h2>
				
				<div id='telefoonnummer'> <a> <p> +31 (0)6 25-732 134</p> </a> </div>
				<p> help@hogeschoolhoogeveen.nl</p>
				
			</div>

			<div class="clearFix"></div>
			
		
		</div>

		<div id="footer">
			<div id="footercontent">
			
				<div class="Links"> 
					<p>Algemeen</p>
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
						<a href='contactpagina.php'> <li>Inschrijven </li></a>
					</ul>
				</div>
				<div class="Links"> 
					<p>Opleidingen</p>
					<ul>
						<a href="opleidingen.php"><li>Opleidingen</li></a>
						<a href="techniek.php"><li>Techniek</li></a>
						<a href="economie.php"><li>Economie</li></a>
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