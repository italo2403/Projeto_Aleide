<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variáveis do formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Configuração do Banco de Dados
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "psico";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consulta SQL para verificar se o usuário e a senha correspondem
    $sql = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário autenticado com sucesso
        // Obter o registro do usuário
        $row = $result->fetch_assoc();
        $funcao = $row['funcao'];

        // Redirecionar com base na função do usuário
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
        exit(); // Encerrar o script após o redirecionamento
    } else {
        // Usuário não autenticado
        header("Location: falha.html");
    }

    $conn->close();
}
?>
