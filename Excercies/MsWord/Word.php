<?php

require_once __DIR__.'/../vendor/autoload.php';

$phpWord = new \PhpOffice\PhpWord\PhpWord();




$tableStyle = array(
    'borderColor' => '996699',
    'borderSize'  => 6,
    'cellMargin'  => 50
);


$section = $phpWord->addSection();
$firstRowStyle = array('bgColor' => '6600BBFF');
$phpWord->addTableStyle('myTable', $tableStyle, $firstRowStyle);
$table = $section->addTable('myTable');
$section->addTitle('OBJET DE LA BORDEREAUX DE LIVRAISON');

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('BL.docx');


