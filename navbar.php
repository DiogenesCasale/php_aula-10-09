<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro Alunos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
        <?php if($pg_atual == 'formulario'): ?>
          <a class="nav-link active" aria-current="page" href="formulario.php">Formulario</a>
        <?php else: ?>
          <a class="nav-link" href="formulario.php">Formulario</a>
        <?php endif; ?>
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'mostra'): ?>
          <a class="nav-link active" aria-current="page" href="mostra.php">Mostra Dados Alunos</a>
        <?php else: ?>
          <a class="nav-link" href="mostra.php">Mostra Dados Alunos</a>
        <?php endif; ?>

        <li class="nav-item">
        <?php if($pg_atual == 'mostra_idade'): ?>
          <a class="nav-link active" aria-current="page" href="mostra_idade.php">Mostra Idade Aluno</a>
        <?php else: ?>
          <a class="nav-link" href="mostra_idade.php">Mostra Idade Aluno</a>
        <?php endif; ?>
          
        </li>
      </ul>
    </div>
  </div>
</nav>