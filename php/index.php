<?php include("./include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./include/headers.php")?>
    <title>Activity 2 | MacBooks</title>
</head>
<body class="bg-<?php echo $bg; ?>" <?php 
    if(isset($_GET['registered'])&&!empty($_GET['registered']))
    echo "onLoad=\"callToast()\"";
?>>
    <?php include("./include/navbar.php"); ?>
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-fixed bottom-0 end-0 p-3" id="toast">
        <?php
            if (isset($_GET['registered']))
            include("./include/prompts/PromptRegistration.php");
        ?>
        </div>
    </div>
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