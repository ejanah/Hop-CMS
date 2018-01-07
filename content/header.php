<!DOCTYPE HTML>
<html>
<?php
@session_start();
('Content-type: text/html; charset=utf-8');
  // Fichiers au bon fonctionnement du cms
  require_once('../includes/config.php');
  require_once('../includes/bd.php');
  require_once('../includes/function.php');
?>

	<head>
		<title><?php echo $SITE_NAME ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $URL_INSTALL ?>assets/css/main.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php echo $URL_INSTALL ?>assets/js/script.js"></script>

		
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="<?php echo $URL_INSTALL ?>assets/css/materialize.min.css"  media="screen,projection"/>
               <script src="../assets/js/player-counter.js"></script>

        <script src="../assets/js/tinymce.min.js"></script>
          <script>tinymce.init({ selector:'textarea' });</script>



<link rel="stylesheet" type="text/css" href="../assets/engine1/style.css" />
	</head>
	<body>   
        
<header>   
    <div class="info-bar">
     
       <div class="container">
        <ul>
            <li class="float-left"><p><img src="../assets/img/bar.png" width="15%" height="15%"> <?php echo $ADRESS_IP ?></p></li>
            <li class="float-left"><p><img src="<?php echo $URL_INSTALL ?>assets/img/users.png" width="20%" height="20%"> <span data-playercounter-ip="<?php echo $ADRESS_IP ?>" data-playercounter-format="{online}/{max}">0</span></p></li> 
            <div class="social-icon">
            <a class="social-link" href="https://twitter.com/test"><li class="float-right"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li></a>
            <a class="social-link" href="https://twitter.com/test"><li class="float-right"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li></a>
                <a class="social-link" href="https://twitter.com/test"><li class="float-right"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></li></a>
        </ul>
        </div></div>
          <!----menu---->
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#" onclick="$('#connect').modal('open');">Se connecter</a></li>
  <li><a href="#!">S'inscrire</a></li>
</ul>
      <nav>
        <div class="nav-wrapper">
          <div class="container">
            <a href="<?php echo $URL_INSTALL ?>" class="navbar-brand"><?php echo $SITE_NAME ?></a>
<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
<ul class="right hide-on-med-and-down">
<li class=""><a href="../accueil/">Accueil</a></li>
<li class=""><a href="">Boutique</a></li>
<li class=""><a href="">Forum</a></li>
<li class=""><a href="">Contact</a></li>
<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Espace membre<i class="material-icons right">arrow_drop_down</i></a></li>

</ul>
<ul class="side-nav" id="mobile-demo">
<li><a href="">Accueil</a></li>
<li><a href="">Boutique</a></li>
<li><a href="">Forum</a></li>
<li><a href="">Contact</a></li><br />
<li><a href="">Espace membre</a></li>
<li style="margin-left: 15px;"><a onclick="$('#connect').modal('open');">Se connecter</a></li>
<li style="margin-left: 15px;"><a href="">S'inscrire</a></li>
</div>
</ul>
</div>
</nav>
<!---header --->

    </div>
</header>

<!--<a class="waves-effect waves-light btn view" onclick="$('#modal1').modal('open');">View Scores</a>-->
<!-- Modal Structure -->
<div id="connect" class="modal">
  <div class="modal-content">
    <h4>Se connecter à <?php echo $SITE_NAME ?></h4>
    <div class="row container">
    <div class="col s4">
        <img src="<?php echo $URL_INSTALL ?>assets/img/steve.png" width="80%" height="80%">
    </div>
    <div class="col s8">
        <div class="input-field">
          <input id="login" type="text" class="validate">
          <label for="login">Votre e-mail</label>
        </div>
        <div class="input-field">
          <input id="password" type="password" class="validate">
          <label for="password">Votre mot de passe</label>
        </div>
        <a href="lost-password.php"><p style="text-align: right;">Vous avez oublié votre mot de passe ?</p></a>
    </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn waves-effect waves-light" type="submit" name="action">Se connecter <i class="material-icons right">done</i>
  </button>
  </div>
</div>

       

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $URL_INSTALL ?>assets/js/materialize.min.js"></script>
 <script type="text/javascript">
  $(".button-collapse").sideNav();
</script>

