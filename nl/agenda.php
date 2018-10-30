<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet' href='hhstyle.css' type='text/css'/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		<link href='../assets/stylesheets/fullcalendar.min.css' rel='stylesheet' />
		<link href='../assets/stylesheets/hhstyle.css' rel='stylesheet' />
		<link href='../assets/stylesheets/fullcalendar.print.min.css' rel='stylesheet' media='print' />
		<script src='../assets/scripts/moment.min.js'></script>
		<script src='../assets/scripts/fullcalendar.min.js'></script>
		<title> Hogeschool Hoogeveen</title>
	</head>
	
	<body>
		<a name="top"></a>	
		<div id=header> 
			<img src='images/logohh.png' alt='Hogeschool Hoogeveen'>
			
			<div class=streepje></div>
			
			<div id="languageSelect">
				<a class="languageBtn active" href="#">
					NL
				</a>
				<a class="languageBtn" href="#">
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
				<h1> Verleg je grenzen bij Hogeschool Hoogeveen  </h1>
				<p>Door je grenzen te verleggen bereik je meer. 
				Daarom dagen onze docenten je iedere dag uit je talenten te ontdekken en te ontwikkelen.
				Deze ontdekkingsreis overstijgt de grenzen van je opleiding.
				Je doet namelijk ook kennis op bij andere opleidingen en zelfs buiten de muren van onze hogeschool.
				
				</p>
			
			<div class="meerknop">
				<a href='#'> More </a>
			</div>
			
			</div>

			<div class="clearFix"></div>
			
		
		</div>
		<div class='informatiecontent'>
			<div class="agendadiv">
			
				<div id='script-warning'>
					<code>../assets/php/get-events.php</code> must be running.
				</div>

				<div id='loading'>loading...</div>

				<div id='calendar'></div>

			</div>
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
						<li>Contact </li>
						<li>Informatie </li>
					</ul>
				</div>
				<div id=gegevens>
				    <p> Adres: Hogeschool Hoogeveen, Hoogestraat 99</p>
					<p> 06 25-73 21-34</p>
					<p> help@hogeschoolhoogeveen.nl</p>
				</div>	
				
			</div>

		</div>
			<div id=backtotop>
				<a href='#top'> <p> Back to top</p> </a>
			</div>


		<script>


			$(document).ready(function() {
				$('#menuBtn').click(function(){
					$('.mobileMenu').toggleClass('active');
				});

				$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay,listWeek'
				  },
				  defaultDate: '2018-03-12',
				  editable: true,
				  navLinks: true, // can click day/week names to navigate views
				  eventLimit: true, // allow "more" link when too many events
				  events: {
					url: '../assets/php/get-events.php',
					error: function() {
					  $('#script-warning').show();
					}
				  },
				  loading: function(bool) {
					$('#loading').toggle(bool);
				  }
				});

			});
		</script>
	</body>
</html>