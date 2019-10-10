<?php

  namespace Massfice\JsonGenerator;

  use Massfice\Storage\ShelfBuilder;

  class JsonGenerator {

    private static $instance;
    private $shelf;

    private function __construct() {
      $this->shelf = ShelfBuilder::getBuilder()
        ->setJsonAllowed(true)
        ->setSessionAllowed(false)
        ->setModifyAllowed(false)
        ->setOverrideAllowed(true)
        ->build();
    }

    public static function getInstance() {
      if(!isset(self::$instance))
        self::$instance = new JsonGenerator();

      return self::$instance;
    }

    public function addData(string $key,$data) : self {

      $this->shelf->addData($key,$data,true);

      return $this;
    }

    public function makeJson() : string {
      return $this->shelf->makeJson();
    }

  }

?>
