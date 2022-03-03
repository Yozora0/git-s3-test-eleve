<?php require 'debut_html.inc.php'; ?>
<?php require 'menu_html.inc.php'; ?>


    <main>

	<h1>Bienvenue sur la database des jeux Nintendo</h1>
    <p> vous y retrouverez les 50 jeux les mieux notés des consoles Nintendo !</p>
    <div class="form">
<form action="reponse_recherche.php" method="POST">
	<div class="recherche">
		<label>Rechercher un jeu</label>
		<input type="text" name="jeu" placeholder="" id="text">
	</div>
	<div class="recherche">
		<label>date de sortie</label>
		<input type="number" name="date" placeholder="" id="text">
	</div>
	<div class="recherche">
		<label>Rechercher un développeur</label>
		<input type="text" name="dev" placeholder="" id="text">
	</div>
	<input type="submit" name="Rechercher" value="Rechercher" id="rechercher">
	<form action="reponse_recherche.php" data-parsley-validate>
</form>
</div>


    </main>

    <?php require 'fin_html.inc.php'; ?>