<?php
// require("../Services/LivreService.php");
// require("../Model/livre.php");
// class LivrePresentation {
//     private $livreService;

//     public function __construct() {
//         $this->livreService = new LivreService();
//     }

//     public function afficherLivres() {
//         $livres = $this->livreService->getLivres();
//         foreach ($livres as $livre) {
//             echo "ID: " . $livre->getId() . "\n";
//             echo "Title: " . $livre->getTitle() . "\n";
//             echo "ISBN: " . $livre->getISBN() . "\n";
//             echo "=================\n";
//         }
//     }

//     public function ajouterLivre() {
//         echo "Enter the title: ";
//         $title = trim(fgets(STDIN));
//         echo "Enter the ISBN: ";
//         $ISBN = trim(fgets(STDIN));

//         $id = time(); // Generate ID based on time
//         $livre = new Livre($id, $title, $ISBN);
//         $this->livreService->addLivre($livre);

//         echo "Livre added successfully.\n";
//     }
// }
require_once '../Services/LivreService.php';
 require("../Model/livre.php");

class LivrePresentation {
    private $service;

    public function __construct() {
        $this->service = new LivreService();
    }

    public function afficherLivres() {
        $livres = $this->service->getLivres();
        foreach ($livres as $livre) {
            echo "Title: {$livre['title']}, ISBN: {$livre['ISBN']}\n";
            echo "=================\n";
        }
    }

    public function ajouterLivre() {
        $title = readline("Enter the title: ");
        $ISBN = readline("Enter the ISBN: ");
        $this->service->addLivres(new Livre(time(), $title, $ISBN));
    }
}

?>
