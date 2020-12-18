<html>
    <head>
        <title> Conect2 </title>
    </head>
    <body>
        <center><h2> Formulário para envio do pedido </h2>
        <form method='post' name='pedidos_cliente' action="">
            Cliente: <br>
            <input type="text" name="cliente"><br>
            Endereço: <br>
            <input type="text" name="endereco"><br>
            telefone: <br>
            <input type="number" name="telefone"><br>
            Produto: <br>
            <input type="text" name="produto"><br>
            Valor: <br>
            <input type="number" name="valor"><br>
            Quantidade: <br>
            <input type="number" name="quantidade"><br>
            Total: <br>
            <input type="number" name="total"><br>
            <br>
            <hr>
                <input type="submit" name="submit" value="Finalize seu pedido">
            </center>
        </form>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "Allbikes";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if(isset($_POST['cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['produto']) && isset($_POST['valor']) && isset($_POST['quantidade']) && isset($_POST['total'])){
            
            echo "Dados Recebidos!<br>";

            $cliente = $_POST['cliente'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $produto = $_POST['produto'];
            $valor = $_POST['valor'];
            $quantidade = $_POST['quantidade'];
            $total = $_POST['total'];

            $sql = "insert into Pedidos (cliente, endereco, telefone, produto, valor, quantidade, total) values ('$cliente', '$endereco', '$telefone', '$produto', '$valor', '$quantidade', '$total')";

            $result = $conn->query($sql);

            if($result){
                echo "Dados inseridos com sucesso!";
                header("Refresh:5;Conect4.php");
            } else{
                echo "Dados não inseridos!";
            }
         
        }
        ?>
<a href="Index.php">Consulte nossa lista de produtos</a>
    </body>
</html>