{{-- <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
      
      <div class="sidebar-brand-text mx-3">SPK ITTP - Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
      <a class="nav-link" href="{{route('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="{{url('criteriaweights')}}">
          <i class="fas fa-fw fa-hotel"></i>
          <span>Criteria dan Height</span></a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{url('criteriaratings')}}">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Criteria Rating</span></a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{url('alternatives')}}">
          <i class="fas fa-fw fa-images"></i>
          <span>Alternative dan Score</span></a>
  </li>

  

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{url('decision')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Decision Matrix</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{url('normalization')}}">
        <i class="fas fa-fw fa-hotel"></i>
        <span>Normalization</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{url('rank')}}">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Rank</span></a>
</li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar --> --}}

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-text mx-3">SPK ITTP - Admin</div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    <li class="nav-item" id="dashboard">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
  
    <li class="nav-item" id="criteriaweights">
      <a class="nav-link" href="{{ url('criteriaweights') }}">
        <i class="fas fa-fw fa-hotel"></i>
        <span>Criteria dan Height</span>
      </a>
    </li>
    <li class="nav-item" id="criteriaratings">
      <a class="nav-link" href="{{ url('criteriaratings') }}">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Criteria Rating</span>
      </a>
    </li>
    <li class="nav-item" id="alternatives">
      <a class="nav-link" href="{{ url('alternatives') }}">
        <i class="fas fa-fw fa-images"></i>
        <span>Alternative dan Score</span>
      </a>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
  
    <!-- Nav Item - Decision Matrix -->
    <li class="nav-item" id="decision">
      <a class="nav-link" href="{{ url('decision') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Decision Matrix</span>
      </a>
    </li>
  
    <li class="nav-item" id="normalization">
      <a class="nav-link" href="{{ url('normalization') }}">
        <i class="fas fa-fw fa-hotel"></i>
        <span>Normalization</span>
      </a>
    </li>
    <li class="nav-item" id="rank">
      <a class="nav-link" href="{{ url('rank') }}">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Rank</span>
      </a>
    </li>
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>
  <!-- End of Sidebar -->
  
  <script>
    // Ambil URL halaman saat ini
    var currentUrl = window.location.href;
  
    // Temukan setiap item menu dan periksa apakah URL-nya cocok
    document.querySelectorAll('.nav-item').forEach(function(navItem) {
      // Ambil URL dari item menu
      var navUrl = navItem.querySelector('a').href;
  
      // Periksa apakah URL saat ini cocok dengan URL item menu
      if (currentUrl === navUrl) {
        // Jika cocok, tambahkan kelas 'active'
        navItem.classList.add('active');
      }
    });
  </script>
    
  