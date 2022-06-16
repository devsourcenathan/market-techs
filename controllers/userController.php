<?php

    require_once 'controller.php';
    if(isset($_GET['action'])){
        
        $action = $_GET['action'];
    
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    
        if($action === "create"){
            $nom = htmlentities($_GET['nom']);
            $prenom = htmlentities($_GET['prenom']);
            $email = htmlentities($_GET['email']);
            $adresse = htmlentities($_GET['adresse']);
            $role = htmlentities($_GET['role']);
            $password = sha1($password);
    
            $user = User::readWithEmailAndPassword($email, $password);
            if($user !== false){
                if(User::create($nom, $prenom, $email, $adresse, $role,$password) === false){
                    $_SESSION['message'] = "Erreur de conexion !";
                    $_SESSION['message_type'] = "danger";
                    header("Location: ../views/dasboard/create.php");
                }else{
                    $_SESSION['message'] = "L'utilisateur a été créé !";
                    $_SESSION['message_type'] = "success";
                    header("Location: ../views/dasboard/index.php");
                }
            }else{
                $_SESSION['message'] = "Erreur : l'utilisateur existe déja !";
                $_SESSION['message_type'] = "warning";
                header("Location: ../views/dasboard/create.php");
            }
    
        }
    
        if($action === "update"){
            $id = htmlentities($_GET['id']);
            $nom = htmlentities($_GET['nom']);
            $prenom = htmlentities($_GET['prenom']);
            $email = htmlentities($_GET['email']);
            $adresse = htmlentities($_GET['adresse']);
            $role = htmlentities($_GET['role']);
            $password = sha1($password);
    
            if(User::update($nom, $prenom, $email, $adresse, $role,$password, $id) === false){
                $_SESSION['message'] = "Erreur lors de la mise à jour !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../views/dasboard/update.php");
            }else{
                $_SESSION['message'] = "L'utilisateur a été modifié !";
                $_SESSION['message_type'] = "success";
                header("Location: ../views/dasboard/index.php");
            }
        }
    
        if($action === "delete"){
            if(User::delete($_GET['id']) === false){
                $_SESSION['message'] = "Erreur lors de la supression !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../views/dasboard/update.php");
            }else{
                $_SESSION['message'] = "L'utilisateur a été supprimé !";
                $_SESSION['message_type'] = "success";
                header("Location: ../views/dasboard/index.php");
            }
        }
    
        if($action === "connexion"){
            Auth::Authenfication(htmlentities($_POST['email']), sha1($_POST['password']));
        }
    
        if($action === "deconnexion"){
            Auth::Disconnexion();
        }
    }else{
        Auth::getRole();
    }