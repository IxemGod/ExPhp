<DOCTYPE html>
	<html>
	<head>
		<meta Content-Type: text/html; charset=UTF-8>
		<title>Calcule TTC</title>
	</head>
	<section>
		<?php

        function send(){
            
            
                if (isset($_POST['prixHTTC']) and !empty($_POST['prixHTTC']))
                {
                    $prixHTTC = htmlspecialchars($_POST['prixHTTC']);
                    if(is_numeric($prixHTTC)){
                        $prixTTC = $prixHTTC + ($prixHTTC*0.20);
                        return "<h1>Pour un prix HTTC de ".$prixHTTC."€, Le prix TTC sera ".$prixTTC."€</h1>";
                    }
                    else{

                        return '<h1>Merci de rentrer une valeur numérique</h1>';
                    }
                    
                }
                else{
                    return '<h1>Merci de remplire le champ</h1>';
                }
        }

        if (isset($_POST['submit']))
            {
                echo send();
            }
		?>
		<form method="POST" action="">
			<label>Prix Hors Taxe : </label><br>
			<input type="text" placeholder="Prix HTTC" name="prixHTTC" required><br>
			<button name="submit">Envoyer</button>
		</form>
	</section>
	</html>
