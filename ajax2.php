<?php
// Array with names
$b[] = "Canon";
$b[] = "Nikon";
$b[] = "Sony";
$b[] = "Sigma";
$b[] = "Tamron";
$b[] = "Rokinon";
$b[] = "SMC";
$b[] = "Olympus";
$b[] = "Panasonic";
$b[] = "Leica";
$b[] = "Zeiss";
$b[] = "Tokina";
$b[] = "Pentax";
$b[] = "Vivitar";
$b[] = "Schneider-Kreuznach";
$b[] = "Angenieux";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";


// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($b as $name) {
        $name = strtolower($name);
        if (strpos($name, $q)!==false) {
            if ($hint === "") {
                $hint = $name;
            } 
            else {
                $hint .= " $name";
                
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>