<?php

// include the library
require __DIR__ . "/../src/csv.php";

// creates a new object and open the csv file
$pathToFile = __DIR__ . "/tests.csv";
$csv = new CSV($pathToFile, CSV::R);

// check if the file has been opened successfully
if (!$csv->isOpen()) { 
    die("ERROR: The file could not be opened!".PHP_EOL); 
}

// read the whole file line by line and display the content of each line
while (($line = $csv->readLine()) != CSV::EOF) {
    var_dump($line);
}

// close the csv file
$csv->closeFile();

