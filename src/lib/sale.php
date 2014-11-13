<?php

namespace phpay\lib;
class sale extends setter{
    protected $valid = array(
        'discount' => array('default' => 0),
        'store'    => array('required' => true),
        'products' => array('required' => true),
        'costumer' => array('required' => true),
        'plots'    => array('default' => 1),
    );
    
    public function setDiscount($propriety){
        return $this->set('discount', $propriety);
    }
    
    public function setStore($propriety){
        return $this->set('store', $propriety);
    }
    
    public function setProducts($propriety){
        if(!is_array($propriety)){return $this;}
        return $this->set('products', $propriety);
    }
    
    public function setCostumer($propriety){
        if(!is_array($propriety)){return $this;}
        return $this->set('products', $propriety);
    }
    
    public function setPlots($propriety){
        return $this->set('plots', $propriety);
    }
}