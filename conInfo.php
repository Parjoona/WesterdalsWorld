<?php
$user = new stdClass();
$user->email = 'exy@gmail.com';
$myJSON = json_encode($user);

echo $myJSON;