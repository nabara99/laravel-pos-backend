<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">POS App</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">POS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="{{ route('user.index') }}" class="nav-link"><i
                        class="fa-solid fa-users-line"></i><span>Users</span></a>
            </li>
            <li class="nav-item dropdown ">
                <a href="{{ route('product.index') }}" class="nav-link"><i
                        class="fa-solid fa-store"></i><span>Products</span></a>
            </li>
    </aside>
</div>
