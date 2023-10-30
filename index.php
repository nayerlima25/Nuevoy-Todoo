<h3>EJERCICIO VENTA</h3>
<?php
 $cliente="Nayerli Martinez ";
 $producto="Mantequilla ";
 $cantidad=500;
 $precio=100;
 $subTotal=$cantidad*$precio;
 $iva=$subTotal*0.12;
 $desc=0;
 $regalo="";

 if($subTotal<=50){
    $desc=$subTotal*0.05;
    $regalo="PELOTA";

 }else{
   if($subTotal>51-100){
      $desc=$subTotal*0.07;
      $regalo="GAFAS DE SOL ";
   }else{
      if($subTotal>101-200){
         $desc=$subTotal*0.10;
         $regalo="MEDIAS TEMATICA BOB ESPONJA ";
      }else{
         if($subTotal>200){
            $desc=$subTotal*0.15;
            $regalo="MEDIAS NAILON ";
         }
      }
   }

      
 }
 $totPagar=$subTotal+$iva-$desc;

 


?>
<label>RESULTADOS</label> <br>
<label>cliente : </label> <?php echo $cliente;?><br>
<label>Producto: </label> <?php echo $producto;?><br>
<label>cantidad: </label> <?php echo number_format ( $cantidad,2 );?><br>
<label>precio: </label> <?php echo number_format ( $precio,2);?><br>
<label>subTotal: </label> <?php echo number_format ($subTotal,2);?><br>
<label>iva: </label> <?php echo( $iva);?><br>
<label>descuento : </label> <?php echo number_format($desc,2);?><br>
<label>regalo:   </label> <?php echo $regalo;?><br>
<label>TOTAL A PAGAR :   </label> <?php echo number_format($totPagar,2) ;?><br>
