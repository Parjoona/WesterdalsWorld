<?php
$value = array("Volvo", "BMW", "Toyota");
if(isset($_POST['num'])) {
    $value = $_POST['num'];
}
foreach ($value as $v) {
    echo $value;
}
var_dump($_POST);