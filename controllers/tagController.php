<?php

require_once 'controller.php';
    if(isset($_GET['action'])){
        
        $action = $_GET['action'];
    
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        if($action === "create"){
            $code = htmlentities($_POST['code']);
            $libelle = htmlentities($_POST['libelle']);

                if(Tag::create($code, $libelle) === false){
                    $_SESSION['message'] = "Une erreur s'est produite !";
                    $_SESSION['message_type'] = "danger";
                    header("Location: ../views/dasboard/tags/create.php");
                }else{
                    $_SESSION['message'] = "Le tag a été enregistré !";
                    $_SESSION['message_type'] = "success";
                    header("Location: ../views/dasboard/tags/index.php");
                }
        }

        if($action == 'update')
        {
            $id = $_POST['id'];
            $code = htmlentities($_POST['code']);
            $libelle = htmlentities($_POST['libelle']);

            if(Tag::update($code, $libelle, $id) === false){
                $_SESSION['message'] = "Une erreur s'est produite !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../views/dasboard/tags/create.php");
            }else{
                $_SESSION['message'] = "Le tag a été modifié !";
                $_SESSION['message_type'] = "success";
                header("Location: ../views/dasboard/tags/index.php");
            }
        }

        if($action == 'delete')
        {
            $id = $_GET['id'];
            if(Tag::delete($id) === false){
                $_SESSION['message'] = "Une erreur s'est produite !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../views/dasboard/tags/create.php");
            }else{
                $_SESSION['message'] = "Le tag a été modifié !";
                $_SESSION['message_type'] = "success";
                header("Location: ../views/dasboard/tags/index.php");
            }	
        }
       
    }
       