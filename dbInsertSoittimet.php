<?php
        $host = 'localhost';
        $dbname = 't9ylja01';
        $username = 't9ylja01';
        $password = '';

        $con = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

        $Soitin = mysqli_real_escape_string($con, $_POST['soi']);
        $Kategoria = mysqli_real_escape_string($con, $_POST['ktr']);
        $Hinta = mysqli_real_escape_string($con, $_POST['hit']);

        $sql = "INSERT INTO Soittimet (Soitin, Kategoria, Hinta)
        VALUES ('$Soitin', '$Kategoria', '$Hinta')";
        if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
}

echo "1 record added";
mysqli_close($con);
