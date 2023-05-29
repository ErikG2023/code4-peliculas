<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

    <h1>Listado de Peliculas</h1>
    <a href="/dashboard/pelicula/new">Nuevo</a>

    <?= view('partials/_session') ?>
    <table>
        <tr>
            <td>Titulo</td>
            <td>Descripcion</td>
            <td>Opciones</td>
        </tr>
    <?php foreach ($peliculas as $key => $value) : ?>
        <tr>
            <td><?= $value->titulo ?></td>
            <td><?= $value->descripcion ?></td>
            <td>
                <a href="/dashboard/pelicula/show/<?= $value->id ?>">Show</a>
                <a href="/dashboard/pelicula/edit/<?= $value->id ?>">Editar</a>
                <form action="/dashboard/pelicula/delete/<?= $value->id ?>" method="post">
            <button type="submit">
                Eliminar
            </button></form>
            </td>
        </tr>
    <?php endforeach ?>
    </table>
    <?= $this->endSection() ?>