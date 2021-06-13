<?php

require_once("vendor/autoload.php");

use Slim\Slim;
use Hcode\Page;
use Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

// rota index padrão
$app->get('/', function() {

    $page = new Hcode\Page();

    $page->setTpl("index");

});
// rota index padrão


// rota index admin
$app->get('/admin', function() {

    $page = new PageAdmin();

    $page->setTpl("index");

});
// rota index admin


$app->run();

?>
