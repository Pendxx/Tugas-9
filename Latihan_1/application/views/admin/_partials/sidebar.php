<ul class="sidebar navbar-nav">
    <li class="nav-item <?= $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?= site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item <?= $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link" href="<?= site_url('admin/products') ?>">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Products</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/products/add') ?>">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Add Product</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('about') ?>">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('contact') ?>">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Contact</span>
        </a>
    </li>
</ul>

