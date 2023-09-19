<?php include "conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- Bootstrap - CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Clientes</h1>
        <form action="actions/add.php" method="post">
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="campoNome" id="idNome" placeholder="Seu nome completo">
            </div>
            <div class="mb-3">
                <label for="idEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" name="campoEmail" id="idEmail" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="idCPF" class="form-label">CPF:</label>
                <input type="text" class="form-control" name="campoCpf" id="idCPF" placeholder="12345678909" minlength="11" maxlength="11">
            </div>
            <div class="mb-3">
                <label for="idData" class="form-label">Data de nascimento:</label>
                <input type="date" class="form-control" name="campoData" id="idData" placeholder="Seu nome completo">
            </div>
            <div>
                <label class="form-label">Sexo:</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="campoSexo" id="idSexoF" value="F">
                <label class="form-check-label" for="idSexoF">
                    Feminino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="campoSexo" id="idSexoM" value="M">
                <label class="form-check-label" for="idSexoM">
                    Masculino
                </label>
            </div>
            <div class="mt-3 mb-3">
                <label for="idObs" class="form-label">Observação</label>
                <textarea class="form-control" id="idObs" name="campoObs"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Gravar</button>
            <a href="./" class="btn btn-primary">Voltar</a>
        </form>



        <!-- Bootstrap - CSS -->
        <script src="js/bootstrap.js"></script>
</body>

</html>