<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Riepilogo prenotazione</title>
</head>
<body>
    <h1> Riepilogo prenotazione</h1>
    <?php
        session_start();
            $nome = $_SESSION["nome"];
            $cognome = $_SESSION["cognome"];
            $destinazione = $_SESSION["destinazione"];
            $tipo_viaggio = $_SESSION["tipo_viaggio"];

        
            
            
            
        if($tipo_viaggio == 'affari'){
            $nome_azienda = $_POST["nome_azienda"];
            $durata = $_POST["durata"];
            $budget = $_POST["budget"];
            $_SESSION["nome_azienda"] = $nome_azienda;
            $_SESSION["durata"] = $durata;
            $_SESSION["budget"] = $budget;
            print("Buongiorno $nome $cognome <br><br>
            Hai scelto di fare una $tipo_vaggio.
            Hai scelto di andare in $destinazione 
            il nome dell'azienda è $nome_azienda
            e il viaggio dura $durata giorni 
            e il tuo budget è di $budget");

        }else if($tipo_viaggio == 'vacanze'){
            $numero_persone = $_POST["numero_persone"];
            $tipo_alloggio = $_POST["tipo_alloggio"];
            $attivita = $_POST["attivita"];
            $_SESSION["numero_persone"] = $numero_persone;
            $_SESSION["tipo_alloggio"] = $tipo_alloggio;
            $_SESSION["attivita"] = $attivita;
            print("Buongiorno $nome $cognome. <br><br>
            Hai scelto di fare una $tipo_vaggio.
            Hai scelto di andare in $destinazione 
            e le persone per la vacanza sono $numero_persone, 
            hai deciso di andare in un $tipo_alloggio
            e hai scelto come attività: $attivita");
        }
    ?>
</body>
</html>