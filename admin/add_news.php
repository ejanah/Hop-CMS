<?php
require_once('../content/header.php');

if (isset($_POST['go']) && $_POST['go']=='Poster la news') {

	if (!isset($_POST['autor']) || !isset($_POST['title']) || !isset($_POST['type']) || !isset($_POST['content'])) {
	$erreur = 'Les variables nécessaires au script ne sont pas définies.';
	}
	else {
	if (empty($_POST['autor']) || empty($_POST['title']) || empty($_POST['type']) || empty($_POST['content'])) {
		$erreur = 'Au moins un des champs est vide.';
	}
	else {
		$reponse = $bdd->query('INSERT INTO news VALUES("", "'.mysql_escape_string($_POST['title']).'", "'.mysql_escape_string($_POST['content']).'", "", "'.date("Y-m-d H:i:s").'", "'.mysql_escape_string($_POST['autor']).'", "'.mysql_escape_string($_POST['type']).'")');


		mysql_close();

		echo "<script type=\"text/javascript\">
document.location.href='news.php?action=add_success&id=0'
    </script>
    ";
		exit();
	}
	}
}
?>
<html>
<head>
<title>Insertion d'une nouvelle news</title>
</head>

<body>
<div class="container">
<form action="add_news.php" method="post">
<table>
<tr><td>
Auteur :
</td><td>
<input type="text" name="autor" maxlength="30" size="50" value="<?php if (isset($_POST['autor'])) echo htmlentities(trim($_POST['autor'])); ?>">
</td></tr><tr><td>
Titre :
</td><td>
<input type="text" name="title" maxlength="50" size="50" value="<?php if (isset($_POST['title'])) echo htmlentities(trim($_POST['title'])); ?>">
</td></tr><tr><td>
Type :
</td><td>
<input type="text" name="type" maxlength="50" size="50" value="<?php if (isset($_POST['type'])) echo htmlentities(trim($_POST['type'])); ?>">
</td></tr><tr><td>
News :
</td><td>
<textarea name="content" cols="50" rows="10"><?php if (isset($_POST['content'])) echo htmlentities(trim($_POST['content'])); ?></textarea>
</td></tr><tr><td><td align="right">
<input type="submit" name="go" value="Poster la news">
</td></tr></table>
</form></div>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
    require_once('../content/footer.php');

?>

</body>
</html>