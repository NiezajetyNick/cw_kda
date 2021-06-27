<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ćwiczenia</title>
</head>
<body>
    <head>

        <div class="opis">
            <p>1K = 1 brzuszek</p><p>1D = 1 pompka</p><p>1A = 2s deski</p>
        </div>

    </head>

    <main>

        <div class="gora">

            <h1>In total</h1>

            <?php

            $servername = "remotemysql.com";
            $username = "EItVVUd8zl";
            $password = "MadGhgwbbw";
            $dbname = "EItVVUd8zl";

            $conn = new mysqli($servername, $username, $password, $dbname);

            $res = $conn->query("SELECT sum(K) as K,sum(D) as D,sum(A) as A FROM `cw-kda`");

            echo("<table class='tabik' border=1>");
            echo("<tr>
            <th>Brzuszek</th>
            <th>Pompka</th>
            <th>Deska</th>
            </tr>");

            while($row=$res->fetch_assoc()){
                echo("<tr>
                <td>".($row['K']*1)."</td>
                <td>".($row['D']*1)."</td>
                <td>".($row['A']*1)."s</td>
                </tr>");
            }


            echo("</table>");

            ?>

        </div>


        <div class="tab">

            <?php

            $servername = "remotemysql.com";
            $username = "EItVVUd8zl";
            $password = "MadGhgwbbw";
            $dbname = "EItVVUd8zl";

            $conn = new mysqli($servername, $username, $password, $dbname);

            $res = $conn->query("SELECT sum(K) as K,sum(D) as D,sum(A) as A FROM `cw-kda`");

            echo("<table class='tabik' border=1>");
            echo("<tr>
            <th>Brzuszek</th>
            <th>Pompka</th>
            <th>Deska</th>
            </tr>");

            while($row=$res->fetch_assoc()){
                echo("<tr>
                <td>".($row['K']*1)."</td>
                <td>".($row['D']*1)."</td>
                <td>".($row['A']*1)."s</td>
                </tr>");
            }


            echo("</table>");

            ?>
            <form action="del.php" method="post" class="g2">
                <input name="K" type="text" placeholder="Brzuszek"><b> / </b>
                <input name="D" type="text" placeholder="Pompka"><b> / </b>
                <input name="A" type="text" placeholder="Deska"><b>  </b>
                <input class='btn' type="submit" value="-">
            </form>

        </div>

    </main>

    <footer>

        <div class="in">
            <form action="in.php" method="post" class="KDA">
                <input name="K" type="text" placeholder="KILL"><b> / </b>
                <input name="D" type="text" placeholder="DEATH"><b> / </b>
                <input name="A" type="text" placeholder="ASSIST"><b>  </b>
                <input class='btn' type="submit" value="+">
            </form>
        </div>

    </footer>
</body>
</html>