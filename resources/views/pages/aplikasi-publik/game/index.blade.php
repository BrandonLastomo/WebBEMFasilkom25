<!DOCTYPE html>

<html>
	<head>	
		<meta charset="utf-8">
		<title>Computer Terms Word Search Game!</title>
	</head>
	<body>
		<h1>Computer Terms Word Search Game!</h1>
		<h2 id = "instructions"></h2>
		<h3 id = "themeIntro">The theme is: </h3><h3><span id = "wordTheme"></span></h3>
		
		<button id = "newGameButton" type = "button">New Game</button>
		<div id = "wordboard"></div>
		<div id = "wordlist"></div>
		<button id = "solveButton" type = "button">Release the sacred answers!</button>

		<link rel="stylesheet" href="{{ asset('game/assets/css/style.css') }}">

		<script src = https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js></script>

		<script src="{{ asset('game/assets/js/wordpaths.js') }}"></script>
        <script src="{{ asset('game/assets/js/wordsearchcontroller.js') }}"></script>
        <script src="{{ asset('game/assets/js/wordsearchlogic.js') }}"></script>
        <script src="{{ asset('game/assets/js/wordsearchview.js') }}"></script>

		<script>	
			$(document).ready( function() {
				new WordSearchController("#wordboard", "#wordlist", "#solveButton", "#newGameButton", "#instructions", 
					"#wordTheme");
			})
		</script>
	</body>
</html>