<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Password Generator</title>
</head>
<body>

<?php
  $passwordLength = $_GET['password_length'];
?>

<main>
  <div class="container">
    <form class="mt-5" action="index.php" method="GET">
  <div class="mb-3">
    <label for="password_length" class="form-label">Inserisci la lunghezza della Password</label>
    <input type="number" name="password_length" class="form-control" id="password_length" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</main>
  
</body>
</html>