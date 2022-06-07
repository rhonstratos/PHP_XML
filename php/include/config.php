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
                require('cards/indexCard.php');
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
            require('cards/indexCard.php');
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
    public function load()
    {
        $node = $this->xml->getElementsByTagName('macBook');
        foreach ($node as $targetNode) {
            $modelNumber = $targetNode->getelementsByTagName("modelNumber")[0]->nodeValue;
            $variantName = $targetNode->getelementsByTagName("variantName")[0]->nodeValue;
            ?>
            <tr>
                <td><?php echo $modelNumber; ?></td>
                <th><?php echo $variantName; ?></th>
                <td><button type="button" class="btn btn-primary" onclick="/* updateModal('<?php echo $modelNumber; ?>'); */$('#editMODAL').modal('show');">Edit</button></td>
            </tr>
<?php
        }
    }
}
