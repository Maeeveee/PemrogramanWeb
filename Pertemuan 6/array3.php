<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multidimensional Array</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Multidimensional Array</h2>
    <table>
        <tr>
           <th>Judul Film</th> 
           <th>Tahun</th>
           <th>Rating</th>
        </tr>
        <?php
            $movie = array(array("avangers: infinite war","2018","8.7"),
                           array("The Avengers","2012","8.1"),
                           array("The Avengers: Age of Ultron","2015","7.3"),
                           array("The Avengers: Endgame","2019","8.4"));
            echo "<tr>";
                echo "<td>".$movie[0][0]."</td>";
                echo "<td>".$movie[0][1]."</td>";
                echo "<td>".$movie[0][2]."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>".$movie[1][0]."</td>";
                echo "<td>".$movie[1][1]."</td>";
                echo "<td>".$movie[1][2]."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>".$movie[2][0]."</td>";
                echo "<td>".$movie[2][1]."</td>";
                echo "<td>".$movie[2][2]."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>".$movie[3][0]."</td>";
                echo "<td>".$movie[3][1]."</td>";
                echo "<td>".$movie[3][2]."</td>";
        ?>
    </table>
</body>
</html>