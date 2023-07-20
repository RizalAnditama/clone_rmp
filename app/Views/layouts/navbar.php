<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand ms-3 fs-2" href="<?= base_url() ?>">Quaso</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> -->
                <div class="dropdown mx-md-3">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-easel2"></i> School
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-apple"></i> Teacher</a></li>
                    </ul>
                </div>
                <form action="search" method="post">
                    <input id="search-school-input" type="text" name="name" class="form-control  rounded-5 ps-3 py-2" placeholder="Search school name..." size="100" required>
                    <button type="submit" class="d-none"></button>
                </form>
            </ul>
            <a href="<?= base_url('news') ?>" class="btn btn-dark">News</a>
            <button class="btn btn-light mx-3">Login</button>
        </div>
    </div>
</nav>