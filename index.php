<!DOCTYPE html>
<html>
<head>
   <title>PRIMERA PAGINA</title>
</head>
<body> 
<FORM action= "index.php" method = "POST" > 
<table>
<tr> 
<td>INGRESE EL PRIMER NUNMERO</td> 
<td> <input type="text" name="txtNumero1"/> </td> 
</tr> 
<td>INGRESE EL SEGUNDO NUMERO </td> 
<td><input type="text" name="txtNumero2"/></td> 
<tr> 
<td colspan="2"> <input type="submit" name="btnCalcular" value= "CALCULAR"> </td> 
</tr> 
<tr></tr> 
</table> 
</FORM>  
</body>
</html>

<?php
if($_POST['enviar']){
    $vaNumero1 = $_POST['txtNumero1'];
    $vaNumero2 = $_POST['txtNumero2'];
    $Operador=$_POST["operador"]; 
}
if($Operador == '+'){
    $result=($vaNumero1)+($vaNumero2);
}
if($Operador == '-'){
    $result=($vaNumero1)+($vaNumero2);
}
if($Operador == '*'){
    $result=($vaNumero1)+($vaNumero2);
}
if($Operador == '/'){
    $result=($vaNumero1)+($vaNumero2);
}

$vaNumero1 = $_POST['txtNumero1'];
$vaNumero2 = $_POST['txtNumero2'];
$vpSuma = $vaNumero1 + $vaNumero2;
$vpResta = $vaNumero1 - $vaNumero2;
$vpMultiplicar = $vaNumero1 * $vaNumero2;
$vpDividir= $vaNumero1 / $vaNumero2;

echo "el resultado  de la suma es :". $vpSuma;
echo "</br> el resultado  de la resta es :". $vpResta ;
echo "</br> resultado  de la Multipicacion es :". $vpMultiplicar;
echo "</br> resultado  de la Division es :". $vpDividir;


?>