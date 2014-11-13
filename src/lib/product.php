<?php

namespace phpay\lib;
class product extends setter{
    protected $valid = array(
        'code'   => array('required' => true),
        'name'   => array('required' => true),
        'price'  => array('required' => true),
        'amount' => array('required' => true),
    );
    
    public function setCode($propriety){
        return $this->set('code', $propriety);
    }
    
    public function setName($propriety){
        return $this->set('name', $propriety);
    }
    
    public function setPrice($propriety){
        return $this->set('price', $propriety);
    }
    
    public function setAmount($propriety){
        return $this->set('amount', $propriety);
    }
    
}