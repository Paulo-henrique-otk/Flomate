<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=asset("css/home.css?v=".VERSION)?>">
    <link rel="icon" href="<?=asset("icons/clima-quente.png")?>" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flomate</title>
</head>
<body>
    <main class="ClimaLayout">
        <div class="ClimaLayoutDiv"> <progress class="ClimaLayout__progress" value="0" max="100">Barra de Progresso </progress>
        <p class="ClimaLayout__text js-addnumber">0</p>
    </div>
     <div class="ClimaLayout__item">
     <p class="ClimaLayout__text m-left"  >Temperatura : <?=$temperaturaAtual?> °C</p>
     <p class="ClimaLayout__text m-left">Clima : <?=$climaAtual?></p>
     <p class="ClimaLayout__text m-left">Data : <?=date("d/m/Y")?></p>

     </div>
    </main>

    <script src="<?=asset("js/atualizarProgresso.js?v=". VERSION)?>"></script>
    <script src="<?=asset("js/controlarBackgroundAndColor.js?v=" . VERSION)?>"></script>
</body>
</html>