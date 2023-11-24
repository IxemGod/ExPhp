<DOCTYPE html>
	<html>
	<head>
		<meta Content-Type: text/html; charset=UTF-8>
		<title>Calcule Devise</title>
	</head>
	<section>
		<?php
		

            function calcule(){
                
			if (isset($_POST['prixEuro']) and !empty($_POST['prixEuro']))
			{
                    $prixEuro = htmlspecialchars($_POST['prixEuro']);
                    if(is_numeric($prixEuro)){
                        $content = "";
                        $a = array(
                            "Dollard Américain $" => 1.07,
                            "Dollard Canadien" => 1.47,
                            "Franc Suisse" => 0.96,
                            "Franc CFA" => 659.64,
                        );

                        foreach ($a as $k => $v) {
                            $content.= "<p>Convertion en ".$k." : ".$prixEuro * $v;
                        }
                        $content.= "<p>Conversion en boite de doliprane : ".$prixEuro / 2.18."</p>";
                        return $content;
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
                echo calcule();
            }

		?>
		<form method="POST" action="">
			<label>Prix en Euro € : </label><br>
			<input type="text" placeholder="Prix Euro" name="prixEuro" required><br>
			<button name="submit">Envoyer</button>
		</form>
	</section>
	</html>
