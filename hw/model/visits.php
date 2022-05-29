<?php

function addVisitLog() : bool {
    $logName = date("Y-d-m");
    $info = [
        'dt' => date("H:i:s"),
        'ip' => $_SERVER['REMOTE_ADDR'],
        'uri' => $_SERVER['REQUEST_URI'],
        'referer' => $_SERVER['HTTP_REFERER'],
    ];

    $log = json_encode($info) . "\n";
    file_put_contents("db/visits/$logName.txt", $log, FILE_APPEND);
    return true;
}