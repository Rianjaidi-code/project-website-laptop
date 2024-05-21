<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Etalase Hardware</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">EH</a>
        </div>
        <ul class="sidebar-menu">
            {{--  <li class="nav-item">
                <a href="#"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>  --}}
            <li class="menu-header">Data Master</li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-columns"></i>
                    <span>Users</span></a>
            <li class="nav-item">
                <a href="{{ route('data-laptop.index') }}" class="nav-link"><i class="fas fa-warehouse"></i>
                    <span>Data Barang</span></a>
            </li>
            </li>

            <li class="menu-header">Inventory</li>
            <li class="nav-item">
                <a href="{{ route('barang-masuk.index') }}" class="nav-link"><i class="fas fa-laptop-medical"></i>
                    <span>Barang Masuk</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('barang-keluar.index') }}" class="nav-link"><i class="fas fa-laptop-medical"></i>
                    <span>Barang Keluar</span></a>
            </li>
        </ul>

    </aside>
</div>
