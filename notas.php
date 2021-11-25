<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" >
    </head>
    <body>
        <h1 class="text-center">NOTAS DEL ESTUDIANTE</h1>
            <div class="container">
                <form action="notas.php" method="POST">
                    <label class="form-label">Ingrese la primer nota</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="validationDefault03" name="nota_parcial1">
                    </div>
                    <div>
                    </br>
                    <labe>Ingrese la segunda nota</labe>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="validationDefault03" name="nota_parcial2">
                    </div>
                    </div>
                    </br>
                    <labe>Ingrese la tercer nota</labe>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="validationDefault03" name="nota_parcial3">
                    </br>
                    </div>
                    </br>
                    <label>Ingrese la nota del examen</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="validationDefault03" name="nota_examen">
                    </br>
                    </div>
                    <div>
                    </br>
                    <label>Ingrese la nota del trabajo final</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="validationDefault03" name="nota_trabajo_final">
                    </div>
                    <div  class="col-md-6" class="input-group mb-3">
                        <button class="btn btn-success">Enviar</button>
                        <?php
                            error_reporting(0);
                            require_once 'funciones/operaciones.php';
                            $nota_parcial1 = $_POST['nota_parcial1'];
                            $nota_parcial2 = $_POST['nota_parcial2'];
                            $nota_parcial3 = $_POST['nota_parcial3'];
                            $nota_examen = $_POST['nota_examen'];
                            $nota_trabajo_final = $_POST['nota_trabajo_final'];
                            notas_funciones\notas($nota_parcial1,$nota_parcial2,$nota_parcial3,$nota_examen,$nota_examen,$nota_trabajo_final)
                        ?>
                    </div>
                    </br>
                </form>
                    <div>
                        <form action="dashboard.php">
                            <input class="btn btn-danger" type="submit" value="Volver">
                        </form>
                    </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>

