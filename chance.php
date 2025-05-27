<?php
$map = [
    "comments" => "01_Comments",
    "variables" => "02_Variables",
    "data_types" => "03_Data Types",
    "constants" => "04_Constants",
    "casting" => "05_Casting",
    "numbers" => "06_Numbers",
    "math" => "07_Math",
    "strings" => "08_Strings",
    "arrays" => "09_Arrays",
    "conditionals" => "10_Conditionals",
    "loops" => "11_Loops",
    "html_loop_attribute" => "12_HTML loop Attribute",
    "functions" => "13_Functions",
    "magic_constants" => "14_Magic Constants",
    "tests" => "15_Tests"
];

foreach ($map as $old => $new) {
    if (is_dir($old)) {
        if (!file_exists($new)) {
            rename($old, $new);
            echo "Renamed '$old' ➜ '$new'\n";
        } else {
            echo "Cannot rename '$old'. '$new' already exists.\n";
        }
    } else {
        echo "Folder '$old' not found.\n";
    }
}
