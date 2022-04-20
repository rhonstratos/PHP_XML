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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./include/headers.php")?>
    <title>MacBooks | Delete Macbook</title>
</head>
<body class="pt-5 mt-5 bg-primary" <?php 
    if(isset($_GET['delete'])&&!empty($_GET['delete']))
    echo "onLoad=\"callToast()\"";
?>>
    <?php 
        include("./include/navbar.php");
    ?>
    <div class="container-fluid py-5 mx-auto">
        <div class="container text-center text-light">
            <h1 class="display-1">Delete MacBook</h1>
            <div class="container my-5 w-50">
                <h2><small class="text-muted">Variant:</small><?php echo $variantName;?></h2>
                <h3><?php echo $modelNumber;?></h3>
                <table class="table table-striped table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Compute Options</th>
                            <th scope="col">Memory Options</th>
                            <th scope="col">Storage Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">
                            <td scope="col">
                            <?php
                            for($x=0; $x < count($cpuNames);$x++) echo $cpuNames[$x]." (".$cpuCores[$x]." Cores)<br>"
                            ?>
                            </td>
                            <td scope="col">
                            <?php
                            foreach($memory as $memoryItem) echo $memoryItem."<br>"
                            ?>
                            </td>
                            <td scope="col">
                            <?php
                            foreach($storage as $storageItem) echo $storageItem."<br>"
                            ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="./processes/deleteProcess.php?modelNumber=<?php echo $targetId;?>" class="btn btn-success" type="button">Confirm</a>
        </div>
    </div>
</body>
</html>