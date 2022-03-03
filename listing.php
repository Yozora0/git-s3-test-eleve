<?php require 'debut_html.inc.php'; ?>
<?php require 'menu_html.inc.php'; ?>
<?php 
$mabd = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', 'sae203', 'Kingdomhearts21_');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM games INNER JOIN dev ON games.id_dev_ = dev.id_dev";
$resultat = $mabd->query($req);
?>

<section class="content">
    <div class="content-list">
        <h1>UwU onii chan</h1>
<ul class="article">
            <img src="img/1.png" alt="">
            <div>
                <?php foreach ($resultat as $value) {
                    echo '<img class="game_img" src="img/games/'.$value['photo_game'].'">'.'<br>';
                    echo $value['name_game'] . ' , ' . $value['user_score_game'] . ' /10 ';
                    echo '<br> developpeur: ' . $value['name_dev']. '<hr>';
                }?>
           
    </div>
</section>

<?php require 'fin_html.inc.php'; ?>