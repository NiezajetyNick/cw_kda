<?php

    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = $conn->query("INSERT INTO `cw-kda`(`K`, `D`, `A`) VALUES ('".$_POST['K']."','".$_POST['D']."','".$_POST['A']."')");

    mysqli_query($conn, $sql);

    header("location:index.php");

?>