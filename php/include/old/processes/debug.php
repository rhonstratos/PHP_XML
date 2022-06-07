<?php 
    echo $_POST['variantName']."<br>";
    echo $_POST['modelNumber']."<br>";
    foreach($_POST['cpuName'] as $cpuName) echo $cpuName."<br>";
    foreach($_POST['cpuCores'] as $cpuCores) echo $cpuCores."<br>";
    foreach($_POST['memoryCapacity'] as $memoryCapacity) echo $memoryCapacity."<br>";
    foreach($_POST['memoryUnit'] as $memoryUnit) echo $memoryUnit."<br>";
    foreach($_POST['storageCapacity'] as $storageCapacity) echo $storageCapacity."<br>";
    foreach($_POST['storageUnit'] as $storageUnit) echo $storageUnit."<br>";
?>