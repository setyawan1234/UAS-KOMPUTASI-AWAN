<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="/dashboard" class="navbar-brand mx-4 mb-3">
            <h3 class="text" style="color: #379237;"><i class="fas fa-city me-2" style="color: #379237;"></i>AGRO<span class="inline-text" style="color: #3C2317;">FARM</span>
            </h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('admin/img/admin-male.png')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user() -> name}}</h6>
                <span>{{Auth::user() -> role}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link {{Request::is('adminhome') ? 'active' : ''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/" class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}"><i class="fas fa-laptop me-2"></i>Landingpage</a>
            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-chalkboard-teacher me-2"></i>Company Profil</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/adminprocess" class="dropdown-item {{Request::is('adminprocess') ? 'active' : ''}}">Process</a>
                    <a href="/adminabout" class="dropdown-item {{Request::is('adminabout') ? 'active' : ''}}">About Us</a>
                    <a href="/adminfeature" class="dropdown-item">Feature</a>
                    <a href="/adminmessage" class="dropdown-item {{Request::is('adminmessage') ? 'active' : ''}}">Message</a>
                </div>
            </div>

            <a href="/adminproduk" class="nav-item nav-link {{Request::is('adminproduk') ? 'active' : ''}}"><i class="fas fa-coffee me-2"></i>Product</a>
            <a href="/adminkategori" class="nav-item nav-link {{Request::is('adminkategori') ? 'active' : ''}}"><i class="fas fa-leaf me-2"></i>Kategori</a>
            <a href="/admingrade" class="nav-item nav-link {{Request::is('admingrade') ? 'active' : ''}}"><i class="fas fa-beer me-2"></i>Grade</a>
            <a href="/adminpengambilan" class="nav-item nav-link {{Request::is('adminpengambilan') ? 'active' : ''}}"><i class="fas fa-people-carry me-2 "></i>Pengambilan</a>
            <a href="/adminpenjualan" class="nav-item nav-link {{Request::is('adminpenjualan') ? 'active' : ''}}"><i class="fas fa-shopping-cart me-2"></i>Penjualan</a>
            <a href="/laporan" class="nav-item nav-link {{Request::is('laporan') ? 'active' : ''}}"><i class="fas fa-book me-2"></i>Laporan</a>
        </div>
    </nav>
</div>