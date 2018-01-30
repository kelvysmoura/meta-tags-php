<?php

include 'autoload.php';

use Core\Mtp;
$mtp = new Mtp();

# Gerando tags html
$mtp->OpenGraph([
  "title" => "Meu Site"
]);

$mtp->MetaName([
  "author" => "Kelvys Moura"
]);

$mtp->ShowTags();