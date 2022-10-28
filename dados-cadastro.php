<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de cadastro</title>
</head>
<body>
    <h2>Dados do regitro:</h2>

    <ul>
        <li><b>Titulo:</b> <?php echo $_POST['title']; ?></li>
        <li><b>Valor:</b> <?php echo $_POST['price']; ?></li>
        <li><b>Descrição:</b> <?php echo $_POST['description']; ?></li>
        <li><b>Unico dono:</b> <?php echo $_POST['dono']; ?></li>
        <li><b>Marca:</b> <?php echo $_POST['brand']; ?></li>
        <li><b>Modelo:</b> <?php echo $_POST['model']; ?></li>
        <li><b>Quilometragem:</b> <?php echo $_POST['mileage']; ?></li>
        <li><b>Data Compra:</b> <?php echo $_POST['date']; ?></li>
        <li><b>Modelo Cambio:</b> <?php echo $_POST['cambio']; ?></li>
        <li><b>Opcional:</b></li>
        <ul>
            <?php foreach($_POST['optional'] as $option) { ?>
            <li> <?php echo $option; ?></li>
            <?php } ?>
        </ul>
        <li><b>Imagem:</b><?php echo $_FILES['file']['name'] ?></li>
    </ul>

</body>
</html>