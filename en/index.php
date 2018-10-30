<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet' href='../assets/stylesheets/hhstyle.css' type='text/css'/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		
		<title> Hogeschool Hoogeveen</title>
	</head>
	
	<body>
		<a name="top"></a>	
		<div id=header> 
			<a href='hmtlhogeschool.html'> <img src='../assets/images/logohh.png' alt='Hogeschool Hoogeveen'> </a>
			
			<div class=streepje></div>
			
			<div id="languageSelect">
				<a class="languageBtn" href="../nl/index.php">
					NL
				</a>
				<a class="languageBtn active" href="index.php">
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
			
			<div id='achtergrondcontent'>
				<div id='backgroundimage'> </div>
			</div>
							
			<div id='textbox'>
				<h1>  Dit moet idd nog int engels pik autist </h1>
				<p> Hogeschool Hoogenveen daagt jou elke dag uit om je talenten te ontwikkelen. 
				Onze docenten zullen je voorbereiden op een wereld die schreewt om vernieuwing.
				Op onze school zul je leren oplossingen te vinden op problemen die veel impact hebben op de toekomst.
				Met een onbeperkt aantal inschrijfplekken is er genoeg ruimte voor mensen met nieuwe ideeën. 
				
				</p>
			
			<div class="meerknop">
				<a href='#meerinformatie'> More </a>
			</div>
			
			</div>

			<div class="clearFix"></div>
			
		
		</div>
		<div class='informatiecontent'>
			<a name='meerinformatie' > <h1>Hogeschool Hoogeveen</h1> </a>
			<p> Hogeschool Hoogeveen is net nieuw en heeft momenteel 100 leerlingen, 
			maar de school wil graag groeien en heeft een onbeperkt aantal plekken. 
			De Hogeschool heeft 2 opleidingen: Technische opleidingen 'werktuigbouwkunde' en 'Lifesience biologie en chemie', 
			ook heeft beschikt de school over de economische opleidingen 'bedrijfseconomie' en 'logistiek'. 
			Alle opleidingen worden ook gegeven in het engels</p>
		
			<div id="pinbox">
				<div class='punten'>
					<img src="../assets/images/pin.png" alt="pin">
					<h1> Weinig uitval</h1>
					<p> Op onze hogeschool hebben wij weinig uitval</p>
				</div>
				<div class='punten'>
					<img src="../assets/images/pin.png" alt="pin">
					<h1> Top opleidingen</h1>
					<p> Op onze hogeschool hebben wij de beste opleidingen</p>
				</div>
				<div class='punten'>
					<img src="../assets/images/pin.png" alt="pin">
					<h1> Engelstalig</h1>
					<p> Onze opleidingen worden ook gegeven in het Engels</p>
				</div>
				<div class="clearFix"></div>
			</div>
			
			<div class="meerknop">
				<a href='#'> Inschrijven </a>
			</div>
			
		<div id="opleidingen">
			<div class='pinkblue'> 
				<img src="../assets/images/werktuigbouwkunde.png" alt="pin"> 
				<div class='opleidingtekst'> <p> WERKTUIGBOUWKUNDE</p> </div>
			</div>
			<div class='pinkblue'> 
				<img src="../assets/images/economie.png" alt="pin">  
				<div class='opleidingtekst'> <p> BEDRIJFSECONOMIE & LOGISTIEK</p> </div>
			</div>
			<div class='pinkblue'> 
				<img src="../assets/images/lifesience.png" alt="pin">  
				<div class='opleidingtekst'> <p> LIFESIENCE EN CHEMIE</p> </div>
			</div>
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