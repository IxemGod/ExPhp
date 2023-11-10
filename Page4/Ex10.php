<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Ex10.css">
    <title>Calculatrice</title>
</head>
<body>
    <?php
        ini_set('display_errors',0);

        function calc(){
            if (isset($_POST['val1']) and isset($_POST['val2']) and isset($_POST['operation']) and !empty($_POST['operation']) and !empty($_POST['val1']) and !empty($_POST['val2']))
			{
                $val1 = intval(htmlspecialchars($_POST['val1']));
                $val2 = intval(htmlspecialchars($_POST['val2']));
                $ope = htmlspecialchars($_POST['operation']);
                if((is_numeric($val1)+is_numeric($val2)) == 2){
                switch ($ope) {

                    case "addition":
                        return "<p id='green'>Résultat : ".($val1+$val2)."</p>";
                        break;
                    case "soustraction":
                        return "<p id='green'>Résultat : ".($val1-$val2)."</p>";
                        break;
                    case "multiplication":
                        return "<p id='green'>Résultat : ".($val1*$val2)."</p>";
                        break;
                    case "division":
                        return "<p id='green'>Résultat : ".($val1/$val2)."</p>";
                        break;
                    default:
                        return "<p id='red'>Cette opération est incorect</p>";
                        break;
                }
            }
            else{
                return "<p id='red'>Les valeurs renseignées ne sont pas des nombres</p>";
            }
        }
        else{
            return "<p id='red'>Les valeurs renseignées sont vides</p>";
        }
    }
        $msg = "";
        if (isset($_POST['submit']))
        {
			$msg = calc();
        }
        
        
        ?>
        <section>
            <h1>Calculatrice quantique du turfu</h1>
        <form method="POST" action="">
			<label>Valeur 1 : </label>
			<input type="number" placeholder="Valeur 1" name="val1" required><br>
            <label>Valeur 2 : </label>
			<input type="number" placeholder="Valeur 2" name="val2" required><br>

            <label>Opération : </label><select name="operation" id="ope">
                <option>addition</option>
                <option>soustraction</option>
                <option>multiplication</option>
                <option>division</option>
            </select>

        
            <div>
                <?php
            
            echo $msg."<br>";
            ?>
			<button name="submit">Envoyer</button>


            </div>
		</form>	

    </section>
</body>
</html>
