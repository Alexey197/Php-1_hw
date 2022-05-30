<?php

function checkVisitName(string $name) : bool {
    return !!preg_match('/^\d{4}\-\d{2}\-\d{2}\.txt$/', $name);
}

function getVisitsDay() : array {
    $files = scandir("db/visits");

    return array_filter($files, function ($file){
        return is_file("db/visits/$file") && checkVisitName($file);
    });
}

function addVisitLog() : bool {
    $logName = date("Y-d-m");
    $info = [
        'dt' => date("H:i:s"),
        'ip' => $_SERVER['REMOTE_ADDR'],
        'uri' => $_SERVER['REQUEST_URI'],
        'referer' => $_SERVER['HTTP_REFERER'] ?? '',
    ];

    $log = json_encode($info) . "\n";
    file_put_contents("db/visits/$logName.txt", $log, FILE_APPEND);
    return true;
}