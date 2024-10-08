<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php
    include 'menu.php';
    menu('Cadastrar');
?>
    <div class="container">
        <form action="recebe.php" method="POST">
            <div class="form-group row">
                <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
            </div>

            <div class="form-group row">
                <label for="idade" class="col-sm-2 col-form-label">Idade</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="idade" name="idade">
                </div>
            </div>

            <div class="form-group row">
                <label for="dataNascimento" class="col-sm-2 col-form-label">Data de nascimento</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento">
                </div>
            </div>

            <div class="form-group row">
                <label for="matricula" class="col-sm-2 col-form-label">Matrícula</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="matricula" name="matricula">
                </div>
            </div>

            <div class="form-group row">
                <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                <div class="col-sm-10">
                    <select id="sexo" class="form-control" name="sexo" required>
                        <option value="">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
