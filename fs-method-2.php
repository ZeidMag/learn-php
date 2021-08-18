<?php

// file system - part 2

$file = 'readme.txt';

// opening a file for reading
// r opens for read only 
// r+ read and write, writing here overwrite original text
// a+ move the pointer to the end and start writing there
$handle = fopen($file,'a+'); 

// read the file
// echo fread($handle, filesize($file)); // read the entire file
// echo fread($handle, 112); // read 112 bytes only

// read a single line
echo fgets($handle); // read single line
echo fgets($handle); // this read the next line since the first call moved the pointer one line

// read a single character
echo fgetc($handle); // read single character from pointer
echo fgetc($handle);

// writing to a file
fwrite($handle, "\nEverything popular is wrong");


// close file
fclose($handle);

// delete file
$toBeDeleted = 'quotes.txt';
unlink($toBeDeleted)
?>