<?php

  namespace Massfice\Proccess;

  use Massfice\SmartyEngine\SmartyEngine;

  class Proccess {

    private $name;
    private $surname;

    private $infos;

    private $csv_dir;

    public function __construct(string $csv_dir) {
      $this->name = isset($_POST['name']) ? $_POST['name'] : '';
      $this->surname = isset($_POST['surname']) ? $_POST['surname'] : '';
      $this->infos = [];
      $this->csv_dir = $csv_dir;
      SmartyEngine::getInstance()->generateContent('result_div','blank.tpl');
    }

    private function addMsg(string $msg, bool $type) {
      $this->infos[] = new Info($msg,$type);
    }

    private function areErrors() : bool {
      $b = false;

      foreach($this->infos as $info) {
        $b = $b || $info->isError();
      }

      return $b;
    }

    private function validate() : bool {

      if(empty($this->name))
        $this->addMsg('Musisz podać imię.',false);

      if(empty($this->surname))
        $this->addMsg('Musisz podać nazwisko.',false);

      if($this->areErrors())
        return false;

      $name_code = preg_match('/^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+$/m',$this->name);
      $surname_code = preg_match('/^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+$/m',$this->surname);

      if(!$name_code || $name_code == 0)
        $this->addMsg('Musisz podać poprawne imię.',false);

      if(!$surname_code || $surname_code == 0)
        $this->addMsg('Musisz podać poprawne nazwisko.',false);

      return !$this->areErrors();
    }

    public function make() {
      if($this->validate()) {

        $handle = fopen($this->csv_dir,'a+');
        fputcsv($handle,[
          $this->name,
          $this->surname
        ]);
        fclose($handle);

        $handle = fopen($this->csv_dir,'r');
        $names = fgetcsv($handle);

        while($buff = fgetcsv($handle)) {
          $names = $buff;
        }

        fclose($handle);

        SmartyEngine::getInstance()->generateContent('result_div','result.tpl',[
          'name' => $this->name,
          'surname' => $this->surname
        ]);

        $this->addMsg('Wykonano poprawnie!',true);
      }

      SmartyEngine::getInstance()->generateContent('infos_div','infos.tpl',[
        'infos' => $this->infos
      ]);
    }

  }

?>
