<?php
    function search($searchValue){
        include("config.php");
        $flag=0;
        foreach($xmldoc->getelementsByTagName("macBook") as $macBooks) {
            $modelNumber = $macBooks->firstElementChild->firstChild->nextSibling;
            $variantName = $modelNumber->parentNode->firstElementChild->nextElementSibling->firstElementChild;
            $specifications = $macBooks->firstElementChild->nextElementSibling;
            
            $computeOptions = $specifications->firstElementChild;
            $memoryOptions = $specifications->firstElementChild->nextElementSibling;
            $storageOptions = $specifications->firstElementChild->nextElementSibling->nextElementSibling;
            
            if( str_contains(strtolower($variantName->nodeValue),strtolower($searchValue))||
                str_contains(strtolower($modelNumber->nodeValue),strtolower($searchValue))){
                $flag+=1;
                echo '
                <div class="container my-5 w-50">
                    <h2><small class="text-muted">Variant:</small> '.$variantName->nodeValue.'</h2>
                    <h3>Model Number: '.$modelNumber->nodeValue.'</h3>
                    <table class="table table-striped table-bordered table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Compute Options</th>
                                <th scope="col">Memory Options</th>
                                <th scope="col">Storage Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr scope="row">';
                            echo'<td scope="col">';
                            foreach($computeOptions->getelementsByTagName("cpu") as $cpu){ 
                                echo $cpu->firstElementChild->nodeValue.' ('.$cpu->firstElementChild->nextElementSibling->nodeValue.' Cores)<br>';
                            }
                            echo'</td>';
                            echo'<td scope="col">';
                            foreach($memoryOptions->getelementsByTagName("memory") as $memory){ 
                                echo $memory->nodeValue.'<br>';
                            }
                            echo'</td>';
                            echo'<td scope="col">';
                            foreach($storageOptions->getelementsByTagName("storage") as $storage){ 
                                echo $storage->nodeValue.'<br>';
                            }
                            echo'</td>';
                            echo '</tr>
                        </tbody>
                    </table>
                </div>';
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
            $modelNumber = $macBooks->firstElementChild->firstChild->nextSibling;
            $variantName = $modelNumber->parentNode->firstElementChild->nextElementSibling->firstElementChild;
            $specifications = $macBooks->firstElementChild->nextElementSibling;
            $computeOptions = $specifications->firstElementChild;
            $memoryOptions = $specifications->firstElementChild->nextElementSibling;
            $storageOptions = $specifications->firstElementChild->nextElementSibling->nextElementSibling;

            echo '
            <div class="container my-5 w-50">
                <h2><small class="text-muted">Variant:</small> '.$variantName->nodeValue.'</h2>
                <h3>Model Number: '.$modelNumber->nodeValue.'</h3>
                <table class="table table-striped table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Compute Options</th>
                            <th scope="col">Memory Options</th>
                            <th scope="col">Storage Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">';
                        echo'<td scope="col">';
                        foreach($computeOptions->getelementsByTagName("cpu") as $cpu){ 
                            echo $cpu->firstElementChild->nodeValue.' ('.$cpu->firstElementChild->nextElementSibling->nodeValue.' Cores)<br>';
                        }
                        echo'</td>';
                        echo'<td scope="col">';
                        foreach($memoryOptions->getelementsByTagName("memory") as $memory){ 
                            echo $memory->nodeValue.'<br>';
                        }
                        echo'</td>';
                        echo'<td scope="col">';
                        foreach($storageOptions->getelementsByTagName("storage") as $storage){ 
                            echo $storage->nodeValue.'<br>';
                        }
                        echo'</td>';
                        echo '</tr>
                    </tbody>
                </table>
            </div>';
        }
    }
?>