<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //Variáveis de cadastro no sistema
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $funcao = $_POST['funcao'];
//Configuração do Banco de Dados
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "psico";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql1 = "INSERT INTO login (email, senha, funcao) VALUES ('$email', '$senha', '$funcao')";
   
    if ($conn->query($sql1) === TRUE ) {
        switch ($funcao) {
            case 'gestor':
            case 'psicologo':
                header("Location: painel.html");
                break;
            case 'professor':
                header("Location: cad_aluno.html");
                break;
            default:
                header("Location: cad_aluno.html");
                break;
        }
        exit();
    } else {
        echo "Erro ao cadastrar aluno: " . $conn->error;
    }

    $conn->close();
}
?>
