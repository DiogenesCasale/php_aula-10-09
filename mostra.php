<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    $pg_atual = 'mostra';

    session_start();

    include 'aluno.php';
    include 'navbar.php';

    $aluno = unserialize($_SESSION['aluno']);

    //echo "Dados do Aluno: " . $aluno->ConverteString();

    ?>
    <form action="mostra_idade.php">
        <input type="submit" value="Mostra Idade do Aluno">
    </form>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $aluno->Nome(); ?></h5>
    <p class="card-text"><?php echo $aluno->ConverteString(); ?></p>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>