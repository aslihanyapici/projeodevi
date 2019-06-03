 <!DOCTYPE html>
<head>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
	<link rel="stylesheet" type="text/css" href="a.css" />
<script>
		$(document).ready(function(){
		showGraph();
		});
		function showGraph(){
		$.post("kontrol.php",
		function(data){
		console.log(data);
		var markalar=[];
		var satislar=[];
		for (var i in data){
		markalar.push(data[i].marka_ad);
		satislar.push(data[i].satis_adet);
		};
		var chartdata={
		labels:markalar,
		datasets:[
		{
		label:'GRAFİK',
		data:satislar,
		backgroundColor:["#008B8B","#48D1CC","#B0E0E6","#5F9EA0"]
		}]
		};

		var cnv=$("#myChart");
		var barGraph=new Chart(cnv,{
		type:'pie',
		data:chartdata,
		});
		});
		Chart.scaleService.updateScaleDefaults('linear', {
		    ticks: {
		        min: 0
		    }
		});
		};
</script>
<script>
		$(document).ready(function(){
		showGraph2();
		});
		function showGraph2(){
		$.post("kontrol2.php",
		function(data){
		console.log(data);
		var marka=[];
		var satis=[];
		for (var i in data){
		marka.push(data[i].mark_adi);
		satis.push(data[i].sat_adet);
		};
		var chartdata={
		labels:marka,
		datasets:[
		{
		label:'GRAFİK2',
		data:satis,
		backgroundColor:["#008B8B","#48D1CC","#B0E0E6","#5F9EA0"]
		}]
		
		};

		var cnv=$("#myChart2");
		var barGraph=new Chart(cnv,{
		type:'pie',
		data:chartdata,
		});
		});
		Chart.scaleService.updateScaleDefaults('linear', {
		    ticks: {
		        min: 0
		    }
		});
		};
</script>
<script>
		$(document).ready(function(){
		showGraph3();
		});
		function showGraph3(){
		$.post("kontrol3.php",
		function(data){
		console.log(data);
		var markam=[];
		var garanti=[];
		for (var i in data){
		markam.push(data[i].mark_ad);
		garanti.push(data[i].garanti_suresi);
		};
		var chartdata={
		labels:markam,
		datasets:[
		{
		label:'GARANTİ_SURESİ',
		data:garanti,
		backgroundColor:["#008B8B","#48D1CC","#B0E0E6","#5F9EA0"]
		
		}]
		
		};

		var cnv=$("#myChart3");
		var barGraph=new Chart(cnv,{
		type:'bar',
		data:chartdata,
		});
		});
		Chart.scaleService.updateScaleDefaults('linear', {
		    ticks: {
		        min: 0
		    }
		});
		};
</script>
<style>
div{
width:500px;
height:500px;
}

</style>
</head>
<body>

	
		<div id="col1">
		<canvas id="myChart"></canvas>
		
		</div>
	
		<div id="col2">
		<canvas id="myChart2"></canvas>
		</div>
		
		<div id="col3">
		<canvas id="myChart3"></canvas>
		</div>
	

</body>
</html>