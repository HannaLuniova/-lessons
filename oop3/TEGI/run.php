<?php
include 'Tag.php';
include 'Table.php';

$a = new Tag('a',['href' => 'https://www.tut.by'],'tut.by');
//echo $a->setName('a');
//echo $a->setAttributes(['href' => 'https://www.tut.by']);
//echo $a->setInnerText('tut.by');
echo $a->open();
echo $a->close();

$br = new Tag('br', [], '');
echo $br->open();
echo $br->open();

$input = new Tag('input', ['type' => 'password', 'class' => 'atr', 'placeholder' => 'password'], '');
echo $input->open();

$input2 = new Tag('input', ['type' => 'submit', 'value' => 'Отправить'], '');
echo $input2->open();

$br = new Tag('br', [], '');
echo $br->open();
echo $br->open();


$textarea = new Tag('textarea', ['rows' => '10', 'cols' => '45', 'name' => 't'], 'Привет');
echo $textarea->open();
echo $textarea->close();

$br = new Tag('br', [], '');
echo $br->open();
echo $br->open();

$img = new Tag('img',
    ['src' => 'https://bipbap.ru/wp-content/uploads/2017/04/000f_7290754.jpg', 'alt' => 'картинка'], '');
echo $img->open();

$br = new Tag('br', [], '');
echo $br->open();
echo $br->open();

//$tab = new Table();
//echo $tab
//    ->setData(["1","2","3"])
//    ->setAttributes(['border' => '2','width' =>'40%','bordercolor' => '#1B2FDE'])
//    ->html();