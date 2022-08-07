<!DOCTYPE html>
<html>
	<head> <title>php star triangle</title></head>
<body>
<h1>PHP star triangle by Lavan</h1>
<h3>star triangle</h3>
<?php
$a=array(1,2,3,4,5);
foreach ($a as $b){
    for($i=0;$i<$b;$i++){
        echo"*";
    }
    echo"<br>";
}
?>
<br>
<h3>Reverse star triangle</h3>
<?php
$a=array(5,4,3,2,1);
foreach ($a as $b){
    for($i=0;$i<$b;$i++){
        echo"*";
    }
    echo"<br>";
}
?>
</body>
</html>
