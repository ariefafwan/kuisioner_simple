<div class="position-sticky pt-md-0">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.index') }}">
                <i data-feather="monitor"></i>
                <span class="ml-2">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.create') }}">
                <i data-feather="users"></i>
                <span class="ml-2">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link "
                href="{{ route('mhs.index') }}">
                <i data-feather="users"></i>
                <span class="ml-2">Mahasiswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
                href=" {{ route('alldosen.index') }}">
                <i data-feather="users"></i>
                <span class="ml-2">Dosen</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
                <i data-feather="file"></i>
                <span class="ml-2">Result</span>
            </a>
        </li>
        
    </ul>
</div>
