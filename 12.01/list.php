<?php

$list = ["Иванов", "Петров", "Сидоров"];

function theList($arr)
{
    $html = "<ul>\n";

    foreach ($arr as $value) {
        $html .= "\t<li>$value</li>\n";
    }
    $html .= "</ul>\n";
    return $html;
}

echo theList($list);

