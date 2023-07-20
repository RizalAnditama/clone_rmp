<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="bg-image">
    <div class="d-block hero-text">
        <span class="h1 bg-light text-center text-dark p-2">Quaso</span>
        <h3 class="mt-4 text-light">Enter your school to get started</h3>
        <form action="search" method="post">
            <input id="search-school-input" type="text" name="name" class="form-control search-school-input bg-light rounded-5 ps-3 py-2" placeholder="Search school name..." required>
            <button type="submit" class="d-none"></button>
        </form>
    </div>
</div>

<main class="news">
    <div class="d-flex justify-content-center align-items-center">
        <span class="bg-light h3 p-2 text-black">News</span><br>
    </div>
    <br>
    <div class="d-flex justify-content-center align-items-center">
        <span class=" h3 p-2 ">No news for now folks 😅</span>
    </div>
</main>

<?= $this->endSection(); ?>