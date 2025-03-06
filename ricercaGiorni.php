<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ricerca voli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
    <h1 class="text-danger text-center">RISULTATI DELLA RICERCA</h1>
    <DIV class="w-50 text-center mx-auto my-auto">
    <table class="table table-bordered">
        <tr>
            <th class="text-danger">CODICE VOLO:</th>
            <th class="text-danger">ID VOLO:</th>
            <th class="text-danger">NOME AEREOPORTO:</th>
            <th class="text-danger">AEREO:</th>
            <th class="text-danger">PARTENZA:</th>
            <th class="text-danger">ARRIVO:</th>
        </tr>
        <?php
            (include "./connessione.php");
            $giorno = $_GET['giorno'];
            $query = mysqli_query($conn, "SELECT voli.codice_volo, voli.id_volo, aeroporti.nome as na, aerei.nome ,voli.ora_partenza, voli.ora_arrivo from voli
            join aeroporti on aeroporti.id_aeroporto = voli.id_aereo
            join aerei on voli.id_aereo = aerei.id_aereo
            where  voli.data = '$giorno'");
            while($row = mysqli_fetch_assoc($query)){
                echo '<tr>';
                echo '<td>' . $row['codice_volo'] . '</td>';
                echo '<td>' . $row['id_volo'] . '</td>';
                echo '<td>' . $row['na'] . '</td>';
                echo '<td>' . $row['nome'] . '</td>';
                echo '<td>' . $row['ora_partenza'] . '</td>';
                echo '<td>' . $row['ora_arrivo'] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
    <BR>
    <button type="button" class="btn btn-success"><a href="./index.php" class="link-light link-offset-2 ">Torna Alla Home</a></button>
    </DIV>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>