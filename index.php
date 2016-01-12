<?php require_once "php/CsvReader.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Legospiele Übersicht</title>
		<link rel="stylesheet" href="./css/project.css" />
		<script src="./javascript/jquery.min.js"></script>
		<script src="./javascript/project.js"></script>
	</head>
	<body>
		<a name="console"></a>
		<a name="dimensions"></a>
		<header>
			<img src="./images/3bricks.png" alt="" />
			Meine
			<img src="./images/logo.png" alt="Lego video games" />
			Übersicht
		</header>

		<div class="container">
			<nav>
				<ul class="menu">
					<li><a href="#console">Normale Konsolenspiele</a></li>
					<li><a href="#dimensions">Lego Dimensions</a></li>
				</ul>
			</nav>
			<br class="clearall">

			<?php $games = \Lego\CsvReader::get()->getConsoleGames(); ?>
			<section id="section_console">
				<div class="intro">
					<h1>Normale Konsolenspiele</h1>
					Hier eine Liste aller (zumindest nach aktuellem Pflegestand) Lego-Konsolenspiele (ohne Handhelds)
					und den Status wie weit ich sie durchgespielt hab.
					<ul>
						<li>Star Wars 1+2: Die ersten beiden waren vor meiner Legospielezeit... sollte ich mir irgendwann aber auch noch kaufen/leihen.</li>
						<li>Star Wars (komplette Saga): Ich sollte die blöden Herausforderungen doch noch fertig machen...</li>
						<li>Undercover: Zwei blöde Charakterstuds fehlen mir da noch</li>
						<li>Marvel Super Heroes: Hatte ich etwas länger verliehen und deswegen nicht weiterspielen können</li>
						<li>Movie: Steht als nächstes auf der Liste (wenn Zeit/Lust dazu)</li>
					</ul>
				</div>
				<?php foreach ($games as $game): ?>
					<?php require 'partial_game.php'; ?>
				<?php endforeach; ?>
			</section>

			<section id="section_dimensions">
				<div class="intro">
					<h1>Lego Dimensions</h1>
					Da hat Lego sich eine weitere herrliche Cashcow erschaffen. Leider bin ich noch nicht im Besitz davon. NOCH nicht!
				</div>
			</section>
		</div>

		<footer>
			<a href="http://videogames.lego.com/de-de">
				LEGO, das LEGO Logo, die Minifigur, DUPLO, BIONICLE, LEGENDS OF CHIMA, das FRIENDS Logo, das MINIFIGUREN Logo, DIMENSIONS, MINDSTORMS, MIXELS, NINJAGO, NEXO KNIGHTS und was weiss ich was noch alles sind Warenzeichen der LEGO Group.
			</a>
		</footer>
	</body>
</html>