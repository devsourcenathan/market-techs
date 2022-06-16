<?php

class Product{
    public function create($name, $description, $img_url, $categorieId){
        Database::query("INSERT INTO products set name = ?, description = ?, slug = ? , img_url = ? , categorieId = ?", [$name, $description, str_replace(' ', '-'. $name), $img_url, $categorieId]);  
    }

    public function update($nom, $prenom, $email, $adresse, $role, $password, $id){
        Database::query("UPDATE products set name = ?, description = ?, slug = ? , img_url = ? , categorieId = ? WHERE id = ?", [$nom, $prenom, $email, $adresse, $role, $password, $id]);
    }

    public function delete($id){
        Database::query("DELETE FROM products  WHERE id = ?", [$id]);  
    }

    public function read($id){
        return Database::recover(Database::query("SELECT * FROM products  WHERE id = ?", [$id]));  
    }

    public function read($slug){
        return Database::recover(Database::query("SELECT * FROM products  WHERE slug = ?", [$slug]));  
    }

    public function readAll(){
        return Database::recover(Database::query("SELECT * FROM products"), false);
    }
}