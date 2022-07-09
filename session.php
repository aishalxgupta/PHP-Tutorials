<?php

session_start();

$_SESSION['NAME']='MARK';

$name=$_SESSION['NAME'];
echo $name.'<br>';

echo "done";

?>