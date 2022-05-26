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
    <!-- navbar -->
    <?php include("./include/navbar.php"); ?>
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-fixed bottom-0 end-0 p-3" id="toast">
        <?php
            if (isset($_GET['registered']))
            include("./include/prompts/PromptRegistration.php");
        ?>
        </div>
    </div>
    <!-- main body -->
    <div class="row mx-0">
        <div class="container-fluid indexBody p-lg-5 p-4 text-white">
            <div class="navbar">
                <h1 class="fw-bold h1index">Browse for MacBooks</h1>
                <form action="" method="post" class="flex-row d-flex">
                    <input class="form-control form-control-lg search" type="text" name="search" placeholder="Search" id="">
                    <button type="submit" class="search-button"><img src="../assets/search.png" alt="..." width="20"></button>
                </form>
            </div>
            <div class="d-flex justify-content-evenly flex-wrap text-black gap-5">
                <div class="card cardIndex">
                    <img src="../assets/macBook.png" alt="..." width="300">
                    <div class="card-body">
                        Apple Mac Book Pro<br>A33DJDFH
                        <a href="#" class="text-decoration-none float-end">
                            More Info
                            <img src="../assets/moreThan_100.png" width="20">
                        </a>
                    </div>
                </div>
                <div class="card cardIndex">
                    <img src="../assets/macBook.png" alt="..." width="250">
                    <div class="card-body">
                        Apple Mac Book Pro<br>A33DJDFH
                        <a href="#" class="text-decoration-none float-end">
                            More Info
                            <img src="../assets/moreThan_100.png" width="20">
                        </a>
                    </div>
                </div>
                <div class="card cardIndex">
                    <img src="../assets/macBook.png" alt="..." width="250">
                    <div class="card-body">
                        Apple Mac Book Pro<br>A33DJDFH
                        <a href="#" class="text-decoration-none float-end">
                            More Info
                            <img src="../assets/moreThan_100.png" width="20">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>