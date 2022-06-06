<?php
function search($searchValue)
{
    include("config.php");
    $flag = 0;
    foreach ($xmldoc->getelementsByTagName("macBook") as $macBooks) {
        $modelNumber = $macBooks->getelementsByTagName("modelNumber")[0]->nodeValue;
        $variantName = $macBooks->getelementsByTagName("variantName")[0]->nodeValue;

        if (
            str_contains(strtolower($variantName), strtolower($searchValue)) ||
            str_contains(strtolower($modelNumber), strtolower($searchValue))
        ) {
            $flag += 1;
            include('indexCard.php');
        }
    }
    switch ($flag) {
        case 0:
?>
            <div class="container text-center text-light">
                <h2 class="display-1 my-5 py-5">No Results Found</h2>
            </div>
<?php
            break;

        default:
            break;
    }
}
function plain()
{
    include("config.php");

    foreach ($xmldoc->getelementsByTagName("macBook") as $macBooks) {
        $modelNumber = $macBooks->getelementsByTagName("modelNumber")[0]->nodeValue;
        $variantName = $macBooks->getelementsByTagName("variantName")[0]->nodeValue;
        include('indexCard.php');
    }
}
?>