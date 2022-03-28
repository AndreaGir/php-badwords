<?php 

    $paragrafo = 'Lorem ipsum, cacca sit amet consectetur adipisicing cacca.
     Omnis eius, illo dolorum tempore cacca tenetur quaerat laudantium provident cacca veniam. cacca.';

    $lunghezzaParagrafo = strlen( $paragrafo );

    $paragrafoCensurato = str_replace( 'cacca', '***', $paragrafo , $numeroCensure);

    $numeroCensure = 0;

    $pHost = $_GET['pHost']

?>

<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
        <?php echo $paragrafo ?>
    </p>
    <p>
        Lunghezza paragrafo: <?php echo $lunghezzaParagrafo ?> caratteri
    </p>
    <p>
        <?php echo $paragrafoCensurato ?>
    </p>
    <p>
        Numero censure: <?php echo $numeroCensure ?> parole
    </p>
    <p>
    <?php echo $pHost ?>
    </p>
    
    
</body>
</html>