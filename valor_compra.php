<h2>INGRESE EL VALOR DE LA COMPRA </h2>
                <form action="valor_compra.php" method="POST" id="formulario">
                    <div>
                        <label>Ingrese el valor de la compra</label>
                    </br>
                        <input type="number"  name="valor"  />
                    </div>
                    <div>
                    </br>
                        <label>Ingrese el descuento</label>
                    </br>
                        <input name="descuento" type="number"  />
                    </div>
                    </br>
                    <div>
                        <label>Ingrese el iva</label>
                    </br>
                        <input name="iva" type="number" />
                    </div>
                    </br>
                    <button>Enviar</button>
                </form>
                <?php
                    error_reporting(0);
                    require_once 'funciones/operaciones.php';
                    $valor = $_POST['valor'];
                    $iva =  $_POST['iva'];
                    $descuento =  $_POST['descuento'];
                    compra_funciones\compras($valor, $iva, $descuento)

                ?> 
            </div>
        </form>