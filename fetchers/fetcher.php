<?php

header('Content-Type: text/html');
$ch = curl_init('http://webevents.uow.edu.au/cgi-bin/webevent.cgi?cmd=listday&cal=cal47&cat=1&cf=list');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
echo curl_exec($ch);

?>s