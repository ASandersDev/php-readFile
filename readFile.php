<?php
//Set variable to file name
$loremFile = "lorem.txt";

//Read contents of file
$loremContent = file_get_contents($loremFile);

//Find all instance of elements between '[]' characters, excluding brackets. Store matches in array
preg_match_all("/(?<=\[)(.*?)(?=\])/", $loremContent, $loremArray);

//Print matches to screen
for ($i = 0; $i < count($loremArray[0]); $i++) {
    echo $loremArray[0][$i] . "<br>";
}
