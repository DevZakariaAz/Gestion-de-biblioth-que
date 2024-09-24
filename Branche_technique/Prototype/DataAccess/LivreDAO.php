<?php
// require("../DB/DataBase.php");

// class LivreDAO {
//     private $database;

//     public function __construct() {
//         $this->database = new DataBase();
//     }

//     public function getLivres() {
//         return $this->database->retrieveData();
//     }

//     public function setLivre($livre) {
//         $this->database->storeData($livre);
//     }
// }
require_once '../DB/database.php';

class LivreDAO {
    private $database;

    public function __construct() {
        $this->database = new Database('../DB/database.json');
        // $this->L
    }

    public function getLivre() {
        return $this->database->getData();
    }

    public function saveLivre($livre) {
        $livres = $this->getLivre();
        $livres[] = $livre;
        return $this->database->setData($livres);
    }
}

?>
