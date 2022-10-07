<?php
namespace Piyush\Parag\Model;
class Product extends \Magento\Catalog\Model\Product{
    public function getName(){
        $name = parent::getName();
        $name.=" piyush";
              return $name;
          }
    // public function getSku(){
    //     name = parent::getSku();
    //     $name.=" +piyush";
    //           return $name;
    //       }
        } 