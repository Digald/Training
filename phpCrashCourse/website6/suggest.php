<?php
// People Array @TODO - get from the DB
$people = ['Steve', 'John', 'Kathy', 'Evan', 'Anthony', 'Tom', 'Rhonda', 'Hal', 'Jillian'];

// Get query string

$q = $_REQUEST['q'];

$suggestion = "";

// Get suggestions
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($people as $person) {
        if (stristr($q, substr($person, 0, $len))) {
            if ($suggestion === '') {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;