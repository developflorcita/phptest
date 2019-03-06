<?php
$absolutePath = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'];
    $absolutePath = str_replace('download.php', 'data.csv', $absolutePath);
    $pathParts = pathinfo($absolutePath);
    $fileName = $pathParts['basename'];
    $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
    $fileType = finfo_file($fileInfo, $absolutePath);
    finfo_close($fileInfo);
    $fileSize = filesize($absolutePath);
    ob_start();
    header('Content-Length: ' . $fileSize);
    header('Content-Type: ' . $fileType);
    header('Content-Disposition: attachment; filename=' . $fileName);
    ob_end_flush();
    readfile($absolutePath);
    exit;
