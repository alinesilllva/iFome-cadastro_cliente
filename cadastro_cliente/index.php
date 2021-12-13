<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

<h1>Cadastro de Clientes</h1>
<p>Sistema para cadastro de clientes.</p>

<form action="salvarcliente.php" method="get">
    <label for="nome">Nome do cliente</label>
    <input type="text" name="nome" id="nome"><br>
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf"><br>
    <label for="fone">telefone</label>
    <input type="phone" name="fone" id="fone"><br>
    <label for="email">email</label>
    <input type="email" name="email" id="email"><br>

    <input type="submit" name="salvar" value="Salvar Cliente"/>
</form>


</body>
</html>