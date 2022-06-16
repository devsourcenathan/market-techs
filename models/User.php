<?php

//Classe qui va contenir les methodes et proprietes d'un utilisateur
class User{

    public static function create($nom, $prenom, $email, $adresse, $role, $password){
        Database::query("INSERT INTO user set nom = ?, prenom = ?, email = ? , adresse = ? , role = ? , password = ?", [$nom, $prenom, $email, $adresse, $role, $password]);  
    }

    public static function update($nom, $prenom, $email, $adresse, $role, $password, $id){
        Database::query("UPDATE user set nom = ?, prenom = ?, email = ? , adresse = ? , role = ? , password = ? WHERE id = ?", [$nom, $prenom, $email, $adresse, $role, $password, $id]);
    }

    public static function delete($id){
        Database::query("DELETE FROM user  WHERE id = ?", [$id]);  
    }

    public static function read($id){
        return Database::recover(Database::query("SELECT * FROM user  WHERE id = ?", [$id]));  
    }

    public static function readWithEmailAndPassword($email, $password){
        return Database::recover(Database::query("SELECT * FROM user  WHERE email = ? AND password = ?", [$email, $password]));  
    }

    public static function readAll(){
        return Database::recover(Database::query("SELECT * FROM user"), false);
    }

}