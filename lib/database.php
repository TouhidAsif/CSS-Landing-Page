<?php 

class Database{
     
    private $hostdb="localhost";
    private $userdb="root";
    private $passdb="";
    private $namedb="db_student";
    private $pdo;
    public function _construct(){
          
        if(!isset($this->pdo)){
            try{
                $link = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb,$this->userdb,$this->passdb);
                $link->setAttribute(PDO::ATTR_ERRORMODE,PDO::ERRORMODE_EXCEPTION);
                $link->exec("SET CHARACTER SET utf8");
                $this->pdo=$link;
                
            }
            catch(PDOException $e){
                die("failed to connect with database!".$e->getMessage()); 
                
            }
        }  
        
    }
    
    public function select($table,$data=array()){
        $sql = 'SELECT';
        $sql .= array_key_exists("select",$data)?$data['select']:'*';
        $sql .=' FROM '.$table;
        
        if(array_key_exists("where",$data)){
            $sql .=  ' WHERE ';
            $i = 0;
            foreach ($data['where'] as $key => $value){
                
                $add = ($i > 0)?' AND ':'';
                $sql .= "$add"."$key=:$key";
                $i++;
            }
        }
        
        if(array_key_exists("order_by", $data)){
            $sql .=' ORDER_BY '.$data['order_by'];
        }
        if(array_key_exists("start", $data) && array_key_exists("limit", $data)){
            $sql .= ' LIMIT '.$data['start'].','.$data['limit'];
        }
        elseif(!array_key_exists("start", $data) && array_key_exists("limit", $data)){
              
             $sql .=' LIMIT '.$data['limit'];
            
        }
        
        $query = $this->pdo->prepare($sql);
        
        if(array_key_exists("where",$data)){
            foreach($data['where'] as $key => $value){
                $query->bindValue(":$key", $value);
            }
        }
        
        $query->execute();
        
        if(array_key_exists('return_type',$data)){
            
            switch($data['return_type']){
                    
                    case 'count';
                    $value = $query->rowCount();
                    break;
                    
                     case 'single';
                    $value = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                    
                default:
                    $value = '';
                    break;
            }
        }  else{
            if($query->rowCount()>0){
                $value = $query->fetchAll();
            }
        }
        return !empty($value)?$value:false;
    }
    
    
    
    
    
      
    public function insert(){
        
        
        
    }   
    public function update(){
        
        
    }   
    public function delete(){
        
        
    }
    
}

?>