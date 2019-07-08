<?php
require_once './vendor/autoload.php';
//echo "Hola" ;

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

// Adding an empty Section to the document...
$section = $phpWord->addSection();

$header = $section->addHeader();
$header->addText('This is my fabulous header!');
 
$footer = $section->addFooter();
$footer->addText('Footer text goes here.');

// Adding Text element to the Section having font styled by default...
$section->addText('Hello World');

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('helloWorld.docx');

?>


