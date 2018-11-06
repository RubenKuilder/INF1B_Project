<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width">
		<!--favicon files begin-->
		<link rel="apple-touch-icon" sizes="180x180" href="../faviconfiles/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../faviconfiles/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../faviconfiles/favicon-16x16.png">
		<link rel="manifest" href="../faviconfiles/site.webmanifest">
		<link rel="mask-icon" href="../faviconfiles/safari-pinned-tab.svg" color="#4ac0ff">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<!--favicon files end-->
		<link rel='stylesheet' href='../assets/stylesheets/hhstyle.css' type='text/css'/>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		
		<title> Hogeschool Hoogeveen</title>
	</head>
	
	<body>
		<a id="top"></a>	
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
		</div>

							
			<div id='contactcontent'>
				<h1> Contact</h1>
				<p>Hogeschool Hoogeveen heeft één locatie. </p>
					<div id="mapid"></div>
					
						<script>

							
							var mymap = L.map('mapid').setView([52.7296723, 6.4570349], 14);				
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
                            <div class='formuliercontent'>
				<form class='formulier' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<h2>Inschrijven voor opleiding</h2><p></p>
					<h3>Persoonlijke gegevens</h3>
					
					Naam:
					<input type="text" name="voornaam" id="voornaam" placeholder="Voornaam" required>
					<input type="text" name="achternaam" id="achternaam" placeholder="achternaam" required>
					<p></p>
					 
					E-mail adres:
					<input type="text" name="email" id="email" placeholder="naam@example.com"required><p></p>
					
					Geslacht:
					<input type="radio" name="geslacht" value="Man"> Man
					<input type="radio" name="geslacht" value="Vrouw"> Vrouw
					<input type="radio" name="geslacht" value="Overig" checked> Overig
					<p></p>
					
					Telefoonnummer:
					<input type="text" name="tel" id="tel"required><p></p>
					 
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
				$voornaamtxt = "Voornaam: " . $_POST["voornaam"] . "\r\n";
				$achternaam = $_POST["achternaam"];
				$achternaamtxt = "Achternaam: " . $_POST["achternaam"] . "\r\n";
				$email = "E-mailadres: " . $_POST["email"] . "\r\n";
				$geslacht = "Geslacht: " . $_POST["geslacht"] . "\r\n";
				$tel = "Telefoonnummer: " . $_POST["tel"] . "\r\n";
				$op = "Dit is de opleiding die deze persoon wil gaan volgen: " . $_POST["opleiding"] . ".\r\n";
				
				if(!empty($_POST['engels'])){
				$en = "Deze persoon wil een engelstalige opleiding volgen.\r\n";
				}
				else{
					$en = "Deze persoon wil geen engelstalige opleiding volgen.\r\n";	
				}
				if(!empty($_POST["opmerkingen"])){
					
				$opmerkingen ="Dit zijn de opmerkingen: " . $_POST["opmerkingen"] . ".\r\n";
				}
				else{
					$opmerkingen = "De persoon heeft geen opmerkingen ingevuld.";
				}
				$Bestand = fopen("$achternaam$voornaam.txt", 'w');
				fwrite($Bestand, $voornaamtxt);
				fwrite($Bestand, $achternaamtxt);
				fwrite($Bestand, $email);
				fwrite($Bestand, $geslacht);
				fwrite($Bestand, $tel);
				fwrite($Bestand, $op);
				fwrite($Bestand, $en);
				fwrite($Bestand, $opmerkingen);
				fclose($Bestand);}
			?>
				<h2> Adresgegevens: </h2>
				<p> Hogeschool Hoogeveen </p>
				<p> Hoogestraat 99 </p>
				<p> 7912 AB Hoogeveen </p>					
	
				<h2> Postadres: </h2>
				<p> Postbus 6969 </p>
				<p> 7912 AB Hoogeveen</p>

                                <h2> Faciliteiten:</h2>
				<p> Hogeschool Hoogeveen beschikt over een kantine, een labaratorium, een ontwerpstudio en meerdere studieruimtes.
                                Deze zullen vaak bezocht worden door studenten.
                                </p>
                                
				<h2> Parkeren & OV:</h2>
				<p> Op de campus kunnen studenten en personeel hun voertuig gratis parkeren met hun studenten pas. 
				Overige bezoekers moeten een tarief betalen van 2 euro per uur. De hogeschool ligt op loopafstand van treinstation Hogeveen. Naar deze locatie rijden veel bussen. 
				Hierdoor is de campus erg toegankelijk voor studenten die op lange afstand wonen.</p>	

                                <h2> Inloggen rooster:</h2>	
				<p> Voor het bekijken van het rooster maakt Hogeschool Hoogeveen gebruik van <a href='https://twitter.com/?lang=nl'> Magister.</a> </p>
                                
				<h2> Sociale media:</h2>	
				<p> Volg ons op <a href='https://twitter.com/?lang=nl'> Twitter </a> </p>
				<p> Like ons op <a href='https://nl-nl.facebook.com/'> Facebook </a> </p>
				<p> Abonneer op ons <a href='https://www.youtube.com/'> Youtube-kanaal </a> </p>
				
				<h2> Contactgegevens:</h2>
				
				<div id='telefoonnummer'> <a> <p> +31 (0)6 25-732 134</p> </a> </div>
				<p> help@hogeschoolhoogeveen.nl</p>
				
			</div>
                    </div>
			<div class="clearFix"></div>
			
		

		<div id="footer">
			<div id="footercontent">
			
				<div class="Links"> 
					<p>Algemeen</p>
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
						<li><a href='contactpagina.php'>Inschrijven</a></li>
					</ul>
				</div>
				<div class="Links"> 
					<p>Opleidingen</p>
					<ul>
						<li><a href="opleidingen.php">Opleidingen</a></li>
						<li><a href="techniek.php">Techniek</a></li>
						<li><a href="economie.php">Economie</a></li>
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