<?php
    try{
        $path="../index.xml";
        $xmldoc = new DOMDocument("1.0");
        $xmldoc->preserveWhiteSpace = true;
        $xmldoc->formatOutput = true;
        $xmldoc->load($path, LIBXML_NOBLANKS);
        $xmldoc->save($path);
        $xmldoc->load($path);
    }
    catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }
?>