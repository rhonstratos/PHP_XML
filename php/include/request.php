<?php

namespace Handlers;

use DOMDocument;
use Exception;

class XMLHandler
{
    private $xml, $path;
    public function setXML()
    {
        $this->xml = new DOMDocument("1.0");
        $this->xml->preserveWhiteSpace = true;
        $this->xml->formatOutput = true;
    }
    public function getXML()
    {
        return $this->xml;
    }
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function loadXML()
    {
        return $this->xml->load($this->path, LIBXML_NOBLANKS);
    }
    public function saveXML()
    {
        return $this->xml->save($this->path);
    }
}

class DuplicateChecker extends XMLHandler
{
    private $xml;
    public function __construct()
    {
        $this->setXML();
        $this->setPath("xml/index.xml");
        $this->loadXML();
        $this->xml = $this->getXML();
    }
    public function checkVariant($variantNameKey)
    {
        $flag = 0;
        foreach ($this->xml->getelementsByTagName("macBook") as $macBook) {
            $variantName = $macBook->getelementsByTagName("variantName")[0]->nodeValue;
            if (
                strtolower($variantName) ==
                strtolower($variantNameKey)
            ) {
                $flag += 1;
                break;
            }
        }
        switch ($flag) {
            case 0:
                return false;
                break;
            default:
                return true;
                break;
        }
    }
    public function checkBoth($variantNameKey, $modelNumberKey)
    {
        $flag = 0;
        foreach ($this->xml->getelementsByTagName("macBook") as $macBook) {
            $modelNumber = $macBook->getelementsByTagName("modelNumber")[0]->nodeValue;
            $variantName = $macBook->getelementsByTagName("variantName")[0]->nodeValue;

            if (
                strtolower($modelNumber) ==
                strtolower($modelNumberKey)
            ) {
                $flag += 1;
                break;
            }
            if (
                strtolower($variantName) ==
                strtolower($variantNameKey)
            ) {
                $flag += 1;
                break;
            }
        }
        switch ($flag) {
            case 0:
                return false;
                break;
            default:
                return true;
                break;
        }
    }
}

class Register extends XMLHandler
{
    private $xml;
    public function __construct()
    {
        $this->setXML();
        $this->setPath("xml/index.xml");
        $this->loadXML();
        $this->xml = $this->getXML();
    }
    public function register($modelNumber, $variantName, $processor, $memory, $storage, /*$file*/)
    {
        $dupe = new DuplicateChecker();
        $node = $this->xml;
        #$file_name = $file['name'];
        #$file_size = $file['size'];
        #$file_type = $file['type'];
        #$tmp_name = $file['tmp_name'];
        #$error = $file['error'];
        if ($dupe->checkBoth($variantName, $modelNumber)) {
            return "Item has a duplicate Model number or Variant name";
        } else {
            $childNode = $node->createElement("macBook");
            $info = $node->createElement("info");
            $modelNumber = $node->createElement(
                "modelNumber",
                $modelNumber
            );
            $variant = $node->createElement("variant");
            $variant->appendChild($node->createElement(
                "variantName",
                $variantName
            ));
            $specifications = $node->createElement("specifications");
            $computeOptions = $node->createElement("computeOptions");
            $memoryOptions = $node->createElement("memoryOptions");
            $storageOptions = $node->createElement("storageOptions");
            foreach ($processor as $value) {
                #echo $value;
                $split = explode("|", $value);
                print_r($split);
                $name = $node->createElement("name", $split[0]);
                $cores = $node->createElement("cores", $split[1]);
                $cpu = $node->createElement("cpu");
                $cpu->appendChild($name);
                $cpu->appendChild($cores);
                $computeOptions->appendChild($cpu);
            }
            foreach ($memory as $value) {
                $memoryOptions->appendChild(
                    $node->createElement(
                        "memory",
                        $value
                    )
                );
            }
            foreach ($storage as $value) {
                $storageOptions->appendChild(
                    $node->createElement(
                        "storage",
                        $value
                    )
                );
            }
            $specifications->appendChild($computeOptions);
            $specifications->appendChild($memoryOptions);
            $specifications->appendChild($storageOptions);

            $info->appendChild($modelNumber);
            $info->appendChild($variant);
            #$info->appendChild($node->createElement("img", $file_name));

            $childNode->appendChild($info);
            $childNode->appendChild($specifications);

            #move_uploaded_file($tmp_name, "../../assets/$file_name");

            $this->xml->getElementsByTagName("macBooks")[0]->appendChild($childNode);
            $this->saveXML();
            return "Success";
        }
    }
}
if (isset($_POST['registerModelNumber']) && isset($_POST['registerVariantName'])) {
    echo json_encode($_POST);
    print_r($_POST);
    print_r($_GET);
    $reg = new Register();
    $modelNumber = $_POST['registerModelNumber'];
    $variantName = $_POST['registerVariantName'];
    $processor = $_POST['processor'];
    $memory = $_POST['memoryCapacity'];
    $storage = $_POST['storageCapacity'];
    #$file = $_FILES['RegisterIMG'];
try{$reg->register($modelNumber, $variantName, $processor, $memory, $storage, /*$_FILES['RegisterIMG']*/);}
    catch(Exception $e){
        echo $e->getMessage();
    }
}
