<html>
    <head>
        <title>Cricket players</title>
    </head>
    <body>
        <h1>Team India</h1><hr><br>

        <?php

        $name = ["Virat Kohli","Rohit Sharma","Sanju Samson","Rishabh Pant","R.Jadeja","R.Ashwin","Ishan Kishan","Jasprit Bumrah","Sreyas Iyer","MS Dhoni","Mohammed Shami"];
        $role = ["Batsman","Batsman","Wicket keeping Batsman","Wicket keeping Batsman","All Rounder","All Rounder","Wicket keeping Batsman","Bowler","Batsman","Wicket keeping Batsman","Bowler"];

        echo "STARTING XI <br><br>";
        echo "<table border = '9px'>
        <tr>
        <th>SL NO</th>
        <th>PLAYER</th>
        <th>POSITION</th>
        </tr>";
        for($i=0;$i<11;$i++)
        {
            $sl=$i+1;
            echo "<tr><td>$sl</td><td>$name[$i]</td><td>$role[$i]</td></tr>";
        }

        echo "</table>";
        ?>
    </body>
</html>