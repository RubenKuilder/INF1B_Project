<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel='stylesheet' href='hhstyle.css' type='text/css'/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
		
		<title> Hogeschool Hoogeveen</title>
		
	</head>
	
	<body>
		<a name="top"></a>	
		<div id=header> 
			<a href='hmtlhogeschool.html'> <img src='images/logohh.png' alt='Hogeschool Hoogeveen'> </a>
			
			<div class=streepje></div>
			
			<div id="languageSelect">
				<a class="languageBtn active" href="contactpagina.html">
					NL
				</a>
				<a class="languageBtn" href="contactpaginaEN.html">
					EN
				</a>
			</div>
			
			<div class=streepje></div>
			
			<ul class="desktopMenu">
				<li><a href="#">Agenda</a></li>
				<li><a href="#">Inschrijven</a></a></li>
				<li><a href="#">Media</a></a></li>	
				<li class="dropdown">
					<a href="#" class="dropbtn">Opleidingen</a>
					<div class="dropdown-content">
						<a href="#">Opleiding 1</a>
						<a href="#">Opleiding 2</a>
					</div>
				</li>			
			</ul>
			
			<div id="menuBtn">☰</div>
			<ul class="mobileMenu">
				<li>Agenda</li>
				<li>Inschrijven</li>
				<li>Media</li>
				<li class="dropdown">
					<a href="#" class="dropbtn">Opleidingen</a>
					<div class="dropdown-content">
						<a href="#">Opleiding 1</a>
						<a href="#">Opleiding 2</a>
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
								iconUrl: 'images/pinpink.png',
								iconSize:     [100, 100], // size of the icon
								popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
							});
							
							L.marker([52.7296723, 6.4570349], {icon: Marker}).addTo(mymap);							

						</script>

				</p>
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

		<div id=footer>
			<div id=footercontent>
			
				<div class=Links> 
					<p>Links</p>
					<ul>
						<li>Opleidingen </li>
						<li>Media </li>
						<li>Roosters </li>
						<li>Inschrijven </li>
						<li>Agenda </li>
					</ul>
				</div>
				
				<div class=Links> 
					<p>Contact</p>
					<ul>
						<a href='contactpagina.html'> <li>Informatie </li> </a>
					</ul>
				</div>
				<div id=gegevens>
				    <p> Adres: Hogeschool Hoogeveen, Hoogestraat 99</p>
					<a> <p> 06 25-73 21-34</p> </a>
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