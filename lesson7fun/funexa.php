<?php
$a = true;

function s($a = false) {
    if ($a == true) {
        return "ishladi";
    }
    return "ishlamadi";
}
echo s();