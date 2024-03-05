<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $turma = $_POST['turma'];
    $pro = $_POST['pro'];
    $cara = $_POST['cara'];
    $nome_prof = $_POST['nome_prof'];
    $nome_aluno = $_POST['nome_aluno'];

    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "psico";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql2 = "INSERT INTO aluno (turma, pro, cara, nome_prof, nome_aluno) VALUES ('$turma', '$pro', '$cara', '$nome_prof', '$nome_aluno')";

    if ($conn->query($sql2) === TRUE) {
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
