<html>
    <head>
        <title>Student details</title>
</head>
<body>
    <center>
    <h2>Student names</h2><hr><br>
    <?php
        $name=["adi","viji","laya","riya","kailash"];
        $t=$name;
        echo "Displaying using  print_r<br>";
        print_r($name);
        echo "<br><br>";

        echo "sorting using asort()<br>";
        asort($name);
        print_r($name);
        echo "<br><br>";

        echo "sorting using arsort()<br>";
        arsort($t);
        print_r($t);
    ?>
    </center>
</body>
</html>
