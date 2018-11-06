<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
		
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
				<li><a href="contactpagina.php">Contact</a></li>
				<li><a href="gallery.php">Media</a></li>	
				<li class="dropdown">
					<a href="opleidingen.php" class="dropbtn">Courses</a>
					<div class="dropdown-content">
						<a href="techniek.php">Technical</a>
						<a href="economie.php">Economical</a>
					</div>
				</li>			
			</ul>
			
			<div id="menuBtn">☰</div>
			<ul class="mobileMenu">
				<li><a href="agenda.php">Agenda</a></li>
				<li><a href="contactpagina.php">Contact</a></li>
				<li><a href="gallery.php">Media</a></li>
				<li class="dropdown">
					<a href="opleidingen.php" class="dropbtn">Courses</a>
					<div class="dropdown-content">
						<a href="techniek.php">Technical</a>
						<a href="economie.php">Economical</a>
					</div>
				</li>
			</ul>					
		</div>

							
                    <div id='contactcontent'>
				<h1> Contact</h1>
				<p>Hogeschool Hoogeveen has one location. </p>
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
					<h2>Register for education</h2><p></p>
					<h3>Personal information</h3>
					
					Name:
					<input type="text" name="voornaam" id="voornaam" placeholder="First Name" required>
					<input type="text" name="achternaam" id="achternaam" placeholder="Last Name"required>
					<p></p>
					 
					E-mail adress:
					<input type="text" name="email" id="email" placeholder="name@example.com" required><p></p>
					
					Gender:
					<input type="radio" name="geslacht" value="Man"> Man
					<input type="radio" name="geslacht" value="Vrouw"> Woman
					<input type="radio" name="geslacht" value="Overig"checked> Other
					<p></p>
					
					Phone Number:
					<input type="text" name="tel" id="tel"required><p></p>
					 
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
				
				<h2> Address data:</h2>
				<p> Hogeschool Hoogeveen </p>
				<p> Hoogestraat 99 </p>
				<p> 7912 AB Hoogeveen </p>					
	
				<h2> Mailing address: </h2>
				<p> mailbox 6969 </p>
				<p> 7912 AB Hoogeveen</p>

                                <h2> Facilities:</h2>
				<p> Hogeschool Hoogeveen features a canteen, a lab, a desginstudio and multiple study- and classrooms.
                                These will often be visited by students.
                                </p>
                                
				<h2> Parking & public transport:</h2>
				<p> Students and staff can park their vehicles at the campus for free. 
				Other visitors have to pay 2 euros per hour. 
				The univursity is only a short distance away from the trainstation,
				where a lot of busses drive by.
				This makes the campus accessible for students who live far away from the school.</p>	
				
                                <h2> Schedule Log-in :</h2>	
				<p> At Hogeschool Hoogeveen you use <a href='https://twitter.com/?lang=nl'> Magister</a> to view your schedule.</p>
                                
				<h2> Social media:</h2>	
				<p> Follow us on<a href='https://twitter.com/?lang=nl'> Twitter </a> </p>
				<p> Like our <a href='https://nl-nl.facebook.com/'> Facebook-page </a> </p>
				<p> Subscribe to our<a href='https://www.youtube.com/'> Youtube-channel </a> </p>
				
				<h2> Contact details:</h2>
				
				<div id='telefoonnummer'> <a> <p> +31 (0)6 25-732 134</p> </a> </div>
				<p> help@hogeschoolhoogeveen.nl</p>
				
			</div>
                    </div>
			<div class="clearFix"></div>
			
		

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