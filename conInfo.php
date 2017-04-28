<?php
if (isset($_POST['num'])) {
    $js=$_POST['num'];
} else {
    $js = "<p>could not get value</p>";
}

echo $js;
