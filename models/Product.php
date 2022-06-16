<?php

class Product{
    public function create($name, $description, $img_url, $prixAchat, $prixVente){
        Database::query(
            "INSERT INTO products set name = ?, description = ?, slug = ? , img_url = ? , prixAchat = ? , prixVente = ?",
            [$name, $description, str_replace(' ', '-', $name), $img_url, $prixAchat, $prixVente]
        );  
    }

    public function update($name, $description, $img_url, $prixAchat, $prixVente, $id){
        Database::query(
            "UPDATE products set name = ?, description = ?, img_url = ? , prixAchat = ? , prixVente = ? WHERE id = ?", 
            [$name, $description, $img_url, $prixAchat, $prixVente, $id]
        );
    }

    public function delete($id){
        Database::query("DELETE FROM products  WHERE id = ?", [$id]);  
    }

    public function readWithId($id){
        return Database::recover(Database::query("SELECT * FROM products  WHERE id = ?", [$id]));  
    }

    public function readWithSlug($slug){
        return Database::recover(Database::query("SELECT * FROM products  WHERE slug = ?", [$slug]));  
    }

    public function readAll(){
        return Database::recover(Database::query("SELECT * FROM products"), false);
    }
}