<div>
    <div style="text-align: center; margin: 20px 0;margin-top: 100px;">
        <h2>DATOS DE USUARIO</h2>
    </div>
    <div style="text-align: right; margin: 30px 400px;margin-top: 30px;">
        <a class="botonNuevo" href="clientes/cliente">Nuevo Cliente</a>
    </div>
</div>
<table>
    <thead>
        <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>NIF</th>
        <th>Dirección</th>
        <th>Código Postal</th>
        <th>Fecha de alta</th>
        <th><?=$filasAfectadas?> clientes</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clientes as $cliente):?>
        <tr>
            <th><?=$cliente->getId()?></th>
            <td><?=$cliente->getNombre()?></td>
            <td><?=$cliente->getNIF()?></td>
            <td><?=$cliente->getDireccion()?></td>
            <td><?=$cliente->getCP()?></td>
            <td><?=$cliente->getFechaAlta()?></td>
            <td>
                <div>
                    <a class="botonModicar" href="clientes/cliente/<?=$cliente->getId()?>">
                        Modificar
                    </a>
                    <button class="botonEliminar"
                        onclick = "fetch('clientes/cliente/<?=$cliente->getId()?>', {method: 'DELETE'})
                            .then(data => location.reload())">
                            Eliminar
                    </button>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


