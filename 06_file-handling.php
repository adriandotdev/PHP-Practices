<?php
$filePath = 'extras/users.txt';

if (file_exists($filePath)) {
    $handle = fopen($filePath, 'r');
    $contents = fread($handle, filesize($filePath));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($filePath, 'w');
    $content = 'Nads May Jocelyn RC Eric Lenard';
    fwrite($handle, $content);
    fclose($handle);
}
