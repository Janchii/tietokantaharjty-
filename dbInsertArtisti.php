<?php
        $host = 'localhost';
        $dbname = 't9ylja01';
        $username = 't9ylja01';
        $password = '';

        $con = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

        $Etunimi = mysqli_real_escape_string($con, $_POST['etn']);
        $Sukunimi = mysqli_real_escape_string($con, $_POST['skn']);
        $Biisit = mysqli_real_escape_string($con, $_POST['biist']);

        $sql = "INSERT INTO Artisti (Etunimi, Sukunimi, Biisit)
        VALUES ('$Etunimi', '$Sukunimi', 'Biisit')";
        if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
}

echo "1 record added";
mysqli_close($con);
