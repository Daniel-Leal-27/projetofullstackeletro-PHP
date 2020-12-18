<html>
<head>
    <title>Connect</title>
</head>
<body>
    <h1>Lista de produtos registrados no banco de dados!</h1>
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

$sql = "select id, nome, descricao, preco, imagem from Produtos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<p>  ID: ".$row['id']." Nome do produto: ".$row['nome']." Descrição do produto: ".$row['descricao']." Preço do produto: R$".$row['preco']." Imagem do produto: ".$row['imagem'];
}
?>
<br><br>
<a href="Conect2.php">Faça seu pedido clicando aqui</a>
</body>
</html>