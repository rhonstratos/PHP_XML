<?php
require_once("./include/config.php");

use Config\{Index, Update};

$index = new Index();
$update = new Update();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("./include/headers.php") ?>
    <title>Activity 2 | MacBooks</title>
</head>

<body class="bg-main">
    <!-- navbar -->
    <?php require_once("./include/navbar.php"); ?>
    <!-- main body -->
    <div class="bg-white">
        <div class="row mx-0 indexBody" style="height: fit-content !important;">
            <div class="container-fluid p-lg-5 p-4 text-white">
                <div class="d-flex justify-content-between mb-4">
                    <h1 class="fw-bold h1index">Browse for MacBooks</h1>
                    <form action="./" method="get" class="flex-row d-flex">
                        <input class="form-control form-control-lg search" type="text" name="search" placeholder="Search" id="" <?php if (isset($_GET["search"]) && !empty($_GET["search"])) echo 'value="' . $_GET["search"] . '"'; ?>>
                        <button type="submit" class="search-button"><img src="../assets/search.png" alt="..." width="20"></button>
                    </form>
                </div>
                <div class="d-flex justify-content-evenly flex-wrap text-black gap-5">
                    <?php
                    if (isset($_GET["search"]) && !empty($_GET["search"]))
                        $index->search($_GET["search"]);
                    else
                        $index->plain();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals -->
    <?php
    require_once "include/modals/register.php";
    require_once "include/modals/view.php";
    require_once "include/modals/update.php";
    require_once "include/modals/edit.php";
    ?>
    <!-- Toasts -->
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-fixed bottom-0 end-0 p-3" id="toast">
            <?php
            require_once "./include/toasts/delete.php";
            require_once "./include/toasts/duplicate.php";
            require_once "./include/toasts/register.php";
            require_once "./include/toasts/update.php";
            ?>
        </div>
    </div>
    <?php #require_once "include/footScript.php" 
    ?>
</body>

</html>