<?php

class Tag{
    public function create($code, $libele){
        Database::query(
            "INSERT INTO tags set code = ?, libele = ?",
            [$code, $libele]
        );  
    }

    public function update($code, $libele, $id){
        Database::query(
            "UPDATE tags set code = ?, libele = ? WHERE id = ?", 
            [$code, $libele, $id]
        );
    }

    public function delete($id){
        Database::query("DELETE FROM tags  WHERE id = ?", [$id]);  
    }

    public function read($id){
        return Database::recover(Database::query("SELECT * FROM tags  WHERE id = ?", [$id]));  
    }


    public function readAll(){
        return Database::recover(Database::query("SELECT * FROM tags"), false);
    }
}