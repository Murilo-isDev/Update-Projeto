<?php
    include "conexao.php";

    $sql = "select * from clientes";

    $rs = $conexao->query($sql);

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
        <a href="adicionar.php" class="btn btn-success">Adicionar</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while($item = mysqli_fetch_object($rs)){ ?>
                    <tr>
                        <th scope="row"><?php echo $item->id;?></th>
                        <td><?php echo $item->nome;?></td>
                        <td><?php echo $item->email;?></</td>
                        <td>
                            <!-- manda o id pela url, feito com o echo $item->id -->
                            <a href="editar.php?id=<?php echo $item->id;?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="actions/del.php?id=<?php echo $item->id;?>" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap - CSS -->
    <script src="js/bootstrap.js"></script>
</body>

</html>