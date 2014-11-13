<?php

namespace phpay\lib;
class setter extends validator{
    public function get($reset = true){
        if(false === $this->validate()){return false;}
        $item = $this->item;
        if($reset === true){$this->reset();}
        return $item;
    }
    
    protected function reset(){
        $this->item = array();
    }
    
    protected function set($key, $value){
        if(!array_key_exists($key, $this->valid)){return $this;}
        $this->item[$key] = $value;
        return $this;
    }
}