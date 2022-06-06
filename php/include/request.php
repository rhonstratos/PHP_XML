<?php

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
        return $this->xml->load($this->path);
    }
    public function saveXML()
    {
        return $this->xml->save($this->path);
    }
}

class IndexView extends XMLHandler
{
    private $xml;
    public function __construct()
    {
        $this->setXML();
        $this->setPath("../xml/index.xml");
        $this->loadXML();
        $this->xml = $this->getXML();
    }
    public function handleRequest($request)
    {
        $node = $this->xml->getelementsByTagName("macBook");
        foreach ($node as $targetNode) {
            $modelNumber = $targetNode->getelementsByTagName("modelNumber")[0]->nodeValue;
            $variantName = $targetNode->getelementsByTagName("variantName")[0]->nodeValue;
            return "$modelNumber + $variantName";
        }
    }
}

class Register extends XMLHandler
{
    private $xml;
    public function __construct()
    {
        $this->setXML();
        $this->setPath("../xml/index.xml");
        $this->loadXML();
        $this->xml = $this->getXML();
    }
    public function handleRequest($request)
    {
        $node = $this->xml->getelementsByTagName("macBook");
        foreach ($node as $targetNode) {
            $modelNumber = $targetNode->getelementsByTagName("modelNumber")[0]->nodeValue;
            $variantName = $targetNode->getelementsByTagName("variantName")[0]->nodeValue;
            return "$modelNumber + $variantName + register";
        }
    }
}

if(isset($_GET['request'])){
    $cards = new IndexView();
    echo $cards->handleRequest($_GET['request']);
}
if(isset($_GET['register'])){
    $cards = new Register();
    echo $cards->handleRequest($_GET['register']);
}