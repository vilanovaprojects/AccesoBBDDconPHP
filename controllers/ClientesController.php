<?php
namespace Controllers;
use Services\ClientesService;
use Lib\Pages;

class ClientesController {

    private ClientesService $service;
    private Pages $pages;

    function __construct(){
        $this->service = new ClientesService();
        $this->pages = new Pages($this);
    }

    public function list(): void {
        $clientes =  $this->service->findAll();
        $filasAfectadas = $this->service->filasAfectadas();
        $this->pages->render('clientes', [
            'clientes' => $clientes,
            'filasAfectadas' => $filasAfectadas
        ]);
    }

    public function add(): void {
        $this->pages->render('cliente');
    }

    public function save(): void {
        $cliente = $_POST['data'];
        $this->service->save($cliente);
        header('Location: /AccesoBBDD/clientes');
    }

    public function edit(int $id): void {
        $cliente = $this->service->read($id);
        $this->pages->render('cliente', ['cliente' => $cliente]);
    }

    public function delete(int $id): void {
        $this->service->delete($id);
    }

}