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
    <script>
        $(window).on('load', () => {
            const options = {
                animation: true,
                autohide: true,
                delay: 5000
            }
            <?php #require_once "include/footScript.php"; 
            if (isset($_GET['deleted'])) {
            ?>
                $('#DeleteToast').toast(options)
                $('#DeleteToast').toast('show')
            <?php
            }
            if (isset($_GET['duplicate'])) {
            ?>
                $('#DuplicateToast').toast(options)
                $('#DuplicateToast').toast('show')
            <?php
            }
            if (isset($_GET['registered'])) {
            ?>
                $('#RegisterToast').toast(options)
                $('#RegisterToast').toast('show')
            <?php
            }
            if (isset($_GET['updated'])) {
            ?>
                $('#UpdateToast').toast(options)
                $('#UpdateToast').toast('show')
            <?php
            }
            ?>
        })
    </script>
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
                        <input class="form-control form-control-lg search" type="text" name="search" id="searchSuggest" placeholder="Search" id="" <?php if (isset($_GET["search"]) && !empty($_GET["search"])) {
                                                                                                                                                        $val = $_GET["search"];
                                                                                                                                                        echo "value='$val'";
                                                                                                                                                    } ?>>
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
    <!-- Toasts -->
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-fixed bottom-0 end-0 p-3" id="toast">
            <?php
            if (isset($_GET['deleted'])) require_once "./include/toasts/delete.php";
            if (isset($_GET['duplicate'])) require_once "./include/toasts/duplicate.php";
            if (isset($_GET['registered'])) require_once "./include/toasts/register.php";
            if (isset($_GET['updated'])) require_once "./include/toasts/update.php";
            ?>
        </div>
    </div>
    <!-- Modals -->
    <?php
    require_once "include/modals/delete_list.php";
    require_once "include/modals/delete.php";
    require_once "include/modals/register.php";
    require_once "include/modals/update_list.php";
    require_once "include/modals/update.php";
    require_once "include/modals/view.php";
    ?>
</body>

</html>