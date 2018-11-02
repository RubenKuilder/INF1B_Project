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


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
		
		<title>Hogeschool Hoogeveen</title>
	</head>
	
	<body>
		<a id="top"></a>	
		<div id="header"> 
			<a href='index.php'> <img src='../assets/images/logohh.png' alt='Hogeschool Hoogeveen'> </a>
			
			<div class="streepje"></div>
			
			<div id="languageSelect">
				<a class="languageBtn" href="../nl/economie.php">
					NL
				</a>
				<a class="languageBtn active" href="economie.php">
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
		<div id=content>
			<div class='bollen'> 
			</div>
			
			<div id='achtergrondcontent'>
				<div id='backgroundimageECO'> </div>
			</div>
							
			<div id='textbox'>
				<h1> Business Economics & Logistics</h1>
				<p> A broad base is needed in marketing and sales.
                                    You learn to work together, present and pitch. 
                                    And you learn to deal with a world that changes faster and faster.
                                    You also do regular research. 
                                    This way you will find out what the customer wants. 
                                    And how you reach the right target group and make your product really distinctive.

				</p>
			
			<div class="meerknop">
				<a href="#ecocontentbox"> More </a>
			</div>
			
			</div>

			<div class="clearFix"></div>
		
		</div>
                        <div class="informatiecontent">
                            <div>
                                <div>
        <section class="rel">
            <div class="nonclick"></div>
            
               <iframe src="https://www.quintrics.nl/OneBusiness/v1/Instruments/IndicesBar" style="width:100%;height:61px;"></iframe>
               
                <script> define('SCRIPT_DEBUG', true);</script>
        </section>

                </div>
            </div>
                            
        <div id="ecocontentbox">       
            
                            
            <div class="middelsteBlok">
                <h2> Business Economics</h2>
                <p> 
                    This course gives you a lot of knowledge in the field of marketing, purchasing, business administration and economics. 
                    Here you will also build up your personal and researching skills, which you can immediately apply in practice.
                    Here you really learn to think along about the future of an organization. 
                </p>
                <img src="../assets/Images/blijeMensen.png" alt="eonomie foto">
            </div>
            <div class="middelsteBlok">
                <h2> Logistics</h2>  
                <p> 
                    As a manager in logistics, you have a varied and responsible job. 
                    With your professional knowledge you ensure that important business processes such as storage, transport, planning and goods flow run smoothly or you are responsible for the ins and outs of a production department.
                </p>
                <img src="../assets/Images/blijeLogistiek.png" alt="eonomie foto">
            </div>
                    
            <div class="rssFeedBox">
                
    <?php 
        $feed  = "https://www.beurs.nl/rss/nieuws.rss";
        $xml = simplexml_load_file($feed);
        $xml2 = simplexml_load_file($feed);
        
          
    
          
          
                
                foreach ($xml->channel->item as $item2){
                echo "<div class='filler'>";
                    //showed de title, description en link op de pagina van de $feed (kan uitgebreid worden met meerdere dingen als pagina het heeft.
                echo "<div class='kleur fontSize'>" .$item2->title . "</div><br>";
            
                echo  "<div class='color'>" . $item2->description . "</div><br>";
                echo "</div>";
                echo  "<div class='color'>" . $item2->pubDate . "</div><br><br>";
                //echo "<div class='size2'><div class='color'> ". $item2->link ." </div><div>";  
                }
                
    ?>
            </div>
            

        </div>  
<!-- end sw-rss-feed code -->


<!--        <div id="IframeWrapper" style="position: relative;">
   
        
    <div id="iframeBlocker" style="position:absolute; top: 0; left: 0; width:95%; height:95%;background-color:aliceblue;opacity:0.1;"></div>
</div>

-->

                            <div class="clearFix"></div>
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