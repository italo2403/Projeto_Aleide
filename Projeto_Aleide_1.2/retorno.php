<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Alunos - Retorno do Banco de Dados</title>
    <style>
        body {
            font-family: cursive;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .aluno {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .aluno img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .aluno h2 {
            margin-top: 0;
        }

        .aluno p {
            margin-bottom: 10px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Retorno dos Alunos</h1>
        <div class="alunos-container">
            <?php
            // Conexão com o banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "123456";
            $dbname = "psico";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }

            // Consulta SQL para obter os dados dos alunos
            $sql = "SELECT * FROM aluno";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Exibir dados de cada aluno
                while($row = $result->fetch_assoc()) {
                    echo "<div class='aluno'>";
                    // Aqui você pode adicionar a lógica para exibir a foto do aluno se tiver
                    echo "<h2>Professor</h2>";
                    echo "<p>" . $row['nome_prof'] . "</p>";
                    echo "<h2>Nome do Aluno</h2>";
                    echo "<p>" . $row['nome_aluno'] . "</p>";
                    echo "<h2>Turma do Aluno</h2>";
                    echo "<p>" . $row['turma'] . "</p>";
                    echo "<h2>Características Comportamentais</h2>";
                    echo "<p>" . $row['cara'] . "</p>";
                    echo "<h2>Dificuldade de Aprendizagem</h2>";
                    echo "<p>" . $row['pro'] . "</p>";
                    
                    echo "</div>";
                }
            } else {
                echo "Nenhum aluno encontrado.";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
