<?php
require_once('../content/header.php');

if (isset($_POST['go']) && $_POST['go']=='Editer la news') {
    

	if (!isset($_POST['autor']) || !isset($_POST['title']) || !isset($_POST['type']) || !isset($_POST['content'])) {
	$erreur = 'Les variables nécessaires au script ne sont pas définies.';
	}
	else {
	if (empty($_POST['autor']) || empty($_POST['title']) || empty($_POST['type']) || empty($_POST['content'])) {
		$erreur = 'Au moins un des champs est vide.';
	}
	else {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $autor = $_POST['autor'];
        $content = $_POST['content'];
        $type = $_POST['type'];
		$reponse = $bdd->query("UPDATE news SET title='$title', content='$content', autor='$autor', type='$type' where id ='$id'");


        echo "<script type=\"text/javascript\">document.location.href='news.php?action=edit_success&id=0'</script>";
		exit();
	}
	}
}
?>

<?php 

$reponse = $bdd->query("SELECT * FROM news where id=".$_GET['id'].";");
$donnees = $reponse->fetch();

?>

<body>
<div class="container">
<form action="" method="post">
<table>
<tr><td>
<input type="hidden" name="id" maxlength="30" size="50" value="<?php echo $_GET['id']; ?>">
</td></tr>
<tr><td>
Auteur :
</td><td>
<input type="text" name="autor" maxlength="30" size="50" value="<?php echo $donnees['autor']; ?>">
</td></tr><tr><td>
Titre :
</td><td>
<input type="text" name="title" maxlength="60" size="50" value="<?php echo $donnees['title']; ?>">
</td></tr><tr><td>
Type :
</td><td>
<input type="text" name="type" maxlength="20" size="50" value="<?php echo $donnees['type']; ?>">
</td></tr><tr><td>
News :
</td><td>
<textarea name="content" cols="50" rows="10"><?php echo $donnees['content']; ?></textarea>
</td></tr><tr><td><td align="right">
<input type="submit" name="go" value="Editer la news">
</td></tr></table>
</form></div>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
    require_once('../content/footer.php');

?>

</body>
</html>