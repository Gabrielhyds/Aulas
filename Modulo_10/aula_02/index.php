<?php


//$json = '{"a":"gabriel","b":{"0":"felipe","1":"joao"},"c":3,"d":4,"e":5}';

//var_dump(json_decode($json));

/*
//Decodificamos o json
$obj = json_decode($json);
$arr = json_decode($json,true);
*/

/*
$arr = ['nome'=>'gabriel','cidade'=>'hortocity'];

$json = json_encode($arr);
echo $json;
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(function(){
		$.ajax({
			url:'request.php',
			dataType:'json'
		}).done(function(data){
			console.log(data.nome);
		})
	})
</script>
</body>
</html>