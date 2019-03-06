<?php
function mysqli_insert_array($table, $data)
{
    $con=  mysqli_connect("localhost", "root", "Hana4662411", "phptest");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $name = $url = "";
    foreach ($data as $d) {
        $name = mysqli_real_escape_string($con, $d['name']);
        $url = mysqli_real_escape_string($con, $d['url']);

        $sql="INSERT INTO jword_data (name, url)
        VALUES ('$name', '$url')";

        if (!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
        }
    }

    mysqli_close($con);
}
