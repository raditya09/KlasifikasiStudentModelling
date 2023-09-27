  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li>      
        <h6>Raditya Arief Pratama</h6>
        <span>Dosen</span>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('adminQuestionnaire.index')}}">
          <i class="bi bi-pencil"></i>
          <span>Kuesioner</span>
        </a>
      </li><!-- End Kuesioner Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ asset('admin_backend/user-profile.html')}}">
          <i class="bi bi-book"></i>
          <span>Hasil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="/admin">
          <i class="bi bi-person"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/listuser">
              <i class="bi bi-circle"></i><span>List User</span>
            </a>
          </li>
          <li>
            <a href="/listadmin">
              <i class="bi bi-circle"></i><span>List Admin</span>
            </a>
          </li>
        </ul>
      </li><!-- End User Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="bi bi-box-arrow-in-right"></i>
                  {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
    </form>
      </li><!-- End Logout Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
