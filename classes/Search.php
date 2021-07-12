<?php

class Search extends Render {
        
    public function __construct() {

        if(isset($_GET['lookfor'])) {
            $this->query = "select * from xmldata where name like '%".$_GET['lookfor']."%'";      
            $this->conditions = 'Поиск по запросу "'.$_GET['lookfor'].'"';
        }

    }
    
}


?>
