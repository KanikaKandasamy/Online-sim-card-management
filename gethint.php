<?php

$frameworks = array("Srisha","manasa","Deepthi","Gowsi","Corona") ;

$name = $_GET["name"];

$l=strlen($name);

if ($l > 0) {

    $match = "";

    for ($i = 0; $i < count($frameworks); $i++) {

        if (strtolower($name) == strtolower(substr($frameworks[$i], 0, strlen($name)))) {

            if ($match == "") {

                $match = $frameworks[$i];

            } else {

                $match = $match . " , " . $frameworks[$i];

            }

        }

    }

}

echo ($match == "") ? 'no match found' : $match;

?>