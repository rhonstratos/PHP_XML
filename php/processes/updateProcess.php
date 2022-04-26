<?php
    if(isset($_POST['confirm'])){

        #include("./debug.php");
        include("config.php");
        include("../include/duplicateCheck.php");
        $duplicateCheck = new Duplicate();
        if($duplicateCheck->check($_POST['variantName'])){
            #TODO: mage webapge prompt
            #echo "Duplicate";
            header("Location: /edit.php?duplicate=true");
        }
        else{    
            
            try{    
                $targetId=$_POST['modelNumber'];
                foreach($xml->firstElementChild->getelementsByTagName("macBook") as $macBook){
                    if($macBook->firstElementChild->firstElementChild->nodeValue == $targetId){
                        $oldNode=$macBook;
                        break;
                    }
                }
                
                $macBook = $xml->createElement("macBook");
                $info = $xml->createElement("info");
                $modelNumber = $xml->createElement(
                    "modelNumber",$_POST['modelNumber']);

                $variant = $xml->createElement("variant");
                $variant->appendChild($xml->createElement(
                    "variantName",$_POST['variantName']));

                $specifications = $xml->createElement("specifications");
                $computeOptions = $xml->createElement("computeOptions");
                    for($x=0;$x<count($_POST['cpuName']);$x++){
                        $name=$xml->createElement("name",$_POST['cpuName'][$x]);
                        $cores=$xml->createElement("cores",$_POST['cpuCores'][$x]);
                        $cpu=$xml->createElement("cpu");
                        $cpu->appendChild($name);
                        $cpu->appendChild($cores);
                        $computeOptions->appendChild($cpu);
                    }
                $memoryOptions = $xml->createElement("memoryOptions");
                    for($x=0;$x<count($_POST['memoryCapacity']);$x++)
                        $memoryOptions->appendChild(
                            $xml->createElement("memory",
                            $_POST['memoryCapacity'][$x]." ".$_POST['memoryUnit'][$x]));
                $storageOptions = $xml->createElement("storageOptions");
                    for($x=0;$x<count($_POST['storageCapacity']);$x++)
                        $storageOptions->appendChild(
                            $xml->createElement("storage",
                            $_POST['storageCapacity'][$x]." ".$_POST['storageUnit'][$x]));
                
                $specifications->appendChild($computeOptions);
                $specifications->appendChild($memoryOptions);
                $specifications->appendChild($storageOptions);

                $info->appendChild($modelNumber);
                $info->appendChild($variant);

                $macBook->appendChild($info);
                $macBook->appendChild($specifications);
                
                $xml->firstElementChild->replaceChild($macBook,$oldNode);
                $xml->save($path);
                header("Location:../edit.php?modelNumber=$targetId&update=true");
            }
            catch (Exception $e){
                header("Location:../edit.php?modelNumber=$targetId&update=false&exception=$e.message");
            }
        }
    }
    else{
        #TODO: make webpage for this and redirect
        echo "You are trying to illegally access this site...";
    }
?>