<?php
    function cpu($cpuNamesCount,$cpuNamesArray,$cpuCoresArray){
        for($x=0;$x<$cpuNamesCount;$x++){
            echo'<div class="d-flex flex-row mt-3 w-100">';
            echo'<div class="form-group w-100 input-group input-group-lg">';
            echo'<span class="input-group-text">Processor</span>';
            echo'<input type="text" name="cpuName[]" id="cpuName" required="required" class="form-control text-center" placeholder="Name" value="'.$cpuNamesArray[$x].'"></input>';
            echo'<input type="number" name="cpuCores[]" id="cpuCores" required="required" class="form-control text-center" placeholder="Cores Count" value="'.$cpuCoresArray[$x].'"></input>  ';
            echo'<button class="btn btn-success" type="button" onclick="addCpu();">+</button>';
            echo'</div>';
            echo'</div>';
        }
    };
    function memory($memory){
        for($x=0;$x<count($memory);$x++){
            $arr = explode(" ",$memory[$x]);
            echo'<div class="d-flex flex-row mt-3 w-100">';
            echo'<div class="form-group w-100 input-group input-group-lg">';
            echo'<span class="input-group-text">Memory</span>';
            echo'<input type="number" name="memoryCapacity[]" required="required" id="memoryCapacity" class="form-control text-center" placeholder="Capacity" value="'.$arr[0].'"></input>';
            echo'<select class="form-select text-center" required="required" name="memoryUnit[]" id="memoryUnit">';
            if($arr[1]=="TB"){
                echo'<option value="TB" selected>TB</option>';
                echo'<option value="GB">GB</option>';
            }
            else{
                echo'<option value="TB">TB</option>';
                echo'<option value="GB" selected>GB</option>';
            }
            echo'</select>';
            echo'<button class="btn btn-success" type="button" onclick="addMemory();">+</button>';
            echo'</div>';
            echo'</div>';
        }
    };
    function storage($storage){
        for($x=0;$x<count($storage);$x++){
            echo '<div class="d-flex flex-row mt-3 w-100">';
            echo '<div class="form-group w-100 input-group input-group-lg">';
            echo '<span class="input-group-text">Storage</span>';
            echo '<input type="number" name="storageCapacity[]" required="required" id="storageCapacity" class="form-control text-center" placeholder="Capacity" value="'.preg_replace('/[^0-9]/', '', $storage[$x]).'"></input>';
            echo '<select class="form-select text-center" required="required" name="storageUnit[]" id="storageUnit">';
            if(str_contains($storage[$x],"TB")){
                echo'<option value="TB" selected>TB</option>';
                echo'<option value="GB">GB</option>';
            }
            else{
                echo'<option value="TB">TB</option>';
                echo'<option value="GB" selected>GB</option>';
            }
            echo '</select>';
            echo '<button class="btn btn-success" type="button" onclick="addStorage();">+</button>';
            echo '</div>';
            echo '</div>';
        }
    };
?>