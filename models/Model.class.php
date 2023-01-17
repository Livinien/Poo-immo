<?php

// Les Modèles qui vont gérer la modification des data en paticulier.

// Les modèles vont utiliser les instances de PDO qui va permettre de gérer la connexion entre la base de données et le code PHP.

// Abstract Model qui va gérer la connexion à la BDD.

// Abstract Model ne peut pas être instancier directement et sera utiliser par nos différents MainManager 

abstract class Model{
    private static $pdo;

    private static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=immobello;charset=utf8", "root", "root");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}