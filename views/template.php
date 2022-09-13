<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PMK</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css">
    </head>
    <body>

        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo BASE_URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="cadastro">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logica">Desafio de lógica</a>
                </li>
            </ul>
        </div>

        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
       
        <script src="<?php echo BASE_URL; ?>/assets/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL; ?>/assets/js/popper.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL; ?>/assets/js/app/index.js" type="text/javascript"></script>
    </body>
</html>