<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" aria-current="page" href="/admin">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/guru-staff') ? 'active' : '' }}" href="/admin/guru-staff">
                    <span data-feather="file"></span>
                    Guru dan Staff
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/siswa') ? 'active' : '' }}" href="/admin/siswa">
                    <span data-feather="users"></span>
                    Siswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/berita') ? 'active' : '' }}" href="/admin/berita">
                    <span data-feather="file-text"></span>
                    Berita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/galeri') ? 'active' : '' }}" href="/admin/galeri">
                    <span data-feather="camera"></span>
                    Galeri
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}" href="/admin/users">
                    <span data-feather="users"></span>
                    Users
                </a>
            </li>
            
        </ul>

        
    </div>
</nav>