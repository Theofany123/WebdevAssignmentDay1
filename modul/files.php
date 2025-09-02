<?php
$file = fopen("test.txt", "w");
fwrite($file, "semangat anak sem 3!");
fclose($file);

if (file_exists("test.txt")) {
    echo file_get_contents("test.txt");
}