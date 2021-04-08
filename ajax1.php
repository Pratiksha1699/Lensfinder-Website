<?php
// Array with names
$a[] = "Canon-EFS-18-55mm";
$a[] = "Nikon-AFS-50mm";
$a[] = "Canon-EF-50mm";
$a[] = "Nikon-AFS-35mm";
$a[] = "Nikon-ED-VR-55-300mm";
$a[] = "Nikon-AF-70-300mm";
$a[] = "Laoma-24mm";
$a[] = "Canon-70-300mm";
$a[] = "Canon-55-250mm";
$a[] = "Nikon-AF-X-35mm";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";


// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
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