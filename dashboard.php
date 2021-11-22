<h1>DASHBOARD</h1>
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
        <div>
        
            <br>
            <br>
            <div>
            <form method="POST"  action="suma.php">
                <input name="boton_suma" type="submit" value="Suma" />
            </form>
            </div>
            <div>
                <form action="valor_compra.php" method="POST">
                    <input type="submit" value="valor compra"/>
                
                </form>
            <div>
            <div>
                <form action="notas.php" method="POST">
                    <input type="submit" value="Notas" />
                </form>
            </div>
                
       
    </div>
</div>