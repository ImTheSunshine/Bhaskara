<?php


$mysqli = new mysqli("localhost", "root", "", "bhaskara");
$sqlstr = 'insert into calculos (a, b, c, delta) values (1,2,3,4)';
mysqli_query($mysqli, $sqlstr);


?>