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
		<!--favicon files begin-->
		<link rel="apple-touch-icon" sizes="180x180" href="../faviconfiles/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../faviconfiles/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../faviconfiles/favicon-16x16.png">
		<link rel="manifest" href="../faviconfiles/site.webmanifest">
		<link rel="mask-icon" href="../faviconfiles/safari-pinned-tab.svg" color="#4ac0ff">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<!--favicon files end-->
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
				<a class="languageBtn active" href="agenda.php">
					NL
				</a>
				<a class="languageBtn" href="../en/agenda.php">
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

		<div id="content">
			
			<div id='achtergrondcontent'>
				<div id='backgroundimage'> </div>
			</div>
							
			<div id='textbox'>
				<h1>Agenda evenementen Hogeschool Hoogeveen</h1>
				<p> Dit is de officiële roosterpagina van Hogeschool Hoogeveen. 
                                    Op deze pagina kunt u roostervrije dagen/ vakanties vinden en andere evenementen die ingeroosterd staan bekijken op de agenda van de studenten en leraren.
				
				</p>
			<div class="meerknop">
				<a href='#decontent'> More </a>
			</div>
			
			</div>

			<div class="clearFix"></div>
			
		
		</div>
                <a name="decontent"> </a>
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


			$(document).ready(function() {
				$('#menuBtn').click(function(){
					$('.mobileMenu').toggleClass('active');
				});

				$('#calendar').fullCalendar({
				header: {
				    left: 'title', //left: 'prev,next today',
                                    center: '', //center: 'title',
                                    right: 'prev, agendaWeek, agendaDay, month ,listWeek, next today' //'month,agendaWeek,agendaDay,listWeek'
				  },
				defaultDate:
                                        
                                '<?php
                                        $t=time();
                                        echo(date("Y-m-d",$t));
                                ?>',
                                            
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