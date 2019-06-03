<?php
	header('Content-Type:application/json');
	$baglanti=mysqli_connect("localhost","root","","klimaci");
	$sorgu=mysqli_query($baglanti,"SELECT mark_adi,sat_adet FROM yeni_yil");
	$data=array();
	foreach($sorgu as $row){
	$data[]=$row;
	}
	mysqli_close($baglanti);
echo json_encode($data);
?>