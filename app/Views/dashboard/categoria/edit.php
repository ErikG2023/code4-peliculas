<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categoria</title>
</head>

<body>

    <form action="/dashboard/categoria/update/<?= $categoria['id'] ?>" method="post">

        <?= view('dashboard/categoria/_forms',['op'=>'Actualizar']) ?>

    </form> 

</body>

</html>