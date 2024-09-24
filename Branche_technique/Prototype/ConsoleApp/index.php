<?php
require_once '../Presentation/LivrePresentation.php';

$presentation = new LivrePresentation();
echo "========================\n";
echo " 1. Display Books\n ";
echo " 2. Add a Book\n";
echo "========================\n";
$choice = readline("Choose an option: ");

if ($choice == 1) {
    $presentation->afficherLivres();
} elseif ($choice == 2) {
    $presentation->ajouterLivre();
} else {
    echo "Invalid option!\n";
}

?>
