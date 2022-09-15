<?php
    $parolaccia = $_POST['parolaccia'];

    $testoDaCensurare = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ex vel reprehenderit ea blanditiis quidem dolore veniam molestiae quasi! Unde alias at totam repudiandae possimus aspernatur odit laborum voluptatibus iusto consequuntur dolor, adipisci vel rem ut quia, ab et eligendi tempora consectetur pariatur delectus deleniti ipsum, perferendis officia! Nulla, inventore.";

    $testoCensurato = str_ireplace( $parolaccia, "***", $testoDaCensurare);

    $numCaratteriTesto =  strlen($testoCensurato);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>badword censored</title>
    </head>
    <body>
        <p><?php echo $testoCensurato; ?></p>
        <p>Lunghezza testo: <?php echo $numCarratteriTesto;?> Numero caratteri</p>
        
    </body>
    </html>



