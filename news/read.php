<?php
require_once('../content/header.php'); ?>


<?php 

$reponse = $bdd->query("SELECT * FROM news where id=".$_GET['id'].";");
$donnees = $reponse->fetch();
?>

<div class="container">
    <center><h1><?php echo $donnees['title']; ?></h1></center>
    <?php echo $donnees['content']; ?>
    <hr>
    <p style="text-align: right;">News write by <?php echo $donnees['autor']; ?> at <?php echo $donnees['date']; ?></p>
</div>


<?php
require_once('../content/footer.php'); ?>