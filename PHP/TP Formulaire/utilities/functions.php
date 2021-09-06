<?php
function sanitizeDataNames($data) {
    $newData = strtolower($data);
    $newData = trim($newData);
    $newData = ucfirst($newData);
    $newData = htmlspecialchars($newData);
    return $newData;
}

function sanitizeNationality($data) {
    $newData = trim($data);
    $newData = ucfirst($newData);
    $newData = htmlspecialchars($newData);
    return $newData;
}

function sanitizeDataMails($data) {
    $newData = strtolower($data);
    $newData = trim($newData);
    $newData = htmlspecialchars($newData);
    return $newData;
}

function sanitizeSimple($data) {
    $newData = trim($data);
    $newData = htmlspecialchars($newData);
    return $newData;
}
