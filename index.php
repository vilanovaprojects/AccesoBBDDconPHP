<?php
require_once "config.php";
require_once "autoloader.php";

use Lib\Router;
use Controllers\ClientesController;

Router::add('GET','/clientes', function (){
    return (new ClientesController())->list(); 
});

Router::add('GET','/clientes/cliente', function (){
    return (new ClientesController())->add();
});

Router::add('POST','/clientes/cliente', function (){
    return (new ClientesController())->save();
});

Router::add('GET', '/clientes/cliente/:id', function (int $clienteId){
    return (new ClientesController())->edit($clienteId);
});

Router::add('DELETE', '/clientes/cliente/:id', function (int $clienteId){
    return (new ClientesController())->delete($clienteId);
});

Router::dispatch();


