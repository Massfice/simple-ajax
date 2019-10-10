<?php

  require_once __DIR__.'/vendor/autoload.php';

  use Massfice\SmartyEngine\SmartyEngine;

  SmartyEngine::getInstance()
    ->generateContent('form_div','form.tpl')
    ->displayContent();

?>
