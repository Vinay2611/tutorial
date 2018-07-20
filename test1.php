<?php

$str = "Is your name O'Reilly?";
echo addslashes($str);
eval("echo '" . addslashes($str) . "';");
?>