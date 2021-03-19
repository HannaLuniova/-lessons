<?php

// $a= '<b>Привет</b><i>Привет</i> ';

// echo strip_tags($a);

// $a = file_get_contents('https://www.onliner.by');

// echo strip_tags($a, ['br']);

// $html = <<<'TEXT'
// <p><b>Это жирный текст</b></p>
// <p><strong>Это strong-текст</strong></p>
// <p><big>Это большой текст</big></p>
// <p><em>Это акцентированный текст</em></p>
// <p><i>Это курсив</i></p>
// <p><small>Это маленький текст</small></p>
// <p>Это<sub> подстрочный</sub> и <sup>надстрочный</sup>текст</p>
// TEXT;

// echo strip_tags($html);

$text = '
<p>Параграф.</p>
<!--Comment--->
Ещё <b>немногно</b> текста';

echo strip_tags($text);

echo "\n\n------\n";

//не удалять <p><b>
echo strip_tags($text, '<p><b>');
