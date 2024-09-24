<?php
class Database {
    private $dataFile;

    public function __construct($dataFile) {
        $this->dataFile = $dataFile;
    }

    public function getData() {
        $content = file_get_contents($this->dataFile);
        $data = json_decode($content, true);

        if (is_null($data)) {
            return []; // Return an empty array if the content is invalid JSON
        }

        return $data;
    }

    public function setData($data) {
        return file_put_contents($this->dataFile, json_encode($data));
    }
}
?>
