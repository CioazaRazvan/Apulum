<!DOCTYPE html>
<html>
<head>
  <title>Informatiile din baza de date</title>
</head>
    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apulum";

    // Creare conexiune
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificare conexiune
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    //$sql = "SELECT * FROM test_baza";
    //$sql = "SELECT * FROM test_baza ORDER BY \"COL 7\" ASC";
    //$result = $conn->query($sql);


    // Scrierea interogarii SQL pentru a prelua informatiile din baza de date
    $sql = "SELECT * FROM test_baza";
    //$sql = "SELECT * FROM test_baza ORDER BY \"COL 7\" ASC";

    $result = $conn->query($sql);

    // Executarea interogarii si preluarea rezultatelor
    $result = mysqli_query($conn, $sql);

    if (!$result) {
       echo "Error executing query: " . $conn->error;
    }

    /*
    if ($result = $conn->query($sql)) {
    echo "Query executed successfully.";
    var_dump($result);
    // ...
    } else {
        echo "Error executing query: " . $conn->error;
    }
    */


    // Verificarea daca s-au gasit rezultate
    if (mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr>";
      echo "<th>Col 1</th>";
      echo "<th>COL 2</th>";
      echo "<th>COL 3</th>";
      echo "<th>COL 4</th>";
      echo "<th>Col 5</th>";
      echo "<th>COL 6</th>";
      echo "<th>COL 7</th>";
      echo "<th>COL 8</th>";
      echo "<th>Col 9</th>";
      echo "<th>COL 10</th>";
      echo "<th>COL 11</th>";
      echo "<th>COL 12</th>";
      echo "<th>COL 13</th>";
      echo "<th>COL 14</th>";
      echo "<th>COL 15</th>";
      echo "</tr>";

      // Afisarea fiecarei linii din rezultat
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["COL 1"] . "</td>";
        echo "<td>" . $row["COL 2"] . "</td>";
        echo "<td>" . $row["COL 3"] . "</td>";
        echo "<td>" . $row["COL 4"] . "</td>";
        echo "<td>" . $row["COL 5"] . "</td>";
        echo "<td>" . $row["COL 6"] . "</td>";
        Echo "<td>" . $row["COL 7"] . "</td>";
        echo "<td>" . $row["COL 8"] . "</td>";
        echo "<td>" . $row["COL 9"] . "</td>";
        echo "<td>" . $row["COL 10"] . "</td>";
        echo "<td>" . $row["COL 11"] . "</td>";
        echo "<td>" . $row["COL 12"] . "</td>";
        echo "<td>" . $row["COL 13"] . "</td>";
        echo "<td>" . $row["COL 14"] . "</td>";
        echo "<td>" . $row["COL 15"] . "</td>";
        echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "Nu s-au gasit rezultate.";
    }

    // Inchiderea conexiunii la baza de date
    mysqli_close($conn);
  ?>

</body>
</html>
