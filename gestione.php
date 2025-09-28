<?php
    $nome = $_GET["first_name"];
    $cognome = $_GET["last_name"];
    $prodotti = $_GET["prodotti"];
    $nprodotti = $_GET["nProdotti"];

    $prezzo = 0;
    if($prodotti == "mela") {
        $prezzo= 1;
    }
    elseif($prodotti == "banana") {
        $prezzo = 2;
    }
    else{
        $prezzo = 3;
    }

    //sconto 10%
    if($nprodotti >= "10") {
        $prezzo = $prezzo - ($prezzo * 0.10);
    }

    
    $prezzo_senza_iva = $prezzo * $nprodotti;
    $prezzo_con_iva = $prezzo_senza_iva * 1.22; 

    
   

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        echo "<h1>Scontrino</h1>";
        echo "Ciao " . $nome . " " . $cognome . "<br>";
        echo "Hai acquistato " . $nprodotti . " " . $prodotti . "<br>";
        echo "Prezzo totale (senza IVA): " . $prezzo_senza_iva . " €<br>";
        echo "Prezzo totale (con IVA 22%): " . $prezzo_con_iva . " €";
    ?>
</body>
</html>
