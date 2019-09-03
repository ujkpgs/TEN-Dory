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
		<h2>Règles du jeu</h2>
		<h3>Le Morpion amélioré</h3>
		<p>Les règles sont fortement basées sur celles du jeu mondialement connu : le Morpion, également appelé <span class="italish">Tic Tac Toe</span>.</p>
		<p>Lors de votre tour, vous devez placer votre pion sur une petite case. Une fois que vous possédez trois points alignés dans le même grand carré (appelés <span class="italish">zones</span>), la zone vous appartient. Elle devient un de vos points.</p>
		<p>La partie se finit sur une victoire si vous parvenez à aligner trois points.</p>
		<h3>Particularités</h3>
		<p>Le jeu se divise en 9 zones. Lorsqu'un joueur joue un point, le joueur suivant devra obligatoirement jouer dans la zone correspondant au petit carré dans lequel le joueur vient de jouer.</p>
		<p>Par exemple : un joueur joue dans la case Bas-Droite de <span class="italish">n'importe quelle</span> zone. Le joueur suivant peut jouer où il veut, mais <span class="boldish">dans la zone Bas-Droite.</span></p>
		<p>Dans le cas où la zone vers laquelle un joueur est dirigé est déjà prise, il peut jouer <span class="boldish">où il le souhaite</span>, sans prendre compte des différentes zones.</p>
		<p>Ainsi, la stratégie est bien plus profonde. Vous devez faire attention à sécuriser une zone, mais également à ne pas envoyer votre adversaire dans une zone qui pourrait le satisfaire !</p>
		<h3>En cas d'égalité</h3>
		<p>Si plus aucune action n'est possible mais qu'une victoire n'a pas été attribuée, le joueur possédant le plus de grands carrés à gagné.</p>
		<p>Dans le cas d'une égalité, videz les grands carrés qui ne sont pas contrôlés par l'un des joueurs à égalité.</p>
		<p>Les joueurs à égalité continuent ainsi la partie en respectant les règles de bases, et ce, jusqu'à ce qu'un gagnant soit determiné.</p>
		<h3>Dans le cas du jeu à 3 joueurs</h3>
		<p>Afin d'éviter que la partie se répète et se déroule toujours dans le même sens, lors des parties avec plus de deux joueurs, une nouvelle règle est établie.</p>
		<p class="boldish">Lorsqu'un point est marqué, le sens du jeu est inversé.</p>
		<p>Ainsi, si le jeu tourne dans l'ordre croissant <span class="italish">(1, 2, 3)</span>, lorsqu'un point est marqué, il commencera à tourner dans l'autre sens <span class="italish">(3, 2, 1)</span>. Les autres règles ne sont pas modifiées.</p>
	</div>

	<div id="rulesPop">
		<p>Afficher les règles</p>
	</div>

	<script src="js/script.js"></script>
</body>
</html>

