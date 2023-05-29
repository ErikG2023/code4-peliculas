<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>

<?= view('partials/_form-error') ?>

    <form action="/dashboard/categoria/update/<?= $categoria['id'] ?>" method="post">

        <?= view('dashboard/categoria/_forms',['op'=>'Actualizar']) ?>

    </form> 

<?= $this->endSection() ?>