<?php



function reverse_str($original_str)
{
    $new_str = "";
    for ($i = strlen($original_str) - 1; $i >= 0; $i--) {
        $new_str .= $original_str[$i];
    }
    return $new_str;
}

$last_name = "Kursin";

echo "Original: $last_name \n";

echo "Revers: ";
echo reverse_str($last_name);
