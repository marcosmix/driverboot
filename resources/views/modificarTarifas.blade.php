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
            
            <form action="{{route('tarifa.store')}}" method="POST">
               @csrf 
                <div class="contenedor_tarifas grupo_form_horizontal_enLinea">
                    
                    <label>Tarifa Diurna</label>

                    <input class="tamaño_em1" type="number" step="0.1" value="{{$tarifa_principal}}" name="tarifa_diurna">

                </div>    
                  <div class="contenedor_tarifas grupo_form_horizontal_enLinea">
                    
                    <label>Tarifa Nocturna</label>

                    <input class="tamaño_em1" type="number" step="0.1"  value="{{$tarifa_secundaria}}" name="tarifa_nocturna">

                </div> 

                <div class="contenedor_tarifas grupo_form_horizontal_enLinea">
                    
                    <input class="btn btn-modificar  tamaño_em1" type="submit" value="Guardar" > <a href="/" class="btn btn-modificar tamaño_em1">Volver</a>

                </div>  


            </form>

           
        </div>
        </div>
    </body>
</html>
