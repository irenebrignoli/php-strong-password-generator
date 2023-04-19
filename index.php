<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/style.css">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Password Generator</title>
</head>
<body>

<?php
  $passLength = $_GET['password_length'];

  require __DIR__ . "/partials/function.php";

?>

<main>
  <div class="container">
    <div class="card ms_card mt-5 p-3 bg-primary-subtle border-0">

      <h1 class="text-primary-emphasis text-center fw-bolder fs-2">Strong Password Generator</h1>

      <form class="mt-4" action="index.php" method="GET">
        <div class="mb-3 d-flex justify-content-center align-items-center gap-4">
          <label for="password_length" class="form-label">Lunghezza della Password: </label>
          <input type="number" name="password_length" class="form-control w-25" id="password_length" aria-describedby="emailHelp">
          <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
        
      </form>

      <div class="result mt-3 text-center fw-medium"><?php echo randomPassword($passLength)?></div>
    </div>
  </div> 
</main>
  
</body>
</html>