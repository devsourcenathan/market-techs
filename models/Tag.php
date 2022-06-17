<?php

class Tag{
    public static function create($code, $libele){
        Database::query(
            "INSERT INTO tags set code = ?, libele = ?",
            [$code, $libele]
        );  
    }

    public static function update($code, $libele, $id){
        Database::query(
            "UPDATE tags set code = ?, libele = ? WHERE id = ?", 
            [$code, $libele, $id]
        );
    }

    public static function delete($id){
        Database::query("DELETE FROM tags  WHERE id = ?", [$id]);  
    }

    public static function read($id){
        return Database::recover(Database::query("SELECT * FROM tags  WHERE id = ?", [$id]));  
    }


    public static function readAll(){
        return Database::recover(Database::query("SELECT * FROM tags"), false);
    }
}