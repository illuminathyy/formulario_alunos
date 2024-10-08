<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
    include 'menu.php';
    menu('Mostrar');
?>
<?php
session_start();
include "aluno.php";

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$dataNascimento = $_POST["dataNascimento"];
$matricula = $_POST['matricula'];
$sexo = $_POST["sexo"];
$email = $_POST["email"];

$aluno = new Aluno($nome, $idade, $dataNascimento, $matricula, $sexo, $email);
$_SESSION['aluno'] = serialize($aluno);
?>

<div class="container mt-4">
    <h2>Dados do aluno</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Mostrar informações do aluno
    </button>

    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Informações do Aluno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Nome:</strong> <?php echo $aluno->nome; ?></p>
                    <p><strong>Idade:</strong> <?php echo $aluno->idade; ?></p>
                    <p><strong>Data de nascimento:</strong> <?php echo $aluno->dataNascimento; ?></p>
                    <p><strong>Matrícula:</strong> <?php echo $aluno->matricula; ?></p>
                    <p><strong>Sexo:</strong> <?php echo $aluno->sexo; ?></p>
                    <p><strong>Email:</strong> <?php echo $aluno->email; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
