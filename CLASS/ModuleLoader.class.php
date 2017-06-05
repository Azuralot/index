<?php

class ModuleLoader {
    
    static public function load($MODULE) {

        switch($MODULE) {
            
            case 'home':
            echo '
            
            <h1>Strona główna</h1>
            
            ';
            break;
                 
            
            default;     
            break;
            
        }
        
    }
    
}

?>