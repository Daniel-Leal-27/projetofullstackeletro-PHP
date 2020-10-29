<html>
<head>
    <title>Connect4</title>
</head>
<body>
    <h1>Lista de pedidos</h1>
</body>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Allbikes";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("A conexão falhou".mysqli_connect_error());

}

$sql = "select id, cliente, endereco, telefone, produto, valor, quantidade, total from Pedidos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<p>  ID: ".$row['id']." Nome do cliente: ".$row['cliente']." Endereço: ".$row['endereco']." Telefone: ".$row['telefone']." Produto: ".$row['produto']." Valor: ".$row['valor']." Quantidade: ".$row['quantidade']." Total: ".$row['total'];
}
?>
<br><br>
<a href="Conect2.php">Faça seu pedido clicando aqui</a>
</body>
</html>