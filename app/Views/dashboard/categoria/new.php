<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Categoria</title>
</head>

<body>

    <form action="/dashboard/categoria/create" method="post">

        <?= view('dashboard/categoria/_forms', ['op' => 'Crear']) ?>

    </form>

</body>

</html>