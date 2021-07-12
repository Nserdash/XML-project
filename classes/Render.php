<?php

class Render {
    
    public $connection;
    protected $query = "select * from xmldata ";
    protected $conditions = "Курс валют на ";

    function RenderTable() {
        
        $select = $this->connection->query($this->query);            

        if ($select->num_rows > 0) {
        
            echo '

            <table class = "margin-50">
            
                <thead>
                <th>Валюта</th>
                <th class = "text-right">Цена в рублях</th>
                </thead>
                <tbody> <br>'.$this->conditions.'';
                
    
                while($row = $select->fetch_assoc()) {  
    
                    echo $row['date']."<tr><td>".$row["name"]."</td><td class = 'text-right'>".$row["value"]."</td></tr>";
    
                }
    
            echo'
                </tbody>
            </table>';
    
        }
    
    }
}

