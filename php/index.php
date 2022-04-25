<?php include("./include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./include/headers.php")?>
    <title>Activity 2 | MacBooks</title>
</head>
<body class="pt-3 mt-5 bg-<?php echo $bg; ?>" <?php 
    if(isset($_GET['registered'])&&!empty($_GET['registered']))
    echo "onLoad=\"callToast()\"";
?>>
    <?php 
        include("./include/navbar.php");
        include("./include/prompts/PromptRegistration.php");
    ?>
    <div class="container-fluid py-5 mx-auto">
        <div class="container-fluid text-center text-<?php echo $text ?>">
            <h1 class="display-1">MacBooks</h1>
            <?php
                include("./include/indexView.php");

                if( isset($_POST['search']) && 
                    !empty($_POST['search']))
                    search($_POST['search']);
                else
                    plain();
            ?>
        </div>
    </div>
</body>
</html>