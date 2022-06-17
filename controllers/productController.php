<?php

require_once 'controller.php';
    if(isset($_GET['action'])){
        
        $action = $_GET['action'];
    
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        if($action === "create"){
            $name = htmlentities($_POST['name']);
            $description = htmlentities($_POST['description']);
            $fournisseur = htmlentities($_POST['fournisseur']);
            $prixAchat = htmlentities($_POST['prixAchat']);
            $prixVente = htmlentities($_POST['prixVente']);

            $img_url = $upload->upload_image($_FILES['image'], 'product', 400, 400, '../assets/img/');

                if(Product::create($name, $description, $fournisseur, $img_url, $prixAchat, $prixVente) === false){
                    $_SESSION['message'] = "Une erreur s'est produite !";
                    $_SESSION['message_type'] = "danger";
                    header("Location: ../views/dasboard/products/create.php");
                }else{
                    $_SESSION['message'] = "Le produit a été enregistré !";
                    $_SESSION['message_type'] = "success";
                    header("Location: ../views/dasboard/products/index.php");
                }
        }

        if($action == 'update')
        {
            $id = $_POST['id'];
            $name = htmlentities($_POST['name']);
            $description = htmlentities($_POST['description']);
            $fournisseur = htmlentities($_POST['fournisseur']);
            $prixAchat = htmlentities($_POST['prixAchat']);
            $prixVente = htmlentities($_POST['prixVente']);

            if(Product::update($name, $description, $fournisseur, $prixAchat, $prixVente, $id) === false){
                $_SESSION['message'] = "Une erreur s'est produite !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../views/dasboard/products/create.php");
            }else{
                $_SESSION['message'] = "Le produit a été modifié !";
                $_SESSION['message_type'] = "success";
                header("Location: ../views/dasboard/products/index.php");
            }
        }

        if($action == 'delete')
        {
            $id = $_GET['id'];
            if(Product::delete($id) === false){
                $_SESSION['message'] = "Une erreur s'est produite !";
                $_SESSION['message_type'] = "danger";
                header("Location: ../views/dasboard/products/create.php");
            }else{
                $_SESSION['message'] = "Le produit a été modifié !";
                $_SESSION['message_type'] = "success";
                header("Location: ../views/dasboard/products/index.php");
            }	
        }
       
       if($action == 'update_etat'){
           $etat = $_GET['etat'];
           $id = $_GET['id'];
           if(Product::updateEtat($etat, $id) === false){
            $_SESSION['message'] = "Une erreur s'est produite !";
            $_SESSION['message_type'] = "danger";
            header("Location: ../views/dasboard/products/index.php");
        }else{
            $_SESSION['message'] = "Action reussie !";
            $_SESSION['message_type'] = "success";
            header("Location: ../views/dasboard/products/index.php");
        }
       
       }
       
    
    }