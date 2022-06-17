<?php

require_once 'controller.php';
    if(isset($_GET['action'])){
        
        $action = $_GET['action'];
    
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        if($action === "create"){
            $productId = htmlentities($_GET['productId']);
            $tagId = htmlentities($_GET['tagId']);

                if(Tag::create($productId, $tagId) === false){
                    $_SESSION['message'] = "Une erreur s'est produite !";
                    $_SESSION['message_type'] = "danger";
                    header("Location: ../views/dasboard/pruducts/display.php");
                }else{
                    $_SESSION['message'] = "Le tag a été ajouté !";
                    $_SESSION['message_type'] = "success";
                    header("Location: ../views/dasboard/pruducts/index.php");
                }
        }


        if($action == 'delete')
        {
            $id = $_GET['id'];
            if(Product_tag::delete($productId, $tagId) === false){
                $_SESSION['message'] = "Une erreur s'est produite !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../views/dasboard/pruducts/create.php");
            }else{
                $_SESSION['message'] = "Le tag a été retiré !";
                $_SESSION['message_type'] = "success";
                header("Location: ../views/dasboard/pruducts/index.php");
            }	
        }
       
    }
       