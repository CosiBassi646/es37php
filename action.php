<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>areoporti della nazione selezionata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
    <?php
      $nazione = $_GET['nazioni'];//recupero delle variabili dalla index
    ?>
    <h1 class="text-danger text-center mb-3">Ecco tutti gli Aereoporti della nazione: <?php echo $nazione?>:</h1>
    <div class="w-50 mx-auto my-auto text-center">
    <table class="table table-bordered">
      <tr>
        <th class="text-danger">NOME AEREOPORTO:</th>
        <th class="text-danger">NUMERO PISTE</th>
        <th class="text-danger">NUMERO TERMINALI</th>
      </tr>
        <?php
          (include "./connessione.php");
          $nazione = $_GET['nazioni'];
          $query = mysqli_query($conn,"SELECT aeroporti.nome, aeroporti.num_piste, aeroporti.num_terminali from aeroporti
          where aeroporti.nazione = '$nazione'");
          while($row = mysqli_fetch_assoc($query)){
            echo '<tr>';
            echo '<td>' . $row['nome'] . '</td>';
            echo '<td>' . $row['num_piste'] . '</td>';
            echo '<td>' . $row['num_terminali'] . '</td>';
            echo '</tr>';
          }
        ?>
    </table>
    <br>
    <button type="button" class="btn btn-success"><a href="./index.php" class="link-light link-offset-2 ">Torna Alla Home</a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>