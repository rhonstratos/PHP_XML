<?php include("./include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./include/headers.php")?>
    <title>MacBooks | Edit</title>
</head>
<body class="bg-<?php echo $bg; ?> pt-5 mt-5 "<?php 
    if(isset($_GET['update'])||isset($_GET['delete'])||isset($_GET['duplicate']))
    echo "onLoad=\"callToast()\"";
?>>
    <?php 
        include("./include/navbar.php");
        if (isset($_GET['update']))
            include("./include/prompts/PromptUpdate.php");
        if (isset($_GET['delete']))
            include("./include/prompts/PromptDeletion.php");
        if (isset($_GET['duplicate']))
            include("./include/prompts/PromptDuplicate.php");
    ?>
    <div class="container-fluidpy-5 mx-auto px-lg-5">
        <div class="container-lg-fluid text-center text-<?php echo $text ?> mx-auto px-lg-5">
            <table class="table table-light table-striped text-center mx-sm-auto">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">Model Number</th>
                        <th scope="col">Variant</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($xmldoc->getelementsByTagName("macBook") as $macBooks) {
                            $modelNumber = $macBooks->firstElementChild->firstChild->nextSibling;
                            $variantName = $modelNumber->parentNode->firstElementChild->nextElementSibling->firstElementChild;
                            
                            echo '<tr scope="row">';
                                echo '<td>';
                                    echo '<h5>'.$modelNumber->nodeValue.'</h5>';
                                echo '</td>';
                                    echo '<td>';
                                    echo '<h5>'.$variantName->nodeValue.'</h5>';
                                echo '</td>';
                                echo '<td>';
                                    echo '<a href="./update.php?modelNumber='.$modelNumber->nodeValue.'" class="btn btn-outline-secondary me-sm-2">Update</a>';
                                    echo '<a href="./delete.php?modelNumber='.$modelNumber->nodeValue.'" class="btn btn-outline-danger">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>