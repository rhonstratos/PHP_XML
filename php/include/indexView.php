<?php
    function search($searchValue){
        include("config.php");
        $flag=0;
        foreach($xmldoc->getelementsByTagName("macBook") as $macBooks) {
            $modelNumber = $macBooks->getelementsByTagName("modelNumber")[0];
            $variantName = $macBooks->getelementsByTagName("variantName")[0];
            $computeOptions = $macBooks->getelementsByTagName("computeOptions")[0];
            $memoryOptions = $macBooks->getelementsByTagName("memoryOptions")[0];
            $storageOptions = $macBooks->getelementsByTagName("storageOptions")[0];
            
            if( str_contains(strtolower($variantName->nodeValue),strtolower($searchValue))||
                str_contains(strtolower($modelNumber->nodeValue),strtolower($searchValue))){
                $flag+=1;
                echo '
                <div class="container my-5 w-50 main rounded-3 py-md-5 py-4 border border-3 border-dark">
                    <h2><small class="text-muted">Variant:</small> '.$variantName->nodeValue.'</h2>
                    <h3><small class="text-muted">Model Number:</small> '.$modelNumber->nodeValue.'</h3>';
                    $cpuList = array();
                    $memoryList = array();
                    $storageList = array();
                    $bg="dark";
                    $text="white";
                echo '<div class="container d-inline-flex justify-content-center gap-1 text-center mt-3">';
                foreach($computeOptions->getelementsByTagName("cpu") as $cpu){ 
                    array_push($cpuList,$cpu->getelementsByTagName("name")[0]->nodeValue.' ('.$cpu->getelementsByTagName("cores")[0]->nodeValue.' Cores)<br>');
                }
                include("indexCard_CPU.php");
                foreach($memoryOptions->getelementsByTagName("memory") as $memory){ 
                    array_push($memoryList,$memory->nodeValue);
                }
                include("indexCard_memory.php");
                foreach($storageOptions->getelementsByTagName("storage") as $storage){ 
                    array_push($storageList,$storage->nodeValue);
                }
                include("indexCard_storage.php");
                echo '</div>';
                echo '</div>';
            }
        }
        switch($flag){
            case 0: 
                include("emptyView.php");
                break;
                
            default: 
                break;
        }
    }
    function plain(){
        include("config.php");

        foreach($xmldoc->getelementsByTagName("macBook") as $macBooks) {
            $modelNumber = $macBooks->getelementsByTagName("modelNumber")[0];
            $variantName = $macBooks->getelementsByTagName("variantName")[0];
            $computeOptions = $macBooks->getelementsByTagName("computeOptions")[0];
            $memoryOptions = $macBooks->getelementsByTagName("memoryOptions")[0];
            $storageOptions = $macBooks->getelementsByTagName("storageOptions")[0];

            echo '
                <div class="container my-5 w-50 main rounded-3 py-md-4 py-3 border border-3 border-dark">
                    <h2><small class="text-muted">Variant:</small> '.$variantName->nodeValue.'</h2>
                    <h3><small class="text-muted">Model Number:</small> '.$modelNumber->nodeValue.'</h3>';
                    $cpuList = array();
                    $memoryList = array();
                    $storageList = array();
                    $bg="dark";
                    $text="white";
                echo '<div class="container d-inline-flex justify-content-center gap-1 text-center mt-3">';
                foreach($computeOptions->getelementsByTagName("cpu") as $cpu){ 
                    array_push($cpuList,$cpu->getelementsByTagName("name")[0]->nodeValue.' ('.$cpu->getelementsByTagName("cores")[0]->nodeValue.' Cores)<br>');
                }
                include("indexCard_CPU.php");
                foreach($memoryOptions->getelementsByTagName("memory") as $memory){ 
                    array_push($memoryList,$memory->nodeValue);
                }
                include("indexCard_memory.php");
                foreach($storageOptions->getelementsByTagName("storage") as $storage){ 
                    array_push($storageList,$storage->nodeValue);
                }
                include("indexCard_storage.php");
                echo '</div>';
                echo '</div>';
        }
    }
?>