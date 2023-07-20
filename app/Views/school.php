<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>

<?php foreach ($data as $row) : ?>
    <div class="card my-3 mx-0 p-0">
        <div class="card-body row">
            <div class="col-1">N/A Stars</div>
            <div class="col-8">
                <span class="h3"><?= $row->sekolah ?></span><br>
                <span class=""><?= $row->kecamatan . ', ' . $row->kabupaten_kota ?></span><br>
                <small>0 Rating</small>
            </div>
        </div>
    </div>
<?php endforeach ?>

<?php if (count($data) > 1) : ?>
    <form action="" method="get">
        <input type="hidden" name="load" value="<?= (isset($_GET['load'])) ? $_GET['load'] + 10 : 10; ?>"></input>
        <button class="btn btn-light" type="submit">Load more</button>
    </form>
<?php endif ?>


<?= $this->endSection(); ?>