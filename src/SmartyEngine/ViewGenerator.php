<?php
  namespace Massfice\SmartyEngine;

  use Massfice\SelectingViewResolver\Generator\GeneratorMethod;

  class ViewGenerator {

    public static function generate(GeneratorMethod $method, array $array) : string {
      return $method->generateView($array);
    }

  }
?>
