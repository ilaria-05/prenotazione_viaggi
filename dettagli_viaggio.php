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

        if($tipo_viaggio == "affari"){
            print("Buongiorno $nome $cognome");
            print("Nome azienda: <input type='text' name='nome_azienda'>");
            print("Durata viaggio: <input type='text' name='durata'>");
            print("Budget: <input type='text' name='nome'>";
        } else($tipo_viaggio == "vacanza"){}
    ?>
    
</body>
</html>