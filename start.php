<?php

$handle = fopen ("php://stdin","r");
$line = fgets($handle);

echo $line;
