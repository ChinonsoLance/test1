<?php
$stock_file=file_get_contents("api/stock-names.txt");
$stock_names=json_decode($stock_file,true);
?>