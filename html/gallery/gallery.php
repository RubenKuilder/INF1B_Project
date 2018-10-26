<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet' href='../hhstyle.css' type='text/css'/>
		<link rel='stylesheet' href='gallery.css' type='text/css'/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		
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
			
			<ul id="desktopMenu">
				<li> Agenda</li>
				<li> Inschrijven</li>
				<li> Roosters</li>
				<li> Media</li>	
				<li> Opleidingen</li>				
			</ul>
			
			<div id="menuBtn">☰</div>
			<ul id="mobileMenu">
				<li> Agenda</li>
				<li> Inschrijven</li>
				<li> Roosters</li>
				<li> Media</li>	
				<li> Opleidingen</li>				
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
			
		
		</div>
		<div class='informatiecontent'>
		
			<div class="gallerySelect">
				<div class="responsive">
				  <div class="menuItem">
					<form action="gallery.php" method="post">
						<input type="submit" name='submit' value="showcase">
					</form>
				  </div>
				</div>
				<div class="responsive">
				  <div class="menuItem">
					<form action="gallery.php" method="post">
						<input type="submit" name='submit' value="opendag">
					</form>
				  </div>
				</div>
				<div class="responsive">
				  <div class="menuItem">
					<form action="gallery.php" method="post">
						<input type="submit" name='submit' value="sportdag">
					</form>
				  </div>
				</div>
				<div class="responsive">
				  <div class="menuItem">
					
				  </div>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="photos">
				<?php
					function showcase($album = "showcase"){
						$source= glob($album."/*.*");
						if(count($source)){
							natcasesort($source);
							for ($i=1; $i<count($source);$i++){
								$num= $source[$i];
								echo '
								<a href="'.$num.'">
									<div class="responsive"> 
										<div class="gallery" style="background-image:url('.$num.');">
										</div>
									</div>
								</a>';
							}
						}else{
							echo 'Sorry, geen afbeeldingen om te weergeven';
						}
					}
					
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$gallery = ($_POST['submit']);
						showcase($gallery);
					}else{
						showcase();
					}
				?>
				<div class="clearfix"></div>
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
			$('#menuBtn').click(function(){
				$('#mobileMenu').toggleClass('active');
			});
		</script>
	</body>
</html>