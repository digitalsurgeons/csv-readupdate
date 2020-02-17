<?php
$fileHandleRead = fopen('customers.csv', 'r');
$fileHandleWrite = fopen('customers-updated.csv', 'w+');
$data = [];

// build array from CSV
while (!feof($fileHandleRead) ) {
  $data[] = fgetcsv($fileHandleRead, 0);
}

// loop through CSV data array by row
foreach ($data as $line) {
  if (!is_array($line)) {
    return;
  }

  // do stuff with this row
  
  // write this row to new CSV
  fputcsv($fileHandleWrite, $line);
}

fclose($fileHandleRead);
fclose($fileHandleWrite);