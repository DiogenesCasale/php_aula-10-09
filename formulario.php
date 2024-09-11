<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulário Aluno</title>
</head>
<body>
    <?php
    $pg_atual = 'formulario';
    include 'navbar.php';
    
    ?>

<div class="container text-center">
<h1>Formulário de Aluno</h1>
<form action="recebe.php" method="get">
  <div class="row">
    <div class="col">
    <label for="nome" class="form-label">Digite o nome do Aluno:</label>
    <input type="text" id="nome" name="nome" class="form-control"> <br><br>
    </div>
    </div>
  <div class="row">
    <div class="col">
    <label for="nome" class="form-label">Digite a data de nascimento do Aluno:</label>
    <input type="date" id="dataNascimento" name="dataNascimento" class="form-control"> <br><br>
    </div>
    </div>
  <div class="row">
    <div class="col">
    <label for="nome" class="form-label">Digite a matricula do Aluno:</label>
    <input type="text" id="matricula" name="matricula" class="form-control"> <br><br>
    </div>
    </div>
  <div class="row">
    <div class="col">
    <label for="nome" class="form-label">Digite o CPF do Aluno:</label>
    <input type="text" id="cpf" name="cpf" class="form-control"> <br><br>
    </div>
    </div>
    <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
  </div>
</div>
    
</body>
</html>