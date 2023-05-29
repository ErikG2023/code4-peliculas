<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>
    <h1>Listado de Categorias</h1>
    <a href="/dashboard/categoria/new">Nuevo</a>

    <?= view('partials/_session') ?>
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
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
<?= $this->endSection() ?>