<?php require_once('../content/header.php'); 
?>
<div class="container">
<div class="row">
<?php
   $reponse = $bdd->query('SELECT id, title, content, img, date, autor, type FROM news ORDER BY date DESC;');



	while ($donnees = $reponse->fetch()) { 
            $content_n = $donnees['content'];
            $content_news = strip_tags($donnees['content']); 

        echo '
          <div class="col s4">
              <div class="card">
                  <div class="card-image">
                      <img src="https://minecraftbuildinginc.com/wp-content/uploads/2014/09/Minecraft-wallpaper-city-small-town-overview.jpg">
                      <span class="card-title"><a class="btn" style="background-color: #f1c40f;">' , $donnees['type'] , '</a></span>  
                  </div>
                  <div class="card-content">
                    <span class="card-title">' , $donnees['title'] , '</span>
                        <p>' , substr($content_news, 0, 200) , '</p>
                  </div>
                    <div class="card-action">
                        <div class="chip"><img src="../assets/img/yuna.jpg" alt="Contact Person">' , $donnees['autor'] , '</div>
                  </div>
                  <a href="index.php?action=read&id=', $donnees['id'] ,'" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
              </div>
          </div>';
              
    
    } ?>
</div></div>
<?php
if (isset($_GET['action']))
{
	$action = $_GET['action'];
    $id = $_GET['id'];
    
    
    if($action == "read") {
        echo"<script type=\"text/javascript\">document.location.href='read.php?id=".$id."'</script>";
    } 
}

?>
<?php require_once('../content/footer.php'); 
?>