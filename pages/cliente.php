<form action="/AccesoBBDD/clientes/cliente" method="post">
  <?php if(isset($cliente)):?>
  <input type="hidden" name="data[Cliente][id]" value="<?=$cliente->getId()?>">
  <?php endif;?>
  <div class="marcoPrincipal">
    <div>
      <div>
        <h2><?=(isset($cliente))?'Modificar':'Nuevo'?> Cliente</h2>
      </div>
      <div>
        <a class="botonCancelar" href="/AccesoBBDD/clientes" >Cancelar</a>
        <button class="botonModicarCrear" type="submit"><?=(isset($cliente))?'Modificar':'Crear'?></button>
      </div>
    </div>
    <div>
      <input type="text" placeholder="Nombre"
             name="data[Cliente][nombre]" value="<?=(isset($cliente))?$cliente->getNombre():''?>">
      <label for="floatingInput">Nombre</label>
    </div>
    <div>
      <input type="text" placeholder="NIF"
             name="data[Cliente][NIF]" value="<?=(isset($cliente))?$cliente->getNIF():''?>">
      <label for="floatingInput">NIF</label>
    </div>
    <div>
      <input type="text" placeholder="Dirección"
             name="data[Cliente][direccion]" value="<?=(isset($cliente))?$cliente->getDireccion():''?>">
      <label for="floatingInput">Dirección</label>
    </div>
    <div>
      <input type="text" placeholder="CP"
             name="data[Cliente][CP]" value="<?=(isset($cliente))?$cliente->getCP():''?>">
      <label for="floatingInput">Código Postal</label>
    </div>
    <div>
      <input type="text" placeholder="Fecha Alta"
             name="data[Cliente][fecha_alta]" value="<?=(isset($cliente))?$cliente->getFechaAlta():''?>"
             aria-describedby="fechaAltaHelpBlock">
      <label for="floatingInput">Fecha Alta</label>
      <div>
        Fecha con formato año-mes-dia YYYY-MM-DD
      </div>
    </div>
  </div>
</form>