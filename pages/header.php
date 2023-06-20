<!DOCTYPE html>
<html>
  <head>
    <title>Conexión con MySQL</title>
    <meta charset="utf-8">
    <style>
      table {
        margin: 0 auto; /* centra la tabla en la página */
        border-collapse: collapse; /* elimina los bordes dobles */
        width: 50%; /* define el ancho de la tabla */
      }
      th, td {
        border: 1px solid #ddd; /* agrega un borde a las celdas */
        padding: 8px; /* agrega espacio al interior de las celdas */
      }
      th {
        background-color: #ddd; /* agrega un color de fondo a las cabeceras de la tabla */
      }
      
      .botonModicar {
      background-color: blue;
      color: white;
      padding: 8px 8px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 0px 0px;
      cursor: pointer;
      border: 2px solid black;
    }

    .botonEliminar{
      background-color: red;
      padding: 8px 8px;
      font-size: 14px;
      margin: 0px 0px;
      cursor: pointer;
      display: inline-block;
      text-decoration: none;
      text-align: center;
      color: white;
    }
    .botonNuevo{
      background-color: green;
      color: white;
      padding: 8px 8px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 1px 1px;
      cursor: pointer;
      border: black;
      border: 2px solid black;
    }

    .marcoPrincipal{
      width: 30%;
      margin: 0 auto;
      padding: 100px 100px;
    }
    .botonModicarCrear{
      background-color: green;
      color: white;
      padding: 5px 5px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      cursor: pointer;
    }
    .botonCancelar{
      background-color: red;
      color: white;
      padding: 5px 5px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border: 2px solid black;
    }

    </style>
  </head>
  <body>