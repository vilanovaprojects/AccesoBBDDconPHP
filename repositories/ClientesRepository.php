<?php
namespace Repositories;
use Lib\PDOMysql;
use Models\Cliente;

class ClientesRepository {


    private PDOMysql $conexion;

    function __construct(){
        $this->conexion = new PDOMysql();
    }

    public function findAll(): ?array{
        $this->conexion->consulta("SELECT * FROM Datos_Cliente"); 
        return $this->extraer_todos();
    }

    private function extraer_registro(): ?Cliente { 
        return ($cliente = $this->conexion->extraer_registro())?Cliente::fromArray($cliente):null;
    }

    private function extraer_todos(): ?array {
        $clientes = [];
        $clientesData = $this->conexion->extraer_todos();
        foreach($clientesData as $clienteData){
            $clientes[] = Cliente::fromArray($clienteData);
        }
        return $clientes;
    }

    public function save(array $cliente): void { 
        if( isset($cliente['Cliente']['id']) ){
            $this->update($cliente);
        } else { 
            $this->create($cliente);
        }
    }
    
    private function create(array $cliente): void {
        $fields = implode(',',array_keys($cliente['Cliente']));
        $values = implode("', '",$cliente['Cliente']);
        $this->conexion->consulta("INSERT INTO Datos_Cliente ($fields) VALUES ('$values')"); 
    }
    
    private function update(array $cliente): void { 
        $updates = [];
        foreach($cliente['Cliente'] as $field=>$value){
            $updates[] = "$field='{$value}'";
        }
        $changes = implode(', ', $updates);  
        $this->conexion->consulta("UPDATE Datos_Cliente SET $changes WHERE id = ".$cliente['Cliente']['id']);
    } 

    public function read(int $id): ?Cliente{
        $this->conexion->consulta("SELECT * FROM Datos_Cliente WHERE id=$id");
        return $this->extraer_registro(); 
    }

    public function delete(int $id): void{
        $this->conexion->consulta("DELETE FROM Datos_Cliente WHERE id=$id");
    }

    public function filasAfectadas(): int{
        return $this->conexion->filasAfectadas();
    }

}