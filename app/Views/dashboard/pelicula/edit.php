<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

<h1>Editar Pelicula</h1>
    <form action="/dashboard/pelicula/update/<?= $pelicula['id'] ?>" method="post">

        <?= view('dashboard/pelicula/_forms',['op'=>'Actualizar']) ?>

    </form> 

<?= $this->endSection() ?>