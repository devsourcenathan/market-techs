<?php

class Reduction{
    public function create($libele, $taux, $etat, $productId){
        Database::query(
            "INSERT INTO reductions set libele = ?, taux = ?, etat = ?, productId = ?",
            [$libele, $taux, $etat, $productId]
        );  
    }

    public function update($libele, $taux, $etat, $productId, $id){
        Database::query(
            "UPDATE reductions set libele = ?, taux = ?, etat = ?, productId = ? WHERE id = ?", 
            [$libele, $taux, $etat, $productId, $id]
        );
    }

    public function updateEtat($etat, $id){
        Database::query(
            "UPDATE reductions set etat = ? WHERE id = ?", 
            [$etat, $id]
        );
    }

    public function delete($id){
        Database::query("DELETE FROM reductions  WHERE id = ?", [$id]);  
    }

    public function read($id){
        return Database::recover(Database::query("SELECT * FROM reductions  WHERE id = ?", [$id]));  
    }


    public function readAll(){
        return Database::recover(Database::query("SELECT * FROM reductions"), false);
    }
}