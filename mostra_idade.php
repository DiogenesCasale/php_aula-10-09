<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    $pg_atual = 'mostra_idade';
     session_start();
    include 'aluno.php';
    include 'navbar.php';

    $aluno = unserialize($_SESSION['aluno']);
    
    echo "A idade do aluno: " . $aluno->Nome() . " é " . $aluno->Idade() . " anos";
     
    ?>
    <form action="sair.php">
        <input type="submit" value="Preencher Novo Formulário">
    </form>