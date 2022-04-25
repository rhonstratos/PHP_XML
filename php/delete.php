<?php
    include("./include/config.php");

    $targetId=$_GET['modelNumber'];
    foreach($xmldoc->firstElementChild->getelementsByTagName("macBook") as $macBook)
        if($macBook->firstElementChild->firstElementChild->nodeValue == $targetId){
            $node=$macBook;
            break;
        }

    $modelNumber = $node->firstElementChild->firstElementChild->nodeValue;
    $variantName = $node->firstElementChild->firstElementChild->nextElementSibling->firstElementChild->nodeValue;
    $specifications = $node->firstElementChild->nextElementSibling;
    $computeOptions = $specifications->firstElementChild;
    
    $cpuNames=array();
    $cpuCores=array();
    $memoryList=array();
    $storageList=array();
    $cpuList=array();
    
    foreach ($computeOptions->getElementsByTagName("cpu") as $cpu){
        array_push($cpuNames,$cpu->firstElementChild->nodeValue);
        array_push($cpuCores,$cpu->firstElementChild->nextElementSibling->nodeValue);
    }
    $memoryOptions = $specifications->firstElementChild->nextElementSibling;
    foreach($memoryOptions->getElementsByTagName("memory") as $memoryNode){
        array_push($memoryList,$memoryNode->nodeValue);
    }
    $storageOptions = $specifications->firstElementChild->nextElementSibling->nextElementSibling;
    foreach($storageOptions->getElementsByTagName("storage") as $storageNode){
        array_push($storageList,$storageNode->nodeValue);
    }
    for($x=0; $x < count($cpuNames);$x++) array_push($cpuList,$cpuNames[$x]." (".$cpuCores[$x]." Cores)");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./include/headers.php")?>
    <title>MacBooks | Delete Macbook</title>
</head>
<body class="pt-5 mt-5 main-bg" <?php 
    if(isset($_GET['delete'])&&!empty($_GET['delete']))
    echo "onLoad=\"callToast()\"";
?>>
    <?php 
        include("./include/navbar.php");
    ?>
    <div class="container-fluid py-5 mx-auto">
        <div class="container text-center text-white">
            <h1 class="display-1">Delete MacBook</h1>
            <div class="container my-5 w-50">
                <h2><small class="text-muted">Variant:</small><?php echo $variantName;?></h2>
                <h3><?php echo $modelNumber;?></h3>
                <div class="container d-inline-flex justify-content-center gap-1 text-center mt-3">
                    <?php
                        $bg="dark";
                        $text="white";
                        include("./include/indexCard_CPU.php");
                        include("./include/indexCard_Memory.php");
                        include("./include/indexCard_Storage.php");
                    ?>
                </div>
            </div>
            <a href="./processes/deleteProcess.php?modelNumber=<?php echo $targetId;?>" 
            class="btn btn-primary rounded-3 mt-5 mb-0 d-grid gap-2 col-1 mx-auto" type="button">Confirm</a>
        </div>
    </div>
</body>
</html>