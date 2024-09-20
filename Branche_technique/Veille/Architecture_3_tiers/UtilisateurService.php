<?php
// UtilisateurService.php
require_once 'UtilisateurDAO.php';

class UtilisateurService extends UtilisateurDAO {
    private $utilisateurDAO;

    public function __construct() {
        $this->utilisateurDAO = new UtilisateurDAO();
    }

}
?>