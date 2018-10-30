<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet' href='../assets/stylesheets/hhstyle.css' type='text/css'/>
		<link rel='stylesheet' href='../assets/stylesheets/gallery.css' type='text/css'/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		
		<title> Hogeschool Hoogeveen</title>
	</head>
	
	<body>
		<a name="top"></a>	
		<div id=header> 
			<img src='../assets/images/logohh.png' alt='Hogeschool Hoogeveen'>
			
			<div class=streepje></div>
			
			<div id="languageSelect">
				<a class="languageBtn active" href="gallery.php">
					NL
				</a>
				<a class="languageBtn" href="../en/gallery.php">
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
				<h1>Verleg je grenzen bij Hogeschool Hoogeveen</h1>
				<br>
				<h3>Bekijk onze foto's!</h3>
			</div>

			<div class="clearFix"></div>
			
		</div>
		<div class='informatiecontent'>
		
			<div class="gallerySelect">
				<?php
					function albumButton(){
					$source= glob("../assets/gallery/*",GLOB_ONLYDIR);
						if(count($source)){
							natcasesort($source);
							foreach ($source as $albumPath){
								$album = str_replace('_',' ',substr($albumPath,18));
								echo '
								<div class="responsive">
								    <div class="menuItem">
										<form action="gallery.php" method="post">
											<input type="submit" name="submit" value="'.$album.'">
										</form>
									</div>
								</div>';
							}
						}else{
							echo 'Sorry, geen albums om te weergeven';
						}
					}
					albumButton();
				?>
				<div class="clearFix"></div>
			</div>
			
			<div class="photos">
				<?php
					function showcase($album = "Onze school"){
						echo '
							<div class=galleryTitle>
								<div class="galleryTitle2">
									'.$album.'
								</div>
							</div>';
						$source= glob("../assets/gallery/".str_replace(' ','_',$album)."/*.*");
						if(count($source)){
							natcasesort($source);
							foreach ($source as $pic){
								echo '
								<a href="'.$pic.'">
									<div class="responsive"> 
										<div class="gallery" style="background-image:url('.$pic.');">
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
				$('.mobileMenu').toggleClass('active');
			});
		</script>
	</body>
</html>