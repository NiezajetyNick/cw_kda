<?php

    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = $conn->query("INSERT INTO `cw-kda`(`K`, `D`, `A`) VALUES ('".($_POST['K']*-1)."','".($_POST['D']*-1)."','".($_POST['A']*-1)."')");
    $sql1 = $conn->query("INSERT INTO `inTot`(`K`, `D`, `A`) VALUES ('".$_POST['K']."','".$_POST['D']."','".($_POST['A']*2)."')");

    mysqli_query($conn, $sql, $sql1);

    header("location:index.php");

?>