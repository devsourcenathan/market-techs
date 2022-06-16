<?php

require_once 'Database.php';
require_once 'User.php';
// Table pour reger l'authentifation et les permissions
class Auth{


    public static function Authenfication($email, $password){
        $user = null;

        // Requete qui seletione un user dans la BD
        $req = Database::query("SELECT * FROM user WHERE email = ? AND password = ?", array($email, $password));
        // On recuperer l'user trouve
        $user = Database::recover($req);

        // On stoke l'identifiant de l'user en session / si il existe
        if($user != null){
            // On verifie et/ou demarre la session
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }

            $_SESSION['id'] = $user->id;
            // Rediger en fonction de son role

            Auth::getRole();
        }else{
            // Renvoie à la page de connexion
            header("Location: ../connexion.php");
        }
    }

    public static function getRole(){
        // Requete qui seletione un user dans la BD
        $req = Database::query("SELECT * FROM user WHERE id = ?", array($_SESSION['id']));
        // On recuperer l'user trouve
        $user = Database::recover($req);

        $roles = ["apprenant", "formateur", "admin"];
        $role = $user->role;

        if($role = $roles[0]){
            header("Location: ../views/dashboards/apprenant/");
        }


        if($role = $roles[1]){
            header("Location: ../views/dashboards/formateur/");
        }

        if($role = $roles[2]){
            header("Location: ../views/dashboards/admin/");
        }

        if(!in_array($role, $roles)){
            header("Location: ../");
        }
    } 

}