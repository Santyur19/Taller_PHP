<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" >
    </head>
    <body>

        <h1 class="text-center">DASHBOARD</h1>
        <?php
            session_start();
            echo "Nombre: ";
            $_SESSION['nombre'] = isset($_POST['nombre']) ? print $_POST["nombre"]:"";
            echo "<br>";
            echo "Apellido: ";
            $_SESSION['apellido'] = isset($_POST['apellido']) ? print $_POST["apellido"]:"";
            
            
                                            
        ?>   
        <div>
            <div>
                <div class="container">
                
                    <br>
                    <br>
                    <div>
                    <form method="POST"  action="suma.php">
                        <input class="btn btn-primary btn-lg" name="boton_suma" type="submit" value="Suma" />
                    </form>
                    </div>
                    <div>
                        <form action="valor_compra.php" method="POST">
                            <input class="btn btn-primary btn-lg" type="submit" value="valor compra"/>
                        
                        </form>
                    <div>
                    <div>
                        <form action="notas.php" method="POST">
                            <input class="btn btn-primary btn-lg" type="submit" value="Notas" />
                        </form>
                    </div>
                        
            
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>