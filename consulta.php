<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Ticket Fornecedor</title>
	<link href="css/font.css" rel="stylesheet">
	<link href="css/stylee.css" rel="stylesheet" charset="utf-8" type="text/css"/>
	<link rel="shortcut icon" href="img/">
</head>
<body class="todoFundo">
	<div class="container">
		<div class="logo"><img src="img/"></div>
		<table class="tableConsulta">
<?php
$connection = new mysqli("localhost", "root", "", "fornecedor");
$sql = $connection->query('SELECT * FROM fornecedor');
if($sql){
	if($sql){	
	echo '<tr><td><b>Ticket</b></td><td><b>Fornecedor</b></td><td><b>Descirção</b></td><td><b>Data de Abertura</b></td></tr>';
	while($line = $sql->fetch_assoc()){        
		echo '<tr><td>' . $line['TICKET'] . '</td><td>' . $line['FORNECEDOR'] . '</td><td>' . $line['DESCRICAO'] . '</td><td>' . $line['DATA_ABERTURA'] . '</td></tr>';      
    }	
	}
}?>
</tbody>
</table>
</div>
</body>
</html>
<?php exit;?>