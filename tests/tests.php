<?php

require __DIR__ . "/../csv.php";

$pathToFile = __DIR__ . "/tests.csv";
$csv = new CSV($pathToFile, CSV::R);

if (!$csv->isOpen()) { 
    die("ERROR: The file could not be opened!".PHP_EOL); 
}

while (($line = $csv->readLine()) != CSV::EOF) {
    var_dump($line);
}

$csv->closeFile();

