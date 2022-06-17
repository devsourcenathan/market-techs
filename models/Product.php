<?php

class Product{
    public static function create($name, $description, $img_url, $prixAchat, $prixVente){
        Database::query(
            "INSERT INTO products set name = ?, description = ?, slug = ? , img_url = ? , prixAchat = ? , prixVente = ?",
            [$name, $description, str_replace(' ', '-', $name), $img_url, $prixAchat, $prixVente]
        );  
    }

    public static function update($name, $description, $prixAchat, $prixVente, $id){
        Database::query(
            "UPDATE products set name = ?, description = ?, prixAchat = ? , prixVente = ? WHERE id = ?", 
            [$name, $description, $prixAchat, $prixVente, $id]
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