<?php//Aqui vai acontecer á inserição de dados no banco de dados
if(isset($_POST['submit'])){
    //print_r('Seu nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Sua senha: ' . $_POST['senha']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $result = mysqli_query($con, "INSERT INTO usuario(nome,senha)
    VALUES ('$nome','$senha')");
}
?>
<html>
    <head>
        <title>Inserir dados</title>
    </head>
    <body>
    <form action="index.php" method="POST">
        <label>
            Nome:
            <input type="text" name="nome"required ></br>
        </label>
        <label>
            Senha:
            <input type="password" name="senha" required ></br>
        </label>
        <button name="submit" >Cadastrar</button>
</br>
    </form>
    </body>
</html>
