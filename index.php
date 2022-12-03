
<?php

$parole = ['booleano', 'tautologico', 'distopico'];

// var_dump($_POST);

// se è stato passato in GET il parametro "parola" effettuo la ricerca, altrimenti non faccio nulla perche siamo al primo caricamento della pagina

$output = '';


if (!empty($_GET['parola'])) {
  if(in_array($_GET['parola'], $parole)) {
    $output = 'La parola esiste';
  } else {
    $output = 'La parola non esiste';
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerca Parola</title>
</head>
<body>

<div class="container py-5">

<!-- stampo questo blocco di codice solo se la parola esiste -->
<?php if(empty($_GET['parola'])) : ?>
    <div>
      <h1>Cerca la parola</h1>
      <!-- invio il form alla stessa pagina -->
        <form method="GET">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Parola da cercare</label>
            <input type="text" name="parola" class="form-control" id="exampleFormControlInput1" placeholder="Scrivi Parola">
            </div>
            <div class="mb-3">
              <button class="btn btn-primary" type="submit">Invia</button>
            </div>
        </form>
    </div>
<?php else: ?>
  <!-- altrimenti stampo il risultato -->
  <div>
    <h1>La parola cercata è <?php echo $_GET['parola'] ?></h1>
    <h3><?php echo $output ?></h3>
  </div>

<?php endif; ?>
</div>


</body>
</html>