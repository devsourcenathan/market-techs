<?php

//Classe qui va contenir les methodes et proprietes d'un utilisateur
class User{

    public function create($nom, $prenom, $email, $adresse, $role, $password){
        Database::query("INSERT INTO user set nom = ?, prenom = ?, email = ? , adresse = ? , role = ? , password = ?", [$nom, $prenom, $email, $adresse, $role, $password]);  
    }

    public function update($nom, $prenom, $email, $adresse, $role, $password, $id){
        Database::query("UPDATE user set nom = ?, prenom = ?, email = ? , adresse = ? , role = ? , password = ? WHERE id = ?", [$nom, $prenom, $email, $adresse, $role, $password, $id]);
    }

    public function delete($id){
        Database::query("DELETE FROM user  WHERE id = ?", [$id]);  
    }

    public function read($id){
        return Database::recover(Database::query("SELECT * FROM user  WHERE id = ?", [$id]));  
    }

    public function readAll(){
        return Database::recover(Database::query("SELECT * FROM user"), false);
    }

}