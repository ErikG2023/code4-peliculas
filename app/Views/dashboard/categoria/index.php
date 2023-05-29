<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1>Listado de Categorias</h1>
    <a href="/dashboard/categoria/new">Nuevo</a>


    <table>
        <tr>
            <td>Titulo</td>
            <td>Opciones</td>
        </tr>
    <?php foreach ($categorias as $key => $value) : ?>
        <tr>
            <td><?= $value['titulo'] ?></td>
            <td>
                <a href="/dashboard/categoria/show/<?= $value['id'] ?>">Show</a>
                <a href="/dashboard/categoria/edit/<?= $value['id'] ?>">Editar</a>
                <form action="/dashboard/categoria/delete/<?= $value['id'] ?>" method="post">
            <button type="submit">
                Eliminar
            </button></form>
            </td>
        </tr>
    <?php endforeach ?>
    </table>
</body>
</html>