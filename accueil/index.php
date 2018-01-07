<?php require_once('../content/header.php'); 
    $test = $bdd->query('SELECT id, title, content, img, date, autor, type FROM news ORDER BY date DESC');
$count = 0;
while ($counter = $test->fetch()) { 
    $count = $count +1;
}
?>
<script>
$(function() {
  $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});
</script>

<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="../assets/data1/images/img1.png" alt="Bienvenue sur votre CMS !" title="Bienvenue sur votre CMS !" id="wows1_0"/></li>
		<li><a href="_blank"><img src="../assets/data1/images/img2.png" alt="javascript image slider" title="Complètement modifiable" id="wows1_1"/></a></li>
		<li><img src="../assets/data1/images/img3.png" alt="Faite de ce site à votre image !" title="Faite de ce site à votre image !" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Bienvenue sur votre CMS !"><span>1</span></a>
		<a href="#" title="Complètement modifiable"><span>2</span></a>
		<a href="#" title="Faite de ce site à votre image !"><span>3</span></a>
	</div></div>
<div class="ws_shadow"></div>
</div>	
  
   <div class="container">
     <div class="row">
     <div class="col s12 m6 l8">
      <div class="row">
        
         <?php
    $reponse = $bdd->query('SELECT id, title, content, img, date, autor, type FROM news ORDER BY date DESC LIMIT 0,1;');



	while ($donnees = $reponse->fetch()) { 
            $content_n = $donnees['content'];
            $content_news = strip_tags($donnees['content']); 

        echo '
          <div class="col s12">
              <div class="card">
                  <div class="card-image">
                      <img src="https://minecraftbuildinginc.com/wp-content/uploads/2014/09/Minecraft-wallpaper-city-small-town-overview.jpg">
                      <span class="card-title"><a class="btn" style="background-color: #f1c40f;">' , $donnees['type'] , '</a></span>  
                  </div>
                  <div class="card-content">
                    <span class="card-title">' , $donnees['title'] , '</span>
                        <p>' , substr($content_news, 0, 300) , '</p>
                  </div>
                    <div class="card-action">
                        <div class="chip"><img src="../assets/img/yuna.jpg" alt="Contact Person">' , $donnees['autor'] , '</div>
                  </div>
                  <a href="../news/read.php?id=', $donnees['id'] ,'" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
              </div>
          </div>'; } ?>
      
<?php
   $reponse = $bdd->query('SELECT id, title, content, img, date, autor, type FROM news ORDER BY date DESC LIMIT 1,4;');



	while ($donnees = $reponse->fetch()) { 
            $content_n = $donnees['content'];
            $content_news = strip_tags($donnees['content']); 

        echo '
          <div class="col s12 m6">
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
                  <a href="../news/read.php?id=', $donnees['id'] ,'" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
              </div>
          </div>';
              
    
    } ?>
    
          <center> <a href="../news"><button style="margin-top: 25px; background-color: #f1c40f;" class="btn waves-effect waves-light" type="submit" name="action">Voir toutes les news
    <i class="material-icons right">add</i>
              </button></a></center>
</div></div>
<div class="col s12 m6 l4">
    <div style="margin-top: 10px;" class="card darken-1">
             <div class="card-content">
                 <span style="text-align: center;" class="card-title">Statistiques</span>
              </div>
              <div class="card-action">
                 <center>
                 <!-- <span class="card-title"><a class="btn" style="background-color: #f1c40f;">25 membres</a></span> <br />-->
                   <span class="card-title"><a class="btn" style="background-color: #f1c40f;"><?php echo $count; ?> actualités sur le site</a></span><br />
                    <span class="card-title"><a class="btn" style="background-color: #f1c40f;"><span data-playercounter-ip="<?php echo $ADRESS_IP ?>">0</span> joueurs en ligne</a></span> 
                    </center>
             </div></div>


<a class="twitter-timeline" data-height="950" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
</div>
 </div>
  
<script type="text/javascript" src="<?php echo $URL_INSTALL ?>assets/engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo $URL_INSTALL ?>assets/engine1/script.js"></script>
<?php require_once('../content/footer.php'); ?>


</body>
</html>