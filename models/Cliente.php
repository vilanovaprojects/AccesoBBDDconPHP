<?php
namespace Models;

class Cliente {

    function __construct( 
        private string $id,
        private string $nombre,
        private string $nif,
        private string $direccion,
        private string $cp,
        private ?string $fecha_alta, 
    ){}

    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id){ 
        $this->id = $id;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function getNIF(): string{
        return $this->nif;
    }

    public function setNIF(string $nif){
        $this->nif = $nif;
    }

    public function getDireccion(): string{
        return $this->direccion;
    }

    public function setDireccion(string $direccion){
        $this->direccion = $direccion;
    }

    public function getCP(): string{
        return $this->cp;
    }

    public function setCP(string $cp){
        $this->cp = $cp;
    }
    
    public function getFechaAlta(): ?string{
        return $this->fecha_alta;
    }

    public function setFechaAlta(?string $fecha_alta){
        $this->fecha_alta = $fecha_alta;
    }
    

    public static function fromArray(array $data): Cliente {
        return new Cliente(  
            $data['id'],
            $data['NOMBRE'],
            $data['NIF'],
            $data['DIRECCION'],
            $data['CP'],
            $data['FECHA_ALTA'],
        );
    }
}