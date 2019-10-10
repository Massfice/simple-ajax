<?php

  require_once __DIR__.'/vendor/autoload.php';

  use Massfice\SmartyEngine\SmartyEngine;

  SmartyEngine::getInstance()->getSmarty()->display('Core/index.tpl');

?>
