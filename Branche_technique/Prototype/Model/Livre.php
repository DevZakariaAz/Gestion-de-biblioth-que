<?php
class Livre {
    private $id;
    private $title;
    private $ISBN;

    public function __construct($id, $title, $ISBN) {
        $this->id = $id;
        $this->title = $title;
        $this->ISBN = $ISBN;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getISBN() {
        return $this->ISBN;
    }

    public function setISBN($ISBN) {
        $this->ISBN = $ISBN;
    }
}

class Livre {
    public $id;
    public $title;
    public $ISBN;

    public function __construct($id, $title, $ISBN) {
        $this->id = $id;
        $this->title = $title;
        $this->ISBN = $ISBN;
    }
}

?>
