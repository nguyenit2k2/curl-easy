<?php
$startAt = (new DateTime)->format('H:i:s.u');
$id = uniqid(microtime(true), true);

$sleepSeconds = random_int(1, 5);
sleep($sleepSeconds);

$endAt = (new DateTime)->format('H:i:s.u');
echo sprintf(
    "<br>Request: %s - %s, start at: %s, end at: %s, sleep: %ss<br>",
    $_GET['idx'],
    $id,
    $startAt,
    $endAt,
    $sleepSeconds
);