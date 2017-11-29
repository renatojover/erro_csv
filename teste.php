<?php
$csv = array_map('str_getcsv', file('ControleNotas6Ano.csv'));

echo $csv[10][3];
?>