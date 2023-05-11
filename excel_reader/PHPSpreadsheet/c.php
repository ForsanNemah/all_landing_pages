
<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");

    $spreadsheet = $reader->load('q.xlsx');
 
    $sheet = $spreadsheet->getActiveSheet();

echo "wwe";
 


$sheet->getCell('A1')
    ->setValue('value good');
 

    $sheet->getCell('C5')
    ->setValue('مرجان احمد مرجان ');









    /*
    $last_row = (int) $sheet->getHighestRow();
    $new_row = $last_row+1;
    $sheet->setCellValue('A'.$new_row, "wwe");
    $sheet->setCellValue('B'.$new_row, "b");
    $sheet->setCellValue('C'.$new_row, "c");
    $sheet->setCellValue('D'.$new_row,"d");
    $sheet->setCellValue('H'.$new_row,"e");
 

*/
    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
    $writer->save('q.xlsx');