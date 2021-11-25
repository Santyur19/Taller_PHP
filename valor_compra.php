<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" >
    </head>
    <body>
        <h2 class="text-center" >INGRESE EL VALOR DE LA COMPRA </h2>
        <div class="container"  id="div_1">
            <div class="container">
                <form action="valor_compra.php" method="POST" id="formulario">
                    </br>
                    <label>Ingrese el valor de la compra</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input name="valor" type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                    </br>
                    <label>Ingrese el descuento</label>
                    <div class="input-group mb-3">
                        
                        <span class="input-group-text">%</span>
                        <input name="descuento" type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                    </br>    
                    </br>
                    <label>Ingrese el iva</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">%</span>
                        <input name="iva" type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div class="input-group mb-3">
                        <button class="btn btn-success">Enviar</button>
                        <?php
                            error_reporting(0);
                            require_once 'funciones/operaciones.php';
                            $valor = $_POST['valor'];
                            $iva =  $_POST['iva'];
                            $descuento =  $_POST['descuento'];
                            compra_funciones\compras($valor, $iva, $descuento)

                        ?> 
                    </div>
                    </br>
                    
                </form>
                <div>
                    <form action="dashboard.php">
                    &nbsp;&nbsp;&nbsp;<input class="btn btn-danger" type="submit" value="volver" />
                    </form>
                </div>
            
            </div>
        </div> 
            </div>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>