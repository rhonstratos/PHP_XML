<?php
namespace Config;
require "request.php";
use Handlers\XMLHandler;
class Index extends XMLHandler{
    private $xml;
    public function __construct(){
        $this->setXML();
        $this->setPath("./xml/index.xml");
        $this->loadXML();
        $this->xml = $this->getXML();
    }
    public function search($searchValue){
        $flag=0;
        foreach($this->xml->getelementsByTagName("macBook") as $macBooks) {
            $modelNumber = $macBooks->getelementsByTagName("modelNumber")[0]->nodeValue;
            $variantName = $macBooks->getelementsByTagName("variantName")[0]->nodeValue;
            
            if( str_contains(strtolower($variantName),strtolower($searchValue))||
                str_contains(strtolower($modelNumber),strtolower($searchValue))){
                $flag+=1;
                require('indexCard.php');
            }
        }
        switch($flag){
            case 0: 
                include("emptyView.php");
                break;
                
            default: 
                break;
        }
    }
    public function plain(){
        foreach($this->xml->getelementsByTagName("macBook") as $macBooks) {
            $modelNumber = $macBooks->getelementsByTagName("modelNumber")[0]->nodeValue;
            $variantName = $macBooks->getelementsByTagName("variantName")[0]->nodeValue;
            require('indexCard.php');
        }
    }
}