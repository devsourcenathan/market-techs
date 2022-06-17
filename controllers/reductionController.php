<?php

require_once 'controller.php';
    if(isset($_GET['action'])){
        
        $action = $_GET['action'];
    
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        if($action === "create"){
            $productId = htmlentities($_POST['productId']);
            $libele = htmlentities($_POST['libele']);
            $taux = htmlentities($_POST['taux']);
            $etat = htmlentities($_POST['etat']);

                if(Reduction::create($libele, $taux, $etat, $productId) === false){
                    $_SESSION['message'] = "Une erreur s'est produite !";
                    $_SESSION['message_type'] = "danger";
                    header("Location: ../views/dasboard/pruducts/display.php");
                }else{
                    $_SESSION['message'] = "La reduction a été créée !";
                    $_SESSION['message_type'] = "success";
                    header("Location: ../views/dasboard/pruducts/display.php");
                }
        }


        if($action == 'delete')
        {
            $id = $_GET['id'];
            if(Reduction::delete($id) === false){
                $_SESSION['message'] = "Une erreur s'est produite !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../views/dasboard/reductions/create.php");
            }else{
                $_SESSION['message'] = "La reduction a été retirée !";
                $_SESSION['message_type'] = "success";
                header("Location: ../views/dasboard/reductions/index.php");
            }	
        }

        if($action == 'updateState'){
            $id = htmlentities($_GET['id']);
            $etat = htmlentities($_GET['etat']);

            if(Reduction::updateEtat($etat, $id) === false){
                $_SESSION['message'] = "Une erreur s'est produite !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../views/dasboard/products/index.php");
            }else{
                $_SESSION['message'] = "La reduction a été modifiée !";
                $_SESSION['message_type'] = "success";
                header("Location: ../views/dasboard/products/index.php");
            }
        }
       
    }
       