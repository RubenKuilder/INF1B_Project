<!DOCTYPE html>
<html lang="en">
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
		<div id="header"> 
			<a href='index.php'> 
			<img src='../assets/images/logohh.png' alt='Hogeschool Hoogeveen'> 
			</a>
			
			<div class="streepje"></div>
			
			<div id="languageSelect">
				<a class="languageBtn" href="../nl/agenda.php">
					NL
				</a>
				<a class="languageBtn active" href="agenda.php">
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
			
			<div id='achtergrondcontent'>
				<div id='backgroundimage'> </div>
			</div>
							
			<div id='textbox'>
				<h1>Brighten your view at Hogeschool Hoogeveen</h1>
				<p>Our school is constantly pushing you to develop your talents. Our teachers wil prepare you for a ever changing world. On our school you'll learn to find solutions to problems that have a big impact on the future. With unlimited registrations for students there is enough space for people with innovating ideas.</p>
			
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