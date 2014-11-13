<?php

namespace phpay\lib;
class validator{
    
    protected $valid = array();    
    protected $item = array();    
    protected function validate(){
        foreach($this->valid as $key => $var){
            if(false === $this->required($key, $var)){return false;}
            if(false === $this->customValidation($key)){return false;}
        }
        return true;
    }
    
    private function customValidation($key){
        $method = "validate_$key";
        if(!method_exists($this, $method)){return true;}
        return $this->$method($this->item[$key]);
    }
    
    private function required($key, $var){
        if(isset($this->item[$key]) && $this->item[$key] !== "" && !empty($this->item[$key])){return true;}
        if(isset($var['default'])){
            $this->set($key, $var['default']);
            return true;
        }
        if(isset($var['required']) && $var['required'] === true){
            $this->setError("Propriety $key is required!");
            return false;
        }
        return true;
    }
    
    protected function setError($erro){
        $this->error = $erro;
    }
    
    public function getError(){
        return $this->error;
    }
    
}