<h1>SUMA DE TRES NUMEROS</h1>
<h2>INGRESE LOS NUMERO PARA SUMARLOS</h2>
        <form method="POST" action="suma.php" id="form">
            <div> 
                <label>Ingrese un numero</label>
                <br>
                <input name="numero1" type="number"/>
            </div>
            <br>
            <div>
                <label>Ingrese un segundo numero</label>
                <br>
                <input name="numero2" type="number" />
            </div>
            <br>
            <div>
                <label>Ingrese un tercer numero</label>
                <br>
                <input name="numero3" type="number" /> 
            </div>
            </br>
            <div>
                <button type="submit" name="enviado">Consultar</button>
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
            <div>
                </br>
                <form action="dashboard.php" method="POST">
                    <button>Volver</button>
                    
                </form>
            </div>