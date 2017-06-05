<?php

class MainPage {
    
    private $active_page;
    
    public function __construct($ACTIVE_PAGE) {
        
        $this->active_page = $ACTIVE_PAGE;
        
        switch($this->active_page) {
            
            case 'home':
            require_once $this->active_page.".library.php";
            break;   
            
        }
        
    }
    
}

?>