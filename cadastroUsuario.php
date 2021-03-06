<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Usuário</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="publico/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="publico/css/estilo.css">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

</head>

<?php
    include "header.php";
?>

<hr>

<body>


    <section>
        <h1>Cadastro de usuários</h1>
        <hr><br><br>

        <form method="post" action="banco/create.php">

        <fieldset>
            <legend>Login:</legend>

            Email<br>
            <input type="email" name="email" class="campo" maxlength="30" required><br>

            Senha<br>
            <input type="password" name="senha" class="campo" maxlength="30" required><br>

        </fieldset>

        <hr>

        <fieldset>

            <legend>Informações Pessoais:</legend>

            Nome<br>
            <input type="text" name="nome" class="campo" maxlength="30" required autofocus><br>

            CPF<br>
            <input type="text" name="cpf" class="campo" maxlength="20" required><br>

            Telefone<br>
            <input type="text" name="telefone" class="campo" maxlength="20" required><br>

            Tipo<br>
            <select name="tipo">
                <option value="Cliente" selected="true">Cliente</option>
                <option value="Funcionario" disabled="disabled">Funcionário</option>
            </select>

        </fieldset>

        <hr>

        <fieldset>
        <legend>Informações Residenciais:</legend>
        
            Endereço<br>
            <input type="text" name="endereco" class="campo" maxlength="60" required><br>

            Cidade<br>
            <input type="text" name="cidade" class="campo" maxlength="20" required><br>
            
            Estado<br>
            <select id="inputState" name="estado" class="form-control">
                <option selected>Escolha...</option>
                <option>AC</option>
                <option>AL</option>
                <option>AP</option>
                <option>AM</option>
                <option>BA</option>
                <option>CE</option>
                <option>DF</option>
                <option>ES</option>
                <option>GO</option>
                <option>MA</option>
                <option>MT</option>
                <option>MS</option>
                <option>MG</option>
                <option>PA</option>
                <option>PB</option>
                <option>PR</option>
                <option>PE</option>
                <option>PI</option>
                <option>RJ</option>
                <option>RN</option>
                <option>RS</option>
                <option>RO</option>
                <option>RR</option>
                <option>SC</option>
                <option>SP</option>
                <option>SE</option>
                <option>TO</option>
            </select>
            </div>
            
            CEP<br>
            <input type="text" name="cep" class="campo" maxlength="15" required><br>

            </div>
        </div>
    </fieldset>

    <hr>


            <input type="submit" value="Salvar" name="cadastra" class="btn">

            <input type="reset" value="Limpar" name="limpa" class="btn">
            <br><br>

        </form>

    </section>


</body>

<hr>

<?php
    include "footer.php";
?>

</html>
