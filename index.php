<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>php-badwords</title>
</head>

<body class="bg-secondary">
  <div class="container my-5">
    <h1 class="text-center">Badwords</h1>

    <form action="input.php" method="POST">
      <div>
        <label class="form-label" for="testo"></label>
        <textarea name="testo" class="form-control border-black" id="area" cols="10" rows="10" placeholder="Scrivi un paragrafo..."></textarea>
      </div>

      <div class="wrapper d-flex flex-column align-items-center">
        <div>
          <label for="badwords"></label>
          <input type="text" name="badwords" class="form-control border-black" placeholder="Censura una parola...">
        </div>

        <div>
          <button class="btn btn-primary mt-3 justify-content-center">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>