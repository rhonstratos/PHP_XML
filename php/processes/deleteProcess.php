<?php
    if(isset($_GET['modelNumber']) && !empty($_GET['modelNumber'])){

        #include("./debug.php");
        
        try{    
            include("config.php");
            $targetId=$_GET['modelNumber'];
            foreach($xml->firstElementChild->getElementsByTagName("macBook") as $macBook){
                if($macBook->firstElementChild->firstElementChild->nodeValue == $targetId){
                    $oldNode=$macBook;
                    break;
                }
            }
            
            $xml->firstElementChild->removeChild($oldNode);
            $xml->save($path);
            header("Location:../edit.php?delete=true&modelNumber=$targetId");
        }
        catch (Exception $e){
            header("Location:../edit.php?delete=false&exception=$e.message");
        }
    }
    else{
        #TODO: make webpage for this and redirect
        echo "You are trying to illegally access this site...";
    }
?>