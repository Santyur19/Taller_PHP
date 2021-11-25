
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" >
    </head>
    <h1 class="text-center">SUMA DE TRES NUMEROS</h1>
    <h2 class="text-center">INGRESE LOS NUMERO PARA SUMARLOS</h2>
            <div class="container">
                <form method="POST" action="suma.php" id="form">
                    <div> 
                    <label>Ingrese un numero</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="validationDefault03" name="numero1">
                    </div>
                    <br>
                    <label>Ingrese un segundo numero</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="validationDefault03" name="numero2">    
                    </div>
                    <br>
                    <div>
                    <label>Ingrese un tercer numero</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="validationDefault03" name="numero3">    
                    </div>
                    </div>
                    </br>
                    <div>
                        <button type="submit" class="btn btn-success">Consultar</button>
                        <?php
                            error_reporting(0);                         
                            $numero1 =  $_POST['numero1'];
                            $numero2 =  $_POST['numero2'];
                            $numero3 =  $_POST['numero3'];
                            $result =0;
                            $result = $numero1+$numero2+$numero3;
                            echo "La suma de los tres numero es :  ".$result;
                        ?>
                    </div>
                </form>
                </div>
                    <form action="dashboard.php">
                        <input class="btn btn-danger" type="submit" value="volver" />                            
                    </form>
                </div>         
            </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>           
</html>