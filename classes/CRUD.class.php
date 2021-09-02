<?php
class CRUD extends Conexao{
    
    private $query;
    
    private function prepareExecute($prepare,$execute){
        $this->query=$this->getConn()->prepare($prepare);
        $this->query->execute($execute);
    }
    
    public function insert($table,$condicao,$execute){
        $this->prepareExecute('INSERT INTO '.$table.' SET '.$condicao.'',$execute);
        return $this->getConn()->lastinsertId(); 
//        return $this->query; 
    }
    
    public function select($fields,$table,$condicao,$execute){
        $this->prepareExecute('SELECT '.$fields.' FROM '.$table.' '.$condicao.'',$execute);
        return $this->query; 
    }
    
    public function  update($table,$condicao,$execute){
        $this->prepareExecute('UPDATE '.$table.' SET '.$condicao.'',$execute);
        return $this->query; 
    }
    
    public function delete($table,$condicao,$execute){
        $this->prepareExecute('DELETE FROM '.$table.' '.$condicao.'', $execute);
        return $this->query;
    }
}
