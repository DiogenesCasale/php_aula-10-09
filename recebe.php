<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    $pg_atual = 'mostra';
   include 'aluno.php';
   include 'navbar.php';

    if (isset($_GET['nome']) && isset($_GET['dataNascimento']) && isset($_GET['matricula']) && isset($_GET['cpf'])) {
        $nome = $_GET['nome'];
        $dataNascimento = $_GET['dataNascimento'];
        $matricula = $_GET['matricula'];
        $cpf = $_GET['cpf'];

        $callConstructAluno = new Aluno($nome,$dataNascimento, $matricula,$cpf);

        }else{
            echo "PREENCHA OS DADOS CORRETAMENTE";
        }

    session_start();

    $objectAluno = serialize($callConstructAluno);

    $_SESSION['aluno'] = $objectAluno;

    ?>
    
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Mostrar
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Dados do Aluno</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
         $aluno = unserialize($_SESSION['aluno']);

        echo "Dados do Aluno: " . $aluno->ConverteString();
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar Mudanças</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>