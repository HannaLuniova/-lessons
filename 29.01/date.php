 <?php

    date_default_timezone_set("Europe/Minsk");
    echo date("d.m.y\n");
    echo date("H:i:s\n");

    echo date("M-d-Y-", mktime(0, 0, 0, 10, 14, 1984)); //Oct-14-1984-Sun
