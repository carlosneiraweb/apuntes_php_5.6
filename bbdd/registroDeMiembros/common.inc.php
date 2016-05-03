<!DOCTYPE html>
<!--
 author Carlos Neira Sanchez
 mail arj.123@hotmail.es
 telefono ""
 nameAndExt common.inc
 fecha 29-abr-2016
-->
<?php
require_once 'config.php';
require_once 'Member.class.php';
require_once 'LogEntry.class.php';

function validateField($fieldName, $missingFields){
    if(in_array($fieldName, $missingFields)){
        echo 'class="error"';
    }
}

function setChecked(DataObject $obj, $fieldName, $fieldValue){
    if($obj->getValue($fieldName) == $fieldValue){
        echo ' checked="checked"';
    }
}

function setSelected(DataObject $obj, $fieldName, $fieldValue){
    if($obj->getValue($fieldName) == $fieldValue){
        echo 'selected="select"';
    }
}

function displayPageHeader($pageTitle){
    
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pageTitle ?></title>
        <link rel="stylesheet" type="text/css" href="../../common.css"/>
        <style type="text/css">
            th{text-align: left; background-color: #bbb; }
            th, td{padding: 0.4em; }
            tr.alt td{background: #ddd }
            .error{background: #d33; color: white; padding: 0.2em;}
        </style>
    </head>
    <body>
        <h1><?php echo $pageTitle ?></h1>
   
<?php } 

function displayPageFooter(){
?>
    </body>
</html>
<?php } 


