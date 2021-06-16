
<?php
//1. create names array
//2. get Request
//3. make a sugestion
//3.1 Get letter
//3.2 Get Person
//4. give suggestion to ==<< javascript >>==
$people = array();
$people[] = "Anna";
$people[] = "Brittany";
$people[] = "Cinderella";
$people[] = "Diana";
$people[] = "Eva";
$people[] = "Fiona";
$people[] = "Gunda";
$people[] = "Hege";
$people[] = "Inga";
$people[] = "Johanna";
$people[] = "Kitty";
$people[] = "Linda";
$people[] = "Nina";
$people[] = "Ophelia";
$people[] = "Petunia";
$people[] = "Amanda";
$people[] = "Raquel";
$people[] = "Cindy";
$people[] = "Doris";
$people[] = "Eve";
$people[] = "Evita";
$people[] = "Sunniva";
$people[] = "Tove";
$people[] = "Unni";
$people[] = "Violet";
$people[] = "Liza";
$people[] = "Elizabeth";
$people[] = "Ellen";
$people[] = "Wenche";
$people[] = "Vicky";
$people[] = "Zainab";
$people[] = "Qasim";
$people[] = "Haider";
$people[] = "Jose";
$people[] = "Jack";
$people[] = "John";
$people[] = "Sipster";
$people[] = "Akansh";
$people[] = "Tejas";
$people[] = "Mohammed";
$people[] = "Abbas";
$people[] = "Hussain";
$people[] = "Jose";
$people[] = "Brad";
$people[] = "Jack";
$people[] = "Katie";


$q = $_REQUEST['q'];
function showSuggestion($incompleteName, $array) {
    $names = array();
    $length = strlen($incompleteName);
    $incompleteName = strtolower($incompleteName);
    foreach ($array as $person) {
        if(stristr($incompleteName, substr($person, 0, $length))){
            $names[] = $person;
        }
    }
    return join(", ", $names);
}
$suggestion = showSuggestion($q, $people);
echo $suggestion === '' ? 'no suggestion' : $suggestion;
?>