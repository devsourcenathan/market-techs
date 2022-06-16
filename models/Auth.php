<?php

require_once 'Database.php';
require_once 'User.php';
// Table pour reger l'authentifation et les permissions
class Auth{


    public static function Authenfication($email, $password){

        // Requete qui seletione un user dans la BD
        $user = Database::recover(Database::query("SELECT * FROM user WHERE email = ? AND password = ?", [$email, $password]));

        // On verifie et/ou demarre la session
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        // On stoke l'identifiant de l'user en session / si il existe
        if($user != false){
            

            $_SESSION['id'] = $user->id;
            $_SESSION['message'] = "Bienvenue";
            $_SESSION['message_type'] = "success";
            // Rediger en fonction de son role

            Auth::getRole();
        }else{
            // Renvoie à la page de connexion
            $_SESSION['message'] = "Erreur de conexion";
            $_SESSION['message_type'] = "danger";
            header("Location: ../connexion.php");
        }
    }

    public static function getRole(){
        // On recuperer l'user trouve
        $user = Database::recover(Database::query("SELECT * FROM user WHERE id = ?", array($_SESSION['id'])));

        if($user != false){
            $roles = ["client", "admin"];
            $role = $user->role;
    
            if($role = $roles[0]){
                header("Location: ../views/dashboards/apprenant/");
            }
    
    
            if($role = $roles[1]){
                header("Location: ../views/dashboards/admin/");
            }

    
            if(!in_array($role, $roles)){
                $_SESSION['message'] = "Vous n'avez pas les autorisations nécessaire !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../connexion.php");
            }
        }else{
            $_SESSION['message'] = "Une erreur c'est produite";
            $_SESSION['message_type'] = "danger";
            header("Location: ../connexion.php");
        }
    } 

}