<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Dettagli viaggio</title>
</head>
<body>
    <h1> Dettagli viaggio</h1>
    <?php
        session_start();
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $destinazione = $_POST["destinazione"];
        $tipo_viaggio = $_POST["tipo_viaggio"];

        $_SESSION["nome"] = $nome;
        $_SESSION["cognome"] = $cognome;
        $_SESSION["destinazione"] = $destinazione;
        $_SESSION["tipo_viaggio"] = $tipo_viaggio;

        echo("<form method='post' action='riepilogo_prenotazione.php'>");

        if($tipo_viaggio == 'affari'){
            print("Buongiorno $nome $cognome <br><br>");
            echo("Nome azienda: <input type='text' name='nome_azienda'><br><br>");
            echo("Durata viaggio: <input type='number' name='durata'><br><br>");
            echo("Budget: <input type='number' name='budget'><br><br>");
            echo ("<input type='submit'>");

        } else if($tipo_viaggio == 'vacanze'){

            echo("Numero persone :<input type='number' name='numero_persone'> <br><br>");
            echo("Tipo Alloggio : <input type='text' name='tipo_alloggio'> <br><br>");
            echo ("Inserisci l'attività prescelta: <br>");
            echo ("<input type='checkbox' name='attivita' value='turismo'>");
            echo ("<label for='attivita'> Turismo </label><br>");
            echo ("<input type='checkbox' name='attivita' value='sport'>");
            echo ("<label for='attivita'> Fare sport </label><br>");
            echo ("<input type='checkbox' name='attivita' value='musei'>");
            echo ("<label for='attivita'> Visitare museo </label><br><br>");
            echo ("<input type='submit'>");

        }
    echo("</form>")
    ?>
    

    
</body>
</html>

