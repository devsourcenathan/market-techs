<?php

class Product{
    public static function create($name, $description, $fournisseur, $img_url, $prixAchat, $prixVente){
        Database::query(
            "INSERT INTO products set name = ?, description = ?, fournisseur = ?, slug = ? , img_url = ? , prixAchat = ? , prixVente = ?",
            [$name, $description, $fournisseur, str_replace(' ', '-', $name), $img_url, $prixAchat, $prixVente]
        );  
    }

    public static function update($name, $description, $fournisseur, $prixAchat, $prixVente, $id){
        Database::query(
            "UPDATE products set name = ?, description = ?, fournisseur = ?, prixAchat = ? , prixVente = ? WHERE id = ?", 
            [$name, $description, $fournisseur, $prixAchat, $prixVente, $id]
        );
    }

    public static function updateEtat($etat, $id){
        Database::query(
            "UPDATE products set etat = ? WHERE id = ?", 
            [$etat, $id]
        );
    }

    public static function delete($id){
        Database::query("DELETE FROM products  WHERE id = ?", [$id]);  
    }

    public static function readWithId($id){
        return Database::recover(Database::query("SELECT * FROM products  WHERE id = ?", [$id]));  
    }

    public static function readWithSlug($slug){
        return Database::recover(Database::query("SELECT * FROM products  WHERE slug = ?", [$slug]));  
    }

    public static function readAll(){
        return Database::recover(Database::query("SELECT * FROM products"), false);
    }
}