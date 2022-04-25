<?php include("./include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./include/headers.php")?>
    <title>MacBooks | Register</title>
</head>
<body class="bg-<?php echo $bg; ?> mt-3">
    <?php include("./include/navbar.php");?>
    <div class="container-fluid py-5 mx-auto">
        <div class="container text-center text-<?php echo $text ?> p-5">
            <h1 class="display-1">Register New MacBook</h1>
            <form class="form w-75 mx-auto my-5 bg-dark rounded-3 p-5" action="./processes/registerProcess.php" method="POST">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row">
                        <div class="form-group form-floating me-4 w-100">
                            <input type="text" name="modelNumber" id="modelNumber" class="form-control form-control-lg text-center" placeholder="Model Number" value="<?php ?>"></input>
                            <label for="modelNumber" class="text-dark">Model Number</label>
                        </div>
                        <div class="form-group form-floating w-100">
                            <input type="text" name="variantName" id="variantName" class="form-control form-control-lg text-center" placeholder="Variant Name" value="<?php ?>"></input>
                            <label for="variantName" class="text-dark">Variant Name</label>
                        </div>
                    </div>
                    <div id="child-cpu">
                        <div class="d-flex flex-row mt-3 w-100">
                            <div class="form-group w-100 input-group input-group-lg">
                                <span class="input-group-text">Processor</span>
                                <input type="text" name="cpuName[]" required="required" id="cpuName" class="form-control text-center" placeholder="Name" value="<?php ?>"></input>
                                <input type="number" name="cpuCores[]" required="required" id="cpuCores" class="form-control text-center" placeholder="Cores Count" value="<?php ?>"></input>                            
                                <button class="btn btn-success" type="button" onclick="addCpu();">+</button>
                            </div>
                        </div>
                    </div>
                    <div id="child-memory">
                        <div class="d-flex flex-row mt-3 w-100">
                            <div class="form-group w-100 input-group input-group-lg">
                                <span class="input-group-text">Memory</span>
                                <input type="number" name="memoryCapacity[]" required="required" id="memoryCapacity" class="form-control text-center" placeholder="Capacity" value="<?php ?>"></input>
                                <select class="form-select text-center" required="required" name="memoryUnit[]" id="memoryUnit">
                                    <option value="TB">TB</option>
                                    <option value="GB">GB</option>
                                </select>
                                <button class="btn btn-success" type="button" onclick="addMemory();">+</button>
                            </div>
                        </div>
                    </div>
                    <div id="child-storage">
                        <div class="d-flex flex-row mt-3 w-100">
                            <div class="form-group w-100 input-group input-group-lg">
                                <span class="input-group-text">Storage</span>
                                <input type="number" name="storageCapacity[]" required="required" id="storageCapacity" class="form-control text-center" placeholder="Capacity" value="<?php ?>"></input>
                                <select class="form-select text-center" required="required" name="storageUnit[]" id="storageUnit">
                                    <option value="TB">TB</option>
                                    <option value="GB">GB</option>
                                </select>                            
                                <button class="btn btn-success" type="button" onclick="addStorage();">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-5 mb-0 d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success" name="register">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>