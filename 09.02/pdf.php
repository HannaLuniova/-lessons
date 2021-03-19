<?php

//тип файла
header("Content-type:application/pdf");

//имя файла
header("Content-Disposition:attachment;filename='HTML_PZ_Module_2_Week_2_1554813962.pdf'");

//файл
readfile("original.pdf");
