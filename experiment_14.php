<html>
<body>
<h1>ELECTRICITY BILL</h1>
<form method="post" action="#">
consumer id:<input type="number" name="id"><br>
Name:<input type="text" name="name"><br>
unit consumed:<input type="number" name="units"><br>
<input type="submit">
<input type="reset">
</form>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id=$_POST["id"];
        $name=$_POST["name"];
        $units=$_POST["units"];
        echo"<h3> KSEB </h3>";
        echo"consumer id:".$id."<br>";
        echo"consumer name:".$name."<br>";
        echo"unit consumed:".$units."<br>";
        if($units<=100)
        {
            $amt=$units*3;
        }
        elseif($units>100 && $units<=200)
        {
            $amt=$units*4;
        }
        else
        {
            $amt=$units*5;
        }

    echo"<h4> total :rs.".($amt)."</h4><br>";
    }

?>

</body>
</html>