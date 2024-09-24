<?php
// require("../DataAccess/LivreDAO.php");

// class LivreService {
//     private $livreDAO;

//     public function __construct() {
//         $this->livreDAO = new LivreDAO();
//     }

//     public function getLivres() {
//         return $this->livreDAO->getLivres();
//     }

//     public function addLivre($livre) {
//         $this->livreDAO->setLivre($livre);
//     }
    
// }
require_once '../DataAccess/LivreDAO.php';

class LivreService {
    private $livreDAO;

    public function __construct() {
        $this->livreDAO = new LivreDAO();
    }

    public function getLivres() {
        return $this->livreDAO->getLivre();
    }

    public function addLivres($livre) {
        $this->livreDAO->saveLivre($livre);
    }
}

?>
