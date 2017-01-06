<?php

class Users
{
    public $id;
    public $pseudo;
    public $email;
    public $password;
    public $nom;
    public $prenom;

    public function __construct($pseudo, $email, $password, $nom, $prenom)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function inscription()
    {
        try {
            $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $sql = $instance->prepare('INSERT INTO users(id, pseudo, email, password, nom, prenom)
        VALUES(null, :pseudo, :email, :password, :nom, :prenom)');
        $sql->execute(array(
            'pseudo' => $this->pseudo,
            'email' => $this->email,
            'password' => $this->password,
            'nom' => $this->nom,
            'prenom' => $this->prenom
        ));
    }

    public function connection()
    {
        try {
            $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $sql = $instance -> prepare("SELECT * FROM users WHERE pseudo = ? AND password = ?");
        $sql -> execute(array($this -> pseudo, $this -> password));

        if ($sql -> fetch()) {
         echo $message= "ok";
        } else {
            echo $message = "identifiants incorrect !";
        }
    }


    public function deconnection(){
        session_unset();
    }
}
