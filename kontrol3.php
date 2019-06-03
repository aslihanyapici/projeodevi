<?php
	header('Content-Type:application/json');
	$baglanti=mysqli_connect("localhost","root","","denemea");
	$sorgu=mysqli_query($baglanti,"SELECT mark_ad,garanti_suresi FROM ozellik");
	$data=array();
	foreach($sorgu as $row){
	$data[]=$row;
	}
	mysqli_close($baglanti);
echo json_encode($data);
?>