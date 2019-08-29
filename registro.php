<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk-to-fit=no">
     <!-- Bootstrap CSS -->

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    </head>
        <body background="2.jpg">
            <h1 style="text-align: center; margin : 40px 0 0 0; color: white">Datos Personales</h1>
                <form action="http://localhost/programacion1/login.php" method="post">
                    <div>
                        <label for="name">Nombre</label>
                        <input type="text" id="name" />
                    </div>
                    <div>
                        <label for="surname">Apellido</label>
                        <input type="text" id="surname" />
                    </div>
                    <div>
                        <label for="mail">Correo Electronico</label>
                        <input type="email" id="mail" />
                    </div>
                    <div>
                        <label for="text">Contraseña</label>
                        <input type="password" id="text" />
                    </div>
                    <div>
                        <label for="text">Repita Contraseña</label>
                        <input type="password" id="text" />
                    </div>
                    <div class="button">
                        <button type="submit">Guardar</button>
                    </div>
                </form>
        <style type="text/css">
            form 
            {
             /* Sólo para centrar el formulario a la página */
                margin: 0 auto;
                width: 500px;
                /* Para ver el borde del formulario */
                padding: 1em;
                border: 1px solid #CCC;
                border-radius: 1em;
            }   
            form div + div 
            {
                margin-top: 1em;
            }
            label 
            {
                /* Para asegurarse que todos los labels tienen el mismo tamaño y están alineados correctamente */
                display: inline-block;
                width: 90px;
                text-align: right;
            }
            input, textarea
            {
                /* Para asegurarse de que todos los campos de texto tienen las mismas propiedades de fuente
                Por defecto, las areas de texto tienen una fuente con monospace */
                font: 1em sans-serif;

                /* Para darle el mismo tamaño a todos los campos de texto */
                width: 300px;
                -moz-box-sizing: border-box;
                box-sizing: border-box;

                /* Para armonizar el look&feel del borde en los campos de texto */
                border: 2px solid #999;
            }
            input:focus, textarea:focus 
            {
                /* Para dar un pequeño destaque en elementos activos*/
                border-color: #000;
            }
            textarea 
            {
                /* Para alinear campos de texto multilínea con sus labels */
                vertical-align: top;

                /* Para dar suficiente espacio para escribir texto */
                height: 5em;

                /* Para permitir a los usuarios cambiar el tamaño de cualquier textarea verticalmente
                    No funciona en todos los navegadores */
                resize: vertical;
            }
            button 
            {
                /* Para posicionar los botones a la misma posición que los campos de texto */
                padding-left: 15px; /* mismo tamaño a todos los elementos label */
            }
            button 
            {
                /* Este margen extra representa aproximadamente el mismo espacio que el espacio
                entre los labels y sus campos de texto */
                margin-left: 13em;
            }
        </style>
 
        </body>
    </html>