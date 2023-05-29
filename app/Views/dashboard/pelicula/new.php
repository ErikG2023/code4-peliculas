<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>
<h1>Nueva Pelicula</h1>
    <form action="/dashboard/pelicula/create" method="post">

        <?= view('dashboard/pelicula/_forms', ['op' => 'Crear']) ?>

    </form>

    <?= $this->endSection() ?>