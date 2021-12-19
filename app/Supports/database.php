<?php
namespace App\Supports;

use mysqli;

/**
 * Database Connection 
 */


abstract class Database{
    private $host =HOST;
    private $user =USER;
    private $pass =PASS;
    private $db =DB;
    private $connection;

    /**
     * server connection
     */
    private function connection(){
       return $this-> connection=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    protected function create($sql){
        $this->connection()-> query($sql);
    }

    protected function all($table, $order=''){
        return $this->connection()->query("SELECT * FROM {$table} ORDER BY id{$order}");


    }
    protected function delete($table, $id){
        $this->connection()->query("DELETE FROM {$table} WHERE id={$id}");

    }
    protected function find($table, $id){
        $data= $this->connection()->query("SELECT * FROM {$table} WHERE id={$id} LIMIT 1");
        return $data->fetch_object();
    }
    protected function update($sql){
        $this->connection()-> query($sql);
    }

}




 ?>