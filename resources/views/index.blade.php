<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style_index.css" >
       
        <title>Driveboot</title>

       
      
    </head>
    <body>
        <div class="contenedor_principal">
            <div class="contenedor_navbar">
                <div class="logo">
                    <img src="img/nube.png">
                </div>

                <nav class="navbar">
                    <ul>
                        <li>Tarifas</li>
                        <li>Movilidades</li>
                        <li>Estadisticas</li>
                        <li>Choferes</li>
                        <li>Salir</li>
                    </ul>
                </nav>
            </div>
        <div class="contenido">
            <h1>Tarifas</h1>
            <div class="contenido_principal">
                <div class="contenedor_tarifas">
                    Tarifa principal: $ {{$tarifa_principal}}
                </div>
                <div class="contenedor_tarifas">
                   Tarifa secundaria: $ {{$tarifa_secundaria}} 
                </div>
                <div class="contenedor_boton_tarifas">
                    <a class="btn btn-modificar" href="/modificarTarifas">Modificar</a>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
