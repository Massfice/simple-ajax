<?php

  namespace Massfice\SmartyEngine;

  use Smarty;
  use Massfice\JsonGenerator\JsonGenerator;

  class SmartyEngine {

    private $smarty;
    private static $instance;

    private function __construct() {
      $this->smarty = new Smarty();

      $this->setTemplateDir(dirname(__DIR__,2).'/Smarty/Templates');
      $this->setCacheDir(dirname(__DIR__,2).'/Smarty/Caches');
      $this->setCompileDir(dirname(__DIR__,2).'/Smarty/Compiles');
    }

    public static function getInstance() : self {
      if(!isset(self::$instance))
        self::$instance = new SmartyEngine();

      return self::$instance;
    }

    public function setTemplateDir(string $dir) {
      $this->smarty->template_dir           = $dir;
    }

    public function setCacheDir(string $dir) {
      $this->smarty->cache_dir              = $dir;
    }

    public function setCompileDir(string $dir) {
      $this->smarty->compile_dir            = $dir;
    }

    public function getSmarty() : Smarty {
      return $this->smarty;
    }

    public function generateContent(string $id, string $smarty_temp, array $data = []) : self {

      JsonGenerator::getInstance()->addData($id,ViewGenerator::generate(new SmartyMethod(),[
        'file' => $smarty_temp,
        'data' => $data
      ]));
      
      return $this;
    }

    public function displayContent() {
      $this->smarty->assign('json',JsonGenerator::getInstance()->makeJson());
      $this->smarty->display('Core/json.tpl');
    }

  }

?>
