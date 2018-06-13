<?php

namespace FC;

use FC\Csv;

// include the library
require __DIR__ . "/../vendor/autoload.php";

// creates a new object and open the csv file
$pathToFile = __DIR__ . "/tests.csv";
$csv = new Csv($pathToFile, Csv::R);

// check if the file has been opened successfully
if (!$csv->isOpen()) { 
    die("ERROR: The file could not be opened!".PHP_EOL); 
}

// read the whole file line by line and display the content of each line
while (($line = $csv->readLine()) != Csv::EOF) {
    var_dump($line);
}

// close the csv file
$csv->closeFile();

