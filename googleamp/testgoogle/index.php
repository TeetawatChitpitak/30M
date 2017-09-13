
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<title>Home</title>
</head>
<style type="text/css">
	html,body{
		height: 100%;
	}
	#head{
		width: 100%;
		background-color: #ffff99;
		position: absolute;
		text-align: center;
	}
	#leftpanel{
		float: left;
		height: 100%;
		width: 15%;
		padding-top: 5%;
		background-color: #ffff99;
		border: 1;
		line-height: 30px;
		font-family: 'Roboto','sans-serif';
		transition: width 3s;
	}
	button.btn{
		width: 70%;
		height: 30px;
		background-color: #363636;
		border: 0;
		border-spacing: 50px;
		border-radius: 8px;
		text-align: center;
		color: white;
		
	}
	#body{
		float: left;
		height: 100%;
		width: 85%;
		padding-top: 26px;
		padding-left: 1px;
		
	}

</style>
<body>
<div id="head">
<table align="center">
	<tr>
		<td>
			<strong>Form</strong>
		</td>
	</tr>
</table>
</div>
<div id="leftpanel">
<strong> Selectform </strong>
	<a href="index.php?page=addlandmarkform"><button class="btn" id="addlandmarkform"><strong><i>Add location form</i></strong></button></a>
	<a href="index.php?page=dootook"><button class="btn" id="addlandmarkform"><strong><i>Outgoing Form</i></strong></button></a>
	
	
</div>
<div id="body" >
<?php 

if (isset($_GET['page'])) {	
include($_GET['page'].".php");
}
else{
	include("addlandmarkform.php");
}
?>
</div>
</body>
</html>