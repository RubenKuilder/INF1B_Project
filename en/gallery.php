<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet' href='../assets/stylesheets/hhstyle.css' type='text/css'/>
		<link rel='stylesheet' href='../assets/stylesheets/gallery.css' type='text/css'/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
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
				<a class="languageBtn" href="../nl/gallery.php">
					NL
				</a>
				<a class="languageBtn active" href="gallery.php">
					EN
				</a>
			</div>
			
			<div class="streepje"></div>
			
			<ul class="desktopMenu">
				<li><a href="agenda.php">Agenda</a></li>
				<li><a href="contactpagina.php">Contact</a></li>
				<li><a href="gallery.php">Media</a></li>	
				<li class="dropdown">
					<a href="opleidingen.php" class="dropbtn">Educations</a>
					<div class="dropdown-content">
						<a href="techniek.php">Technic</a>
						<a href="economie.php">Economy</a>
					</div>
				</li>			
			</ul>
			
			<div id="menuBtn">☰</div>
			<ul class="mobileMenu">
				<li><a href="agenda.php">Agenda</a></li>
				<li><a href="contact.php">Contact</a></li>
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
				<h1>Brighten your view at Hogeschool Hoogeveen</h1>
				<br>
				<h3>Look at our photos!</h3>
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