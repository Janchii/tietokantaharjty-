<?php
        $host = 'localhost';
        $dbname = 't9ylja01';
        $username = 't9ylja01';
        $password = '';

        $con = mysqli_connect($host,$username,$password,$dbname);

        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM Biisi");
         echo "<table border='1'>
        <tr>
        <th>Biisinimi</th>
        <th>Genre</th>
        </tr>";
        while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['Biisinimi'] . "</td>";
        echo "<td>" . $row['Genre'] . "</td>";
        echo "</tr>";
 }
        echo "</table>";
        mysqli_close($con);

?>

