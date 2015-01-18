<?php

function getValue($param) {
    if ($param == "Z") {
        return 0;
    } else if ($param == "S" || $param == 's') {
        return 5;
    } else if ($param == "M" || $param == 'm') {
        return 3;
    } else if ($param == "L" || $param == 'l') {
        return 1;
    }
}

?>
