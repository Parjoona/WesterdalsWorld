<?php
$host = 'localhost';
$db_user = 'joopar16_root';
$db_pass = 'RK896tibialolz1';
$db_name = 'joopar16_westerproject';
$db_port = 3306;

$conn = new PDO('mysql:host=tek.westerdals.no;dbname=joopar16_westerproject; charset=utf8', $db_user, $db_pass);

/* Checkar om det blir errors, *INAKTIVERA FÖR DEN SKA LÄGGAS UT PÅ RIKTIG SIDA*
try {
    $conn = new PDO('mysql:host=localhost;dbname=westerproject',$db_user,$db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo 'Not connected'.$ex->getMessage();
}
*/

// Hämtar places
$stmtplaces = $conn->prepare('SELECT * FROM places ORDER BY distance ASC');
$stmtplaces->execute();
$places = $stmtplaces->fetchAll();
// Hämtar events
$stmtevents = $conn->prepare('SELECT * FROM events');
$stmtevents->execute();
$events = $stmtevents->fetchAll();
// Hämtar message
$stmtmsg = $conn->prepare('SELECT * FROM msg');
$stmtmsg->execute();
$msgs = $stmtmsg->fetchAll();

$stmtlogin = $conn->prepare('SELECT * FROM login');
$stmtlogin->execute();
$login = $stmtlogin->fetchAll();
