<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width">
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
                <a class="languageBtn" href="../nl/techniek.php">
                    NL
                </a>
                <a class="languageBtn active" href="techniek.php">
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
        <div id="content">
            <div class='bollen'> 
            </div>

            <div id='achtergrondcontent'>
                <div id='backgroundimageTECH'> 
                </div>
            </div>

            <div id='textbox'>
                <h1> Mechanical Engineering & Lifescience</h1>
                <p> During the Mechanical Engineering and Lifescience studies, you learn to make combinations to find solutions for your customers. So you have to be creative and customer-oriented. As a mechanical and life sciences specialist, no day is the same!

                </p>

                <div class="meerknop">
                    <a href='#meerinformatie'> More </a>
                </div>

            </div>

            <div class="clearFix"></div>

        </div>
        <div class="informatiecontent">
            <a id='meerinformatie'> </a>
            <div id="ecocontentbox">       


                <div class="middelsteBlok">
                    <h2> Mechanical engineering</h2>
                    <p> 
                        Are you a real do-er? Are you the one who knows how to solve technical problems creatively and effectively? Have you always found technology interesting and are you not afraid to experiment? Then the Mechanical Engineering course is for you!


                    </p>
                    <img src="../assets/images/bouwmensen.png" alt="mechanical engineering picture">
                </div>
                <div class="middelsteBlok">
                    <h2> Lifescience</h2>  
                    <p> 
                        The name of this study sounds more technical than practice: with Lifescience you learn to work with people to do research for people. As a Lifescientist, you work in laboratories in groups on research that - literally and figuratively - benefits people. You develop new medicines and look for the causes of diseases. Or are you involved in improving harvests? And with the course Forensic Sciences you discover the world behind CSI! Discover the Lifescience programme!
                        

                    </p>
                    <img src="../assets/images/chemie.png" alt="Lifesience & Chemestry picture">
                </div>

                <div class="rssFeedBox">

                    <?php
                    $feed = "https://www.technologyreview.com/topnews.rss";
                    $xml = simplexml_load_file($feed);
                    $xml2 = simplexml_load_file($feed);






                    foreach ($xml->channel->item as $item2) {
                        echo "<div class='filler'>";
                        //showed de title, description en link op de pagina van de $feed (kan uitgebreid worden met meerdere dingen als pagina het heeft.
                        echo "<div class='kleur fontSize'>" . $item2->title . "</div><br>";

                        echo "<div class='color'>" . $item2->description . "</div><br>";
                        echo "</div>";
                        echo "<div class='color'>" . $item2->pubDate . "</div><br><br>";
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
            $('#menuBtn').click(function () {
                $('.mobileMenu').toggleClass('active');
            });
        </script>
    </body>
</html>