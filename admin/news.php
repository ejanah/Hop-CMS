<?php
require_once('../content/header.php');
$limite = 10;
$reponse = $bdd->query('SELECT id, title, content, img, date, autor, type FROM news ORDER BY date DESC;');
    echo '
    <h1 style="text-align: center;">Gérer les actualités</h1>
    <div class="container">

    <table class="striped">
        <thead>
          <tr>
              <th>Date</th>
              <th>Titre</th>
              <th>Auteur</th>
              <th>Action</th>
          </tr>
        </thead>
                    

        <tbody>';
	while ($donnees = $reponse->fetch()) { 
        
        
        
         
         echo ' <tr>
            <td>' , $donnees['date'] , '</td>
            <td>' , $donnees['title'] , '</td>
            <td>' , $donnees['autor'] , '</td>
            <td><a href="news.php?id=' , $donnees['id'] , '&action=edit" class="btn btn-floating"><i class="material-icons">build</i></a> <a href="news.php?id=' , $donnees['id'] , '&action=delete" class="btn btn-floating"><i class="material-icons">clear</i></a>
</td>
        </tr>';
          
        
        
        
        
    
}
?>
</tbody>
      </table>
       <center>
        <a href="add_news.php"><button style="margin-top: 25px;margin-bottom: 25px;" class="btn waves-effect waves-light" type="submit" name="action">Ecrire une news
    <i class="material-icons right">add</i>
      </button></a></center>
</div>
      
      <?php
if (isset($_GET['action']))
{
	$action = $_GET['action'];
    $id = $_GET['id'];
    
    
    if($action == "delete") {
        $reponse = $bdd->query("DELETE FROM news WHERE id='$id'");
        echo "<script type=\"text/javascript\">document.location.href='news.php?action=delete_success&id=0'</script>";
    } 
    else {
        if($action == "edit") {
            echo "<script type=\"text/javascript\">document.location.href='edit_news.php?id=".$id."'</script>";
    }
        if($action == "add_success") {
                echo "<script type=\"text/javascript\">Materialize.toast('Votre article est en ligne !', 4000, 'green', 'rounded')</script>";
            }
        if($action == "edit_success") {
                echo "<script type=\"text/javascript\">Materialize.toast('Votre article est bien modifié !', 4000, 'blue', 'rounded')</script>";            }
        if($action == "delete_success") {
                echo "<script type=\"text/javascript\">Materialize.toast('Votre article a été supprimé !', 4000, 'red', 'rounded')</script>";            }
        
    }
    
    
    }
?>
      
      <?php

require_once('../content/footer.php');

?>



      