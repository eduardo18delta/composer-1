<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerador de Qr Code</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">

<div class="jumbotron">
  <h2>Gerador de Qrcode</h2>
</div>

<form action="qrcode.php" method="GET">

<div class="form-group">	
<label>Insira um texto:</label>
<input class="form-control" type="text" name="qrcode" required>
</div>
<button class="btn btn-success" type="submit">Enviar</button>

</form>

</div>

</body>
</html>