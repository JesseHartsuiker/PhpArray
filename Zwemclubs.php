<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 13-11-2018
 * Time: 13:37
 */
?>
<! DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheet.css">
    <title>Zwemclubs</title>
</head>
<style>
    table, th, td {
        border: 5px solid black;
        border-collapse: collapse;

    }
    body {
        display: flex;
    }
    tr {
        height: 100px;
    }
    #kolom2 {
        height: 100vh;
        line-height: 100px;
    }
    #kolom1 {
        max-width: min-content;
    }
</style>
<body>
<div id="kolom1">
    <table style="width: 25%">
        <tr>
            <th>De Spartelkuikens</th>
            <th>25</th>
        </tr>
        <tr>
            <th>De Waterbuffels</th>
            <th>32</th>
        </tr>
        <tr>
            <th>Plonsmderin</th>
            <th>11</th>
        </tr>
        <tr>
            <th>Bommetje</th>
            <th>23</th>
        </tr>
    </table>

</div>
<div id="kolom2">
    <table>

    <?php
    $teams = array(25, 32, 11, 23);

    foreach ($teams as $team) {
        echo '<tr><td>';
        $aantal = floor($team / 5);
        for ($i = 0; $i < $aantal; $i++) {
            echo "<img  src='Bird pictures/swimming.jpg'>";
        }
        echo '</td></tr>';
    }

    ?>
    </table>

</div>
</body>
</html>
