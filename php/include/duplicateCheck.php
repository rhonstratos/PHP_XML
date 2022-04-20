<?php
    class Duplicate{
        function check($variantNameKey,$modelNumberKey=null){
            $path="../../index.xml";
            $xmldoc = new DOMDocument("1.0");
            $xmldoc->preserveWhiteSpace = true;
            $xmldoc->formatOutput = true;
            $xmldoc->load($path, LIBXML_NOBLANKS);
            $xmldoc->save($path);
            $xmldoc->load($path);
            $flag = 0;
            foreach($xmldoc->firstElementChild->getelementsByTagName("macBook") as $macBook){
                $modelNumber = $macBook->firstElementChild->firstChild->nextSibling;
                $variantName = $modelNumber->parentNode->firstElementChild->nextElementSibling->firstElementChild;

                if(!is_null($modelNumberKey))
                    if (strtolower($modelNumber->nodeValue) ==
                        strtolower($modelNumberKey)){
                        $flag += 1;
                        break;
                    } 
                if(strtolower($variantName->nodeValue) ==
                        strtolower($variantNameKey)){
                    $flag += 1;
                    break;
                }
            }
            switch($flag){
                case 0 : return false; break;
                default: return true; break;
            }
        }
    }
    