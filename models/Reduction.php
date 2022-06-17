<?php

class Reduction{
    public static function create($libele, $taux, $etat, $productId){
        Database::query(
            "INSERT INTO reductions set libele = ?, taux = ?, etat = ?, productId = ?",
            [$libele, $taux, $etat, $productId]
        );  
    }

    public static function update($libele, $taux, $etat, $productId, $id){
        Database::query(
            "UPDATE reductions set libele = ?, taux = ?, etat = ?, productId = ? WHERE id = ?", 
            [$libele, $taux, $etat, $productId, $id]
        );
    }

    public static function updateEtat($etat, $id){
        Database::query(
            "UPDATE reductions set etat = ? WHERE id = ?", 
            [$etat, $id]
        );
    }

    public static function delete($id){
        Database::query("DELETE FROM reductions  WHERE id = ?", [$id]);  
    }

    public static function read($id){
        return Database::recover(Database::query("SELECT * FROM reductions  WHERE id = ?", [$id]));  
    }


    public static function readAll(){
        return Database::recover(Database::query("SELECT * FROM reductions"), false);
    }
}