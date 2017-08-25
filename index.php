<?php

require 'vendor/autoload.php';

$m = new Mustache_Engine([
     'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/template', [
         'extension' => '.html'])
]);

// render c'est pour afficher le contenu de html
echo $m->render('index', [
'name' => 'World'
]);