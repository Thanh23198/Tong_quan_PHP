<?php
$a = array(
    array("may tinh", "22tr", "China"),
    array("may in", "20tr", "England"),
    array("dieu hoa", "toshiba", "Japan"),
);
for ($row = 0; $row < 3; $row++) {
    echo "<ol>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $a[$row][$col] . "</li>";
    }
    echo "<ol>";
}
