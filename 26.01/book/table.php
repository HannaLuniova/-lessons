<?php

$book = file_get_contents("file.txt");
$records = explode("<----->", $book);

echo "<table border='1'>";

foreach ($records as  $record) {
    // trim($record);
    $row = explode("\n", trim($record));
    //   print_r($row);
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
}
echo "</table>";