<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulier</title>
	</head>
	 
	<body bgcolor="#CCFF66">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<h1>Inschrijven voor opleiding</h1>
			<h2 style="color:#F00">Persoonlijke gegevens</h2>
			
			Naam:
			<input type="text" name="voornaam" id="voornaam" placeholder="Voornaam">
			<input type="text" name="achternaam" id="achternaam" placeholder="achternaam">
			<br><br>
			
			wachtwoord:
			<input type="password" name="password" id="password"><br><br>
			 
			E-mail adres:
			<input type="text" name="email" id="email" placeholder="naam@example.com"><br><br>
			
			Geslacht:
			<input type="radio" name="geslacht" value="Man" id="radiogroup"> Man
			<input type="radio" name="geslacht" value="Vrouw" id="radiogroup"> Vrouw
			<input type="radio" name="geslacht" value="Overig" id="radiogroup"> Overig
			<br><br>
			
			Telefoonnummer:
			<input type="text" name="tel" id="tel">
			 
			<h2 style="color:#F00">Opleiding</h2>
			 
			Opleiding:
			
			<select name="opleiding" id="opleiding">
			<option selected>-- Selecteer a.u.b. --</option>
			<option>Werktuigbouwkunde</option>
					<option>Lifesience: Biologie en chemie</option>
					<option>Bedrijfsecnomie</option>
					<option>Logistiek</option>
				  </select><br>
				  <br>
			Engels: <input type="checkbox" name="engels" value="checkbox" id="CheckboxGroup1">Check om Engelstalige opleiding te volgen<br><br>
			<h2 style="color:#F00">
			
			Opmerkingen</h2>
			<textarea name="opmerkingen" cols="35" rows="5" id="textarea" placeholder="Vul eventuele bijzonderheden in"></textarea><br>
			<br>
			 
			<input type="submit" value="verstuur">
		</form>
		<?php
			error_reporting (E_ALL ^ E_NOTICE);
			$voornaam = $_POST["voornaam"];
			$achternaam = $_POST["achternaam"];
			$ww = $_POST["password"];
			$email = $_POST["email"];
			$geslacht = $_POST["geslacht"];
			$tel = $_POST["tel"];
			$op = $_POST["opleiding"];
			$en = $_POST["engels"];
			$opmerkingen = $_POST["opmerkingen"];
			
			$Bestand = fopen("$achternaam$voornaam.txt", 'w');
			fwrite($Bestand, $voornaam);
			fwrite($Bestand, $achternaam);
			fwrite($Bestand, $email);
			fwrite($Bestand, $geslacht);
			fwrite($Bestand, $tel);
			fwrite($Bestand, $op);
			fwrite($Bestand, $en);
			fwrite($bestand, $opmerkingen);
			fclose($Bestand);
		?>
	</body>
</html>