<?php
    if(isset($_POST['register'])){
        #include("./debug.php");
        include("config.php");
        include("../include/duplicateCheck.php");
        $duplicate = new Duplicate();
        if($duplicate->check($_POST['modelNumber'],$_POST['variantName'])){
            #TODO: mage webapge prompt
            echo "Duplicate";
        }
        else{   
            try{
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
                
                $xml->firstElementChild->appendChild($macBook);
                $xml->save($path);
                header("Location:../index.php?registered=true&modelNumber=".$_POST['modelNumber']);
            }
            catch (Exception $e){
                header("Location:../index.php?registered=false&exception=$e.message");
            }
        }
    }
    else{
        #TODO: make webpage for this and redirect
        echo "You are trying to illegally access this site...";
    }
