<?php

class Articles {
    public $id;
    public $date;
    public $titre;
    public $chapo;
    public $texte;

    public function __construct($date, $titre, $chapo, $texte)
    {
        $this->date = $date;
        $this->titre = $titre;
        $this->chapo = $chapo;
        $this->texte = $texte;
    }

    public function afficher() {

        try {
            $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $sql = $instance->prepare('INSERT INTO articles(id, date, titre, chapo)
        VALUES(null, :date, :titre, :chapo,)');
        $sql->execute(array(
            'pseudo'=> $this -> date,
            'email'=> $this -> titre,
            'password'=> $this -> chapo
        ));

//        if (isset($_POST['date'], $_POST['titre'], $_POST['chapo'])){
//            $sql = = $instance->query($sql)->fetch();
//        }
//    }
    public function modifier(){
        $sql = "DELETE FROM user  WHERE id = ".$_POST['userId'];

    }
    public function poster(){

    }
}