<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
  <a class="nav-link collapsed" href="{{ route('reports.index') }}">
    <i class="bi bi-bar-chart"></i>
    <span>Financial Reports</span>
  </a>
</li>


</li><!-- End Tables Nav -->
  <li class="nav-item">
  <a class="nav-link collapsed" href="/dashboard/categories">
    <i class="bi-card-list"></i><span>Transaction Categories</span>
  </a>
</li><!-- End Tables Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi-wallet2"></i><span>Transactions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/transactions/income">
              <i class="bi bi-circle"></i><span>Income</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/transactions/expense">
              <i class="bi bi-circle"></i><span>Expenses</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

    

      
      <li class="nav-item">
  <a class="nav-link collapsed" href="/dashboard/budget">
    <i class="bi-bell"></i><span>Budget Reminder</span>
  </a>
</li><!-- End Tables Nav -->

      

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/account">
          <i class="bi bi-person"></i>
          <span>Account</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/contact">
          <i class="bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="bi-box-arrow-right"></i>
          <span>{{ __('Logout') }}</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
        </form>
      </li><!-- End Login Page Nav -->

      <li class="nav-heading">Back</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi-arrow-left-circle"></i>
          <span>Back to landing page</span>
        </a>
      </li><!-- End Contact Page Nav -->
      

      <!-- End Blank Page Nav -->

    </ul>

  </aside>