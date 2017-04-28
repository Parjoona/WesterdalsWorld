<?php
if (isset($_POST['data'])) {
    $js=$_POST['data'];
} else {
    $js = "<p>could not get value</p>";
}

echo $js;
