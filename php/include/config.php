<?php

namespace Config;

require "request.php";

use Handlers\XMLHandler;
use DOMDocument;

class Index extends XMLHandler
{
    private $xml;
    public function __construct()
    {
        $this->setXML();
        $this->setPath("include/xml/index.xml");
        $this->loadXML();
        $this->xml = $this->getXML();
    }
    public function search($searchValue)
    {
        $flag = 0;
        $node = $this->xml->getelementsByTagName("macBook");
        foreach ($node as $targetNode) {
            $modelNumber = $targetNode->getelementsByTagName("modelNumber")[0]->nodeValue;
            $variantName = $targetNode->getelementsByTagName("variantName")[0]->nodeValue;
            $img = $targetNode->getelementsByTagName("img")[0]->nodeValue;

            if (
                str_contains(strtolower($variantName), strtolower($searchValue)) ||
                str_contains(strtolower($modelNumber), strtolower($searchValue))
            ) {
                $flag += 1;
                require('cards/index.php');
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
    public function plain()
    {
        $node = $this->xml->getelementsByTagName("macBook");
        foreach ($node as $targetNode) {
            $modelNumber = $targetNode->getelementsByTagName("modelNumber")[0]->nodeValue;
            $variantName = $targetNode->getelementsByTagName("variantName")[0]->nodeValue;
            $img = $targetNode->getelementsByTagName("img")[0]->nodeValue;
            require('cards/index.php');
        }
    }
}
class Update extends XMLHandler
{
    private $xml;
    public function __construct()
    {
        $this->setXML();
        $this->setPath("include/xml/index.xml");
        $this->loadXML();
        $this->xml = $this->getXML();
    }
    public function load($var)
    {
        $node = $this->xml->getElementsByTagName('macBook');
        foreach ($node as $targetNode) {
            $modelNumber = $targetNode->getelementsByTagName("modelNumber")[0]->nodeValue;
            $variantName = $targetNode->getelementsByTagName("variantName")[0]->nodeValue;
            ?>
            <tr>
                <td><?php echo $modelNumber; ?></td>
                <th><?php echo $variantName; ?></th>
                <td>
                    <?php
                    if ($var == 'update') {
                    ?>
                        <button type="button" class="btn btn-primary" onclick="viewEdit('<?php echo $modelNumber; ?>');$('#updateMODAL').modal('show');">
                        <img class="" src="../assets/icons/edit.png" alt="..." style="max-height: 20px; max-width: 20px; margin-bottom: 2.5px;"></button>
                    <?php
                    }
                    if ($var == 'delete') {
                    ?>
                        <button type="button" class="btn btn-danger" onclick="viewDelete('<?php echo $modelNumber; ?>');$('#deleteMODAL').modal('show');">
                        <img src="../assets/icons/delete.png" alt="..." style="max-height: 25px; max-width: 25px; margin-bottom: 2.5px;"></button>
                    <?php
                    }
                    ?>
                </td>
            </tr>
<?php
        }
    }
}
