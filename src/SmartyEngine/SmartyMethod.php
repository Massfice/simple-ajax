<?php

  namespace Massfice\SmartyEngine;

  use Massfice\SelectingViewResolver\Generator\GeneratorMethod;

  class SmartyMethod implements GeneratorMethod {

    public function generateView(array $array) : string {

      $smarty = SmartyEngine::getInstance()->getSmarty();

      foreach($array['data'] as $k => $d) {
        $smarty->assign($k,$d);
      }

      $view = $smarty->fetch($array['file']);

      foreach($array['data'] as $k => $d) {
        $smarty->clearAssign($k);
      }

      return $view;
    }

  }

?>
