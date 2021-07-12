<?php

class DataXml {

    public $connection;

    public function InsertDataToDB() {
    
            $date = $_GET['date'];
        
           $this->connection->query("delete from xmldata");            
        
            $xml = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp?date_req='.$date.'');
            
            foreach($xml->Valute as $value) {
                $this->connection->query("Insert into xmldata(name,value) values('".$value->Name."','".$value->Value."')");            
            }    
        
            $this->connection->query("Insert into xmldata(date) values('".$date."')");            
                
            header('Location: / ');
        
    }

    public function DeleteDataFromDB() {
        
        if(isset($_GET['delete'])) {

            $result = $this->connection->query("DELETE from xmldata");       
        
            header('Location: / ');
        
        }
        
    }

}


?>
