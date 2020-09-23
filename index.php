<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="all">
        <div class="lewo it">

            <form class='in' action="ins.php" method="POST">
                <input class='ini' type="text" name="imie" placeholder="imie">
                <input class='ini' type="text" name="dzial" placeholder="dzial">
                <input class='ini' type="text" name="zarobki" placeholder="zarobki">
                <input class='ini' type="date" name="data_urodzenia" placeholder="data urodzenia">
                <input class='init' type="submit" value="Dodaj">
            </form>

        </div>

        <div class="prawo it">

            <?php

            $conn= new mysqli('172.16.131.125','z_cxz','bvc','z_cxz');

            $res= $conn->query("SELECT * FROM `pracownicy`");

            echo('<table border=1>
            <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Dzial</th>
            <th>zarobki</th>
            <th>Data urodzenia</th>
            <th>Usuń</th>
            </tr>');

            while($row=$res->fetch_assoc()){
                echo("<tr>
                <td>".$row['id_pracownicy']."</td>
                <td>".$row['imie']."</td>
                <td>".$row['dzial']."</td>
                <td>".$row['zarobki']."</td>
                <td>".$row['data_urodzenia']."</td> 
                <td>
                <form class='in' action='del.php' method='POST'>
                <input type='hidden' name='id' value='".$row['id_pracownicy']."'>
                <input type='submit' value='X'>
            </form></td>                
                </tr>");
            };<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="all">
        <div class="lewo it">

            <form class='in' action="ins.php" method="POST">
                <input class='ini' type="text" name="imie" placeholder="imie">
                <input class='ini' type="text" name="dzial" placeholder="dzial">
                <input class='ini' type="text" name="zarobki" placeholder="zarobki">
                <input class='ini' type="date" name="data_urodzenia" placeholder="data urodzenia">
                <input class='init' type="submit" value="Dodaj">
            </form>

        </div>

        <div class="prawo it">

        </div>
    </div>
</body>
</html>

            echo('</table>')

            ?>

        </div>
    </div>
</body>
</html>
