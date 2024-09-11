<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sair</title>
</head>
<body>
    <?php
    session_destroy();

    header('Location: formulario.php');
    exit();
    ?>
    
</body>
</html>