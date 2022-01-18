<?php
// needed addon
include('./docx_reader.php');
//checks the year
$Year = date('Y');
//checks the week

$currentWeekNumber = date('W')+0;

// path and name of the file
$filename = './test '. $Year .' v.'.$currentWeekNumber .' file.docx';
// debug message
//echo $filename;


$doc = new Docx_reader();
$doc->setFile($filename);


if (file_exists($filename)) {
    if(!$doc->get_errors()) {
    $html = $doc->to_html();
    $plain_text = $doc->to_plain_text();

    echo $html;
} else {
    echo implode(', ',$doc->get_errors());
}
echo "\n";
} else {
    echo "Spesific file dosent exist";
}

