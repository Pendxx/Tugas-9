<nav class="navbar navbar-expand navbar-dark bg-success static-top shadow-sm">
    <a class="navbar-brand mr-1 font-weight-bold" href="<?= site_url('admin') ?>"><?= SITE_NAME ?></a>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <span class="nav-link text-white">
                <i class="fas fa-user-circle fa-fw"></i> <?= $this->session->userdata('user_logged') ? $this->session->userdata('user_logged')->full_name : 'Admin' ?>
            </span>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-fw"></i> Logout
            </a>
        </li>
    </ul>
</nav>

