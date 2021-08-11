<?php

function greet($name) {
    if (is_array($name) && count($name) > 1) {


    } else if (is_array($name) && count($name) === 2) {
        return "Hello, " . $name[0] . ' and ' . $name[1] . '.';
    } else if (is_array($name) && count($name) > 2) {
        $removedName = array_pop($name);
        $outputHello = 'Hello, ';
        $outputNames = '';
        $outputEnding = 'and ' . $removedName;
        forEach ($name as $person) {
            $outputNames .= $person . ', ';
        } return $outputHello . $outputNames . $outputEnding . '.';
    } else if ($name === null) {
        return "Hello, my friend.";
    } else if (ctype_upper($name)) {
        return "HELLO " . $name . "!";
    } else {
        return "Hello, " . $name;
    }
};

var_dump(greet(["Amy", "BRIAN", "Charlotte"]));