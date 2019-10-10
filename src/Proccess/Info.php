<?php

  namespace Massfice\Proccess;

  class Info {

    private $type; // bool - true dla informacji, false dla błędów
    private $msg; //string - wiadomość

    public function __construct(string $msg, bool $type) {
      $this->type = $type;
      $this->msg = $msg;
    }

    public function isInfo() : bool {
      return $this->type;
    }

    public function isError() : bool {
      return !$this->type;
    }

    public function getMsg() : string {
      return $this->msg;
    }

  }

?>
