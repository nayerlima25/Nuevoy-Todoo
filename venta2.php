<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  

</head>

<body>




    <div class="row" >

        <form method="post">
            <div>
                <label for="">Fecha Venta </label>
                <input type="date" name="txtFecha">
            </div>
            <br>
            <div>
                <label>Nombre Cliente :</label>
                <select name="cboCliente">
                    <option value="PEPITO">JOSE</option>
                    <option value="ANITA">ANITA PEREZ</option>
                    <option value="LUCHO">LUIS AGUIRRE</option>
                    <option value="NAYE">NAYERLI MARTINEZ </option>
                </select>
            </div>

            <br>



            <div>
                <label>Producto :</label>
                <select name="cboProducto">
                    <option value="TALLARIN">TALLARIN SUMESA </option>
                    <option value="ATUN">ATUN LOMITOS </option>
                    <option value="ARROZ">ARROZ FLOR</option>
                    <option value="GELATINA ">GELATINA ROYAL </option>
                    <option value="JABON">JABON LAVA TODO </option>
                </select>
            </div>
            <br>
            <div>
                <label>Cantidad :</label>
                <input type="number" name="txtCanti">
            </div>
            <br>
            <div>
                <label>Precio :</label>
                <input type="text" name="txtPrecio">
            </div>
            <button type="submit" name="btnCalcular">
                CALCULAR
            </button>

        </form>


    </div>



    <hr>
    <h1>RESULTADOS</h1>
    <?php
 if(isset($_POST['btnCalcular'])){
   $fecha=$_POST['txtFecha'];
   $cliente=$_POST['cboCliente'];
   $producto=$_POST['cboProducto'];
   $cantidad=$_POST['txtCanti'];
   $precio=$_POST['txtPrecio'];
   $subTot=$cantidad*$Precio;
   $desc=0;
   $iva=$subTot*0.12;
   if($subTot<50){
    $descuento=$subTot*0.05;
    $regalo="NO TIENE REGALO";

   }else{
    if($subTot<50&&$subTot<100){
        $descuento=$subTot*0.07;
        $regalo="PELOTA";
        
    }else{
        if($subTot<100&&$subTot<200){
            $descuento=$subTot*0.01;
            $regalo="LICUADORA";
            
        } else{
            $descuento=$subTot*0.15;
            $regalo="VIAJE A LA CASA";
        }

    }
   }
  //*** mostrar resultados */
 echo"Fecha   :" .$fecha.  "<br>";
 echo "cliente   : ".$cliente."  <br>";

 echo"Producto  : ".$producto."  <br> ";
 echo"susbTotal   : ".$subTot."  <br> ";
 echo"IVA12/  : ".$iva."  <br>";
 echo"Descuento   : ".$descuento."  <br>";
 echo"TotalPagar  : ".$totPagar."  <br>";
 echo"Regalo   : ".$regalo."  <br>";


 }



 ?>
 <script src="js/bootstrap.bundle.min.js" ></script>
</body>

</html>