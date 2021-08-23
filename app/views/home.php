<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=asset("css/home.css")?>">
    <link rel="icon" href="<?=asset("icons/clima-quente.png")?>" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flomate</title>
</head>
<body>
    <main class="ClimaLayout">
    <progress class="ClimaLayout__progress" value="0" max="100">Barra de Progresso </progress>
     <div class="ClimaLayout__item">
     <p class="ClimaLayout__text"  >Temperatura : 45°C</p>
     <p class="ClimaLayout__text">Clima : Ceu Escuro</p>
     <p class="ClimaLayout__text">Data : 22/08/2021</p>

     </div>
    </main>

    <script src="<?=asset("js/atualizarProgresso.js")?>"></script>
    <script src="<?=asset("js/controlarBackgroundAndColor.js")?>"></script>
</body>
</html>