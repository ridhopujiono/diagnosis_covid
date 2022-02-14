<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{request()->is('dashboard')  ? 'active' : '' }}">
            <a href="{{url('dashboard')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Beranda</span>
            </a>
        </li>
        <li class="sidebar-item {{request()->is('gejala')  ? 'active' : '' }} ">
            <a href="{{url('gejala')}}" class='sidebar-link'>
                <i class="bi bi-book"></i>
                <span>Gejala</span>
            </a>
        </li>
        <li class="sidebar-item {{request()->is('penyakit')  ? 'active' : '' }} ">
            <a href="{{url('penyakit')}}" class='sidebar-link'>
                <i class="bi bi-file-earmark-ruled"></i>
                <span>Penyakit</span>
            </a>
        </li>

    </ul>
</div>