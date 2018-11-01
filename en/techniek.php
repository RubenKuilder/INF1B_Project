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
            <div class='bollen'> 
            </div>

            <div id='achtergrondcontent'>
                <div id='backgroundimageTECH'> 
                </div>
            </div>

            <div id='textbox'>
                <h1> Werktuigbouwkunde & Lifescience</h1>
                <p> Bij de hbo-studies Werktuigbouwkunde en Lifescience leer je combinaties te maken om oplossingen te vinden voor je klanten. Je moet dus creatief zijn en klantgericht. Als werktuigbouwkundige en lifescientist is geen dag hetzelfde!​

                </p>

                <div class="meerknop">
                    <a href='#meerinformatie'> More </a>
                </div>

            </div>

            <div class="clearFix"></div>

        </div>
        <div class="informatiecontent">
            <div id="ecocontentbox">       


                <div class="middelsteBlok">
                    <h2> Werktuigbouwkunde</h2>
                    <p> 
                        Ben jij een echte doener? Ben jij degene die technische problemen creatief en effectief weet op te lossen? Heb je techniek altijd al interessant gevonden en ben je niet bang te experimenteren? Dan is de opleiding Werktuigbouwkunde iets voor jou!


                    </p>
                    <img src="../assets/Images/bouwmensen.png" alt="mechanical engineering picture">
                </div>
                <div class="middelsteBlok">
                    <h2> Lifescience</h2>  
                    <p> 
                        De naam van deze studie klinkt technischer dan de praktijk: met Lifescience leer je mét mensen bezig te zijn om vóór mensen onderzoek te doen. Als Lifescientist werk je in laboratoria in groepsverband aan onderzoeken waar de mens - letterlijk en figuurlijk - beter van wordt. Zo ontwikkel je nieuwe medicijnen en zoek je naar de oorzaken van ziekten. Of ben je betrokken bij de verbetering van oogsten. En met de richting Forensic Sciences ontdek je de wereld achter CSI! Ontdek de opleiding Lifescience!
                        

                    </p>
                    <img src="../assets/Images/chemie.png" alt="Lifesience & Chemestry picture">
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
            $('#menuBtn').click(function () {
                $('.mobileMenu').toggleClass('active');
            });
        </script>
    </body>
</html>