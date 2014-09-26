<?php

$code=stripslashes($_POST['codesrc']);
$handle = fopen("scriptarea.php", "w+");
fwrite($handle,$code);

?>