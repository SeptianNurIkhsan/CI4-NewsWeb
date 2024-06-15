<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= base_url('/') ?>" class="brand-link">
        <span class="brand-text font-weight-light">TechToday</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <?php if(session()->get('role') === 'admin'): ?>
                <li class="nav-item">
                    <a href="<?= base_url('admin/posts') ?>" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Manajemen Berita</p>
                    </a>
                </li>

                <?php elseif(session()->get('role') === 'pengelola'): ?>
                <li class="nav-item">
                    <a href="<?= base_url('pengelola/posts') ?>" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Kelola Berita</p>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside>