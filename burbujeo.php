<?
include('includes/header.php');

include_once('includes/conexion.php');


$sql="SELECT empresa,monto FROM montos order by montos";
$rs=mysql_query($sql,$conexion);
if(mysql_error())
{
 echo "ERROR".":".mysql_errno()."-".mysql_error()."</br>";
}
$nombre='';
$subt=0;
while($myrow=mysql_fetch_array($rs)){
	
	echo $myrow[empresa]." - ".$myrow[monto]."<br>";
	
	if($nombre == $myrow[empresa] ||  $nombre=='') $subt+=$myrow[monto];
	
	if($nombre != $myrow[empresa] ||  $nombre==''){
		if($nombre!='') echo "Subtotal ".$nombre.": ".$subt."<br>";
		if($nombre!='') $subt=0;
		$nombre=$myrow[empresa];
		
	}
	
}
include('includes/footer.php');
?>