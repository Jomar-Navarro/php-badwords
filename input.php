<?php

$testo = $_POST['testo'];
$badwords = $_POST['badwords'];

$replace = str_replace($badwords, ' *** ', $testo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Input from POST</title>
</head>

<body>
  <div class="container my-5">
    <h1>Paragrafo</h1>
    <p><?php echo $testo; ?></p>
    <p><strong>Sono presenti <?php echo strlen($testo); ?> caratteri.</strong></p>

    <p><?php echo $replace; ?></p>
    <p><strong>Sono presenti: <?php echo strlen($replace); ?> caratteri.</strong></p>
  </div>
</body>

</html>