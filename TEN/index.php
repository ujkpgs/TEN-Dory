<!DOCTYPE html>
<html>
	<head>
		<title>TEN</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
	<?php 

		$tabCouleurs = array('ROUGE', 'VERT', 'BLEU', 'CYAN', 'JAUNE', 'VIOLET', 'ROSE', 'ORANGE', 'MARRON', 'GRIS');


		function minMorpion(int $numMorpion){
			echo('<div class="grid-container minMorpion">');
			for ($i=1; $i <= 9 ; $i++) { 
				echo('<div class="minMorpion'.$numMorpion.'.'.$i.'"></div>');
			}
			echo('</div>');
		}

		function morpion(){
			echo ('<div class="grid-container morpion">');
			for ($i=1; $i <= 9 ; $i++) { 
				echo ('<div class="item'.$i.'">');
				minMorpion($i);
				echo '</div>';
			}
			echo ('</div>');

			
		}

		function couleurJoueurs(int $nombreJoueurs, $tabCouleurs){
			for ($i=1; $i <= $nombreJoueurs ; $i++) { 
				echo ('<div id="clrP'.$i.'">');
				echo ('<h3>Player '.$i.'</h3>');
				foreach ($tabCouleurs as $maCouleur) {
					echo('<div class="colorSlctBtn CLR'.$maCouleur.'"><p>'.$maCouleur.'</p></div>');
				}
				echo ('</div>');
			}			
		}


 	?>
	<content>
		<div id="game">
			<?php 
				morpion();
			 ?>
		</div>
	</content>

	<div id="options">
		<div id="colorSelect">
			<h2>COLOR SELECTOR</h2>
			<div id="flexCLR">
						<?php 
							couleurJoueurs(3, $tabCouleurs);
						 ?>		
			</div>
		</div>
	</div>

	<div id="rules">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<script src="js/script.js"></script>
</body>
</html>

