<?php
    #echo $_GET['modelNumber'];
    include("./include/config.php");
    include("./include/updateFroms.php");

    foreach($xmldoc->firstElementChild->getElementsByTagName("macBook") as $macBook){
        if($macBook->firstElementChild->firstElementChild->nodeValue == $_GET['modelNumber']){
            #echo $macBook->firstElementChild->firstElementChild->nodeValue;
            $oldNode = $macBook;
            break;
        }
    }
    if(isset($oldNode) && !empty($oldNode)){
        $modelNumber = $oldNode->firstElementChild->firstElementChild->nodeValue;
        $variantName = $oldNode->firstElementChild->firstElementChild->nextElementSibling->firstElementChild->nodeValue;
        $specifications = $oldNode->firstElementChild->nextElementSibling;
        $computeOptions = $specifications->firstElementChild;
        
        $cpuNames=array();
        $cpuCores=array();
        $memory=array();
        $storage=array();
        
        foreach ($computeOptions->getElementsByTagName("cpu") as $cpu){
            array_push($cpuNames,$cpu->firstElementChild->nodeValue);
            array_push($cpuCores,$cpu->firstElementChild->nextElementSibling->nodeValue);
        }
        $memoryOptions = $specifications->firstElementChild->nextElementSibling;
        foreach($memoryOptions->getElementsByTagName("memory") as $memoryNode){
            array_push($memory,$memoryNode->nodeValue);
        }
        $storageOptions = $specifications->firstElementChild->nextElementSibling->nextElementSibling;
        foreach($storageOptions->getElementsByTagName("storage") as $storageNode){
            array_push($storage,$storageNode->nodeValue);
        }
        #print_r($cpuNames);
        #print_r($cpuCores);
        #print_r($memory);
        #print_r($storage);
        #print_r(count($storage));
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./include/headers.php")?>
    <title>MacBooks | Update</title>
</head>
<body class="bg-<?php echo $bg; ?> pt-5 mt-5">
    <?php 
        include("./include/navbar.php");
    ?>
    <div class="container-fluid py-5 mx-auto">
        <div class="container text-center text-<?php echo $text ?> p-5">
            <h1 class="display-1">Update MacBook</h1>
            <form class="form w-75 mx-auto my-5 bg-dark rounded-3 p-5" action="./processes/updateProcess.php" method="POST">
                <?php include("./include/modal_confirm.php"); ?>
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row">
                        <div class="form-group form-floating me-4 w-100">
                            <input type="text" name="modelNumber" id="modelNumber" required="required" class="form-control form-control-lg text-center" readonly="readonly" placeholder="Model Number" value="<?php echo $modelNumber; ?>"></input>
                            <label for="modelNumber" class="text-dark">Model Number</label>
                        </div>
                        <div class="form-group form-floating w-100">
                            <input type="text" name="variantName" id="variantName" required="required" class="form-control form-control-lg text-center" placeholder="Variant Name" value="<?php echo $variantName ;?>"></input>
                            <label for="variantName" class="text-dark">Variant Name</label>
                        </div>
                    </div>
                    <div id="child-cpu">
                        <?php cpu(count($cpuNames),$cpuNames,$cpuCores); ?>
                    </div>
                    <div id="child-memory">
                        <?php memory($memory); ?>
                    </div>
                    <div id="child-storage">
                        <?php storage($storage); ?>
                    </div>
                </div>
                <div class="form-group mt-5 mb-0 d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-success fs-5 btn-lg" name="register"
                    data-bs-toggle="modal" data-bs-target="#myModal">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>