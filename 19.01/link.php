<?php

$c = file_get_contents("file2.txt");

echo ++$c;

file_put_contents("file2.txt", $c);
?>
<?php

echo $c = file_get_contents("file2.txt");

file_put_contents("file2.txt", ++$c);

