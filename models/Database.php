<?php

//Classe pour la base de donnees
class Database{
    private static $dns = "mysql:host=localhost;dbname=bdprojet";
    private static $user = "root";
    private static $pwd = "root";

    public static $pdo = null;

    public function __construct(){

    }
    // Retourne une instance de PDO si c'elle si n'est pas null
    public static function getPDO(){
        
        if(self::$pdo === null){
            self::$pdo = new PDO(self::$dns, self::$user, self::$pwd);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }

    // Execute la requete passée en argument avec ou non des paramètres
    public static function query($statment, $parameters = null){

        $req = Database::getPDO()->prepare($statment);
        
        if($parameters === null){
            $req->execute();
        }else{
            $req->execute($parameters);
        }

        return $req;
    }

    public static function recover($req, $one = true){
        $req->setFetchMode(PDO::FETCH_OBJ);
        $datas;
        if($one === true){
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }

        return $datas;
    }

}