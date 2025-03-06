<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>es37php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
  <h1 class="text-danger text-center">Seleziona la nazione della quale vuoi visualizzare gli aereoporti: </h1>
    <div class="w-25 text-center mx-auto my-auto">
        <form action="./action.php">
            <select class="form-select" name="nazioni" > 
            <option selected>Clicca per selezionare una nazione</option>
            <?php
              include "./connessione.php"; //importante includere il file di connessione
              $query = mysqli_query($conn,"SELECT distinct aeroporti.nazione from aeroporti");
              while ($row = mysqli_fetch_assoc($query)) {
                  $n = htmlspecialchars($row['nazione']);
                  echo '<option value="' . $n . '">' . $n . '</option>';
              }
            ?>
            </select>
            <br>
            <button type="submit" class="btn btn-success">Invia</button>
        </form>
        </div>
          <br>
          <h1 class="text-danger text-center mt-3">Cerca i voli i base al giorno: </h1>
          <div class="w-25 text-center mx-auto my-auto">
          <form action="./ricercaGiorni.php">
            <div class="input-group mb-3">
              <input type="date" name="giorno" class="form-control" required>
              <button type="submit" class="btn btn-success">Cerca</button>
            </div>
          </form>
        </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>