<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excelarray 
{
    
/*    function __construct()
    {
        $this->namedDataArray = array();
    }*/
    public function excelToArray($filePath, $header=true){
            //Create excel reader after determining the file type
            $inputFileName = $filePath;
            /**  Identify the type of $inputFileName  **/
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            /**  Create a new Reader of the type that has been identified  **/
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            /** Set read type to read cell data onl **/
            $objReader->setReadDataOnly(true);
            /**  Load $inputFileName to a PHPExcel Object  **/
            $objPHPExcel = $objReader->load($inputFileName);
            //Get worksheet and built array with first row as header
            $objWorksheet = $objPHPExcel->getActiveSheet();
            //excel with first row header, use header as key
            if($header){
                $highestRow = $objWorksheet->getHighestRow();
                $highestColumn = $objWorksheet->getHighestColumn();
                $headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
                $headingsArray = $headingsArray[1];
                $r = -1;
                $this->namedDataArray = array();
                for ($row = 2; $row <= $highestRow; ++$row) {
                    $dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
                    if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
                        ++$r;
                        foreach($headingsArray as $columnKey => $columnHeading) {
                            $this->namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
                        }
                    }
                }
            }
            else{
                //excel sheet with no header
                $this->namedDataArray = $objWorksheet->toArray(null,true,true,true);
            }
            return $this->namedDataArray;
    }
}
    
?>