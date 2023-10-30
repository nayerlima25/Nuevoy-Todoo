<?php
$num=0;
if (isset($_POST['btnProceso'])) {
    $num = $_POST['txtNumero'];
   for($k=1;$k<=10;$k++){
    $result = $num * $k;
    echo $num . "*" . $k . "=" . $result . "<br>";
   } 
   ///aqui while
   $k = 0;
   while ($k <= 10) {
    $k++;
    $result = $num * $k;
    echo $num . "*" . $k . "=" . $result . "<br>";
 }

}

  


?>


<h1>EJERCICIOS TABLA DE MULTIPLICAR </h1>
<hr>
<div>

    <form method="post">
        <label>Ingrese numero: </label>
        <input type="text" name="txtNumero"
        placeholder="un valor entero"
        value="<?php if(isset($num))echo $num; ?>"
        >
        <button type="submit" name="btnProceso">Proceso </button>
    </form>

</div>