<h1>NOTAS DEL ESTUDIANTE</h1>
<form action="" method="POST">
    <div>
        <label>Ingrese la primer nota</label>
        <input type ="number" name="nota_parcial1" />
    </br>
    </div>
    <div>
    </br>
        <labe>Ingrese la segunda nota</labe>
        <input type="number" name="nota_parcial2"/>
    </br>
    </div>
    <div>
    </br>
        <labe>Ingrese la tercer nota</labe>
        <input type ="number" name="nota_parcial3"/>
    </br>
    </div>
    <div>
    </br>
        <label>Ingrese la nota del examen</label>
        <input type ="number" name="nota_examen" />
    </br>
    </div>
    <div>
    </br>
        <label>Ingrese la nota del trabajo final</label>
        <input type ="number" name="nota_trabajo_final" />
    </div>
    <div>
        <input type ="submit" />
    </div>
    <?php
        error_reporting(0);
        require_once 'funciones/operaciones.php';
        $nota_parcial1 = $_POST['nota_parcial1'];
        $nota_parcial2 = $_POST['nota_parcial2'];
        $nota_parcial3 = $_POST['nota_parcial3'];
        $nota_examen = $_POST['nota_examen'];
        $nota_trabajo_final = $_POST['nota_trabajo_final'];
        notas_funciones\notas($nota_parcial1,$nota_parcial2,$nota_parcial3,$nota_examen,$nota_examen,$nota_trabajo_final);


    
    ?>
</form>
