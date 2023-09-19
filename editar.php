<?php
include "conexao.php";

//Pega o valor do id da url
$id = $_GET['id'];

//armazena código sql para a busca do registro selecionado
$sql = "select * from clientes where id = $id";

//executa o código sql no banco
$rs = $conexao->query($sql);

//Pega dados retornados do bd e coloca na variável $item
$item = mysqli_fetch_object($rs);
?>

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
        <form action="actions/edit.php" method="post">
            <input type="hidden" name="campoId" value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="campoNome" value="<?php echo $item->nome; ?>" id="idNome" placeholder="Seu nome completo">
            </div>
            <div class="mb-3">
                <label for="idEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" name="campoEmail" value="<?php echo $item->email; ?>" id="idEmail" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="idCPF" class="form-label">CPF:</label>
                <input type="text" class="form-control" name="campoCpf" value="<?php echo $item->cpf; ?>" id="idCPF" placeholder="12345678909" minlength="11" maxlength="11">
            </div>
            <div class="mb-3">
                <label for="idData" class="form-label">Data de nascimento:</label>
                <input type="date" class="form-control" name="campoData" value="<?php echo $item->data; ?>" id="idData" placeholder="Seu nome completo">
            </div>
            <div>
                <label class="form-label">Sexo:</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="campoSexo" id="idSexoF" value="F" <?php if ( $item->sexo == "F") echo "checked"; ?>> <!-- Dá pra fazer assim://php echo $item -> sexo == "M" ? "checked" : "" ?>  -->
                <label class="form-check-label" for="idSexoF">
                    Feminino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="campoSexo" id="idSexoM" value="M" <?php if ( $item->sexo == "M") echo "checked"; ?> >
                <label class="form-check-label" for="idSexoM">
                    Masculino
                </label>
            </div>
            <div class="mt-3 mb-3">
                <label for="idObs" class="form-label">Observação</label>
                <textarea class="form-control" id="idObs" name="campoObs" ><?php echo $item->obs; ?> </textarea>
            </div>
            <button type="submit" class="btn btn-success">Gravar</button>
            <a href="./" class="btn btn-primary">Voltar</a>
        </form>



        <!-- Bootstrap - CSS -->
        <script src="js/bootstrap.js"></script>
</body>

</html>