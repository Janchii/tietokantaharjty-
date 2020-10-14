<?php
        $host = 'localhost';
        $dbname = 't9ylja01';
        $username = 't9ylja01';
        $password = '';

        $con = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

        $Biisinimi = mysqli_real_escape_string($con, $_POST['bisnim']);
        $Genre = mysqli_real_escape_string($con, $_POST['gnr']);

        $sql = "INSERT INTO Biisi (Biisinimi, Genre)
        VALUES ('$Biisinimi', '$Genre')";
        if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
}

echo "1 record added";
mysqli_close($con);
