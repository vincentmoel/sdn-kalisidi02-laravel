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
                <a class="nav-link {{ Request::is('admin/teachers-staff') ? 'active' : '' }}" href="/admin/teachers-staff">
                    <span data-feather="file"></span>
                    Guru dan Staff
                </a>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/students') ? 'active' : '' }}" href="/admin/students">
                    <span data-feather="users"></span>
                    Siswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/news') ? 'active' : '' }}" href="/admin/news">
                    <span data-feather="file-text"></span>
                    Berita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/galeries') ? 'active' : '' }}" href="/admin/galeries">
                    <span data-feather="camera"></span>
                    Galeri
                </a>
            </li>

            @if(auth()->user()->role_id == 1)
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}" href="/admin/users">
                    <span data-feather="users"></span>
                    Users
                </a>
            </li>
            @endif
            
        </ul>

        
    </div>
</nav>