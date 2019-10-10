<?php

  require_once __DIR__.'/vendor/autoload.php';

  use Massfice\SmartyEngine\SmartyEngine;
  use Massfice\Proccess\Proccess;

  $csv_dir = __DIR__.'/csv/names.csv';

  $proccess = new Proccess($csv_dir);
  $proccess->make();

  SmartyEngine::getInstance()->displayContent();

?>
