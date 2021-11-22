<?php 
    session_start();
    $_SESSION['session_start'] = true;
    $_SESSION['nombre'];
    $_SESSION['apellido']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <div class="container">
        <h1>Fomulario de ingreso</h1>
        <form id="formulario" method="POST" action="dashboard.php">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" />
                <span data-key="nombre" class="badge bg-danger" ></span>
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control" />
                <span data-key="apellido" class="badge bg-danger"></span>
            </div>
            <div class="form-group">
                <label>Correo electrónico</label>
                <input type="text" name="Correo" id="Correo" class="form-control" />
                <span data-key="Correo" class="badge bg-danger" ></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="session_start">Enviar</button>
            </div>
        </form>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function(){

            let formulario = $("#formulario");
            formulario.submit(function(){
                formulario.find('.bg-danger').text('');  
                $.ajax({
                    url:"validaciones.php",
                    method: "POST",
                    data: formulario.serialize(),
                    success:function(resp){
                        if(!resp.respuesta){
                            for(let k in resp.errores){
                                $("span[data-key='"+k+"']").text(resp.errores[k]);
                            }
                        }
                    },
                    dataType: "json"

                });
                return true;          

                

            });
           

            
            
        });
    </script>
</body>
</html>