<?php
namespace Services;
use Repositories\ClientesRepository;

class ClientesService {

    private ClientesRepository $repository;

    function __construct(){
        $this->repository = new ClientesRepository();
    }

    public function findAll(): ?array {
        return $this->repository->findAll();
    }

    public function save(array $cliente): void {
        $this->repository->save($cliente);
    }

    public function read(int $id){
        return $this->repository->read($id);
    }

    public function delete(int $id){
        return $this->repository->delete($id);
    }

    public function filasAfectadas(): int{
        return $this->repository->filasAfectadas();
    }

}