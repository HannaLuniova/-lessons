<?php

file_put_contents(
    "file.txt",
    file_get_contents("https://mystat.itstep.org/")
);
