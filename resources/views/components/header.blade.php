<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<link href="{{ asset('assets/img/Logo_MoneyFlow.png') }}" rel="icon">
<link href="{{ asset('assets/img/Logo_MoneyFlow.png') }}" rel="apple-touch-icon">
  <div class="d-flex align-items-center justify-content-between">
    <a href="/dashboard" class="logo d-flex align-items-center">
      {{-- <img src="{{ asset('assets/img/Logo-MoneyFlow.png') }}" alt="Logo MoneyFlow"> --}}
      <span class="d-none d-lg-block">MonneyFlow</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li>

      <!-- Notifications -->
      <li class="nav-item dropdown">
        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          @if(!empty($unreadNotificationCount) && $unreadNotificationCount > 0)
            <span class="badge bg-primary badge-number">{{ $unreadNotificationCount }}</span>
          @endif
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have {{ $unreadNotificationCount ?? 0 }} new notification{{ ($unreadNotificationCount ?? 0) > 1 ? 's' : '' }}
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li><hr class="dropdown-divider"></li>

          @forelse ($headerNotifications ?? [] as $notification)
            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>{{ $notification->title }}</h4>
                <p>{{ $notification->message }}</p>
                <p>{{ $notification->created_at->diffForHumans() }}</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
          @empty
            <li class="notification-item text-center">
              <div>No new notifications</div>
            </li>
          @endforelse

          <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
          </li>
        </ul>
      </li>
      <!-- End Notification -->

      <!-- User Profile -->
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="{{ asset('admin/img/icon-people.jpg') }}" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name ?? '' }}</span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>{{ Auth::user()->name ?? '' }}</h6>
            <span>{{ Auth::user()->role ?? '' }}</span>
          </li>
          <li><hr class="dropdown-divider"></li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="/profile">
              <i class="bi bi-person"></i>
              <span>Profil</span>
            </a>
          </li>
          <li><hr class="dropdown-divider"></li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="bi bi-box-arrow-right"></i>
              <span>{{ __('Logout') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
