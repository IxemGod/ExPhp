<DOCTYPE html>
	<html>
	<head>
		<meta Content-Type: text/html; charset=UTF-8>
		<title>Votre prénom</title>
	</head>
	<section>
		<?php
	
    ini_set('display_errors',0);
        if (isset($_POST['submit']))
        {
			if (isset($_POST['name']) and !empty($_POST['name']))
			{
                $name = htmlspecialchars($_POST['name']);
                echo "<h1>Bien le bonjour ".$name." !</h1><br>";
            }
            else{
                echo '<h1>Merci de remplire le champ</h1>';
            }
        }
        ?>
        <form method="POST" action="">
			<label>Quel est votre prénom ? </label><br>
			<input type="text" placeholder="Prénom" name="name" required><br>
			<button name="submit">Envoyer</button>
		</form>		
	</section>
	</html>


















<!-- Ne regardes pas en bas ! Trust me... -->














































<!-- J'avais dit de ne pas regarder :'( -->
<?php
$name = htmlspecialchars($_POST['name']);
setcookie("username", $name, time()+20*24*60*60);//Ne pas suprimé, tu comprendra pourquoi j'ai mis un cookie dans l'ex prochain :)
