<!DOCTYPE html>
<html lang="nl">
	<head>
		<title>
			INF1B_Project
		</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		
	</head>
	<body>
		<!-- PHP language redirect script -->

	    <p>Checking for language settings.</p>
	    
	    <?php
	    // List of available localized versions as 'lang code' => 'url' map
	    $sites = array(
	        "en" => "en/index.php",
	        "nl" => "nl/index.php",
	    );

	    // Get 2 char lang code
	    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

	    // Set default language if a `$lang` version of site is not available
	    if (!in_array($lang, array_keys($sites)))
	        $lang = 'en';

	    // Finally redirect to desired location
	    header('Location: ' . $sites[$lang]);
	    ?>
	</body>
</html>