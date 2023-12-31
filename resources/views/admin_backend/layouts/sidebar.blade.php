  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li>
        <a class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          <img src="{{ asset('storage/' . Auth::user()->foto)}}" alt="Profile" class="rounded-circle" style="width: 120px; height: 120px;">
        </a><!-- End Profile Iamge Icon -->      
        <h6 class="d-flex flex-column align-items-center"><?php $user = Auth::user();
          echo($user->nama_lengkap)?>
        </h6>
        <span class="d-flex flex-column align-items-center">
          <?php if ($user->kelas_user == 1) {
            echo "Super Admin";
          } else {
            echo "Admin";
          } ?>
        </span>
      </li>
      <li class="nav-item">
        <a id="sidebar-dashboard" class="nav-link collapsed" href="{{ route('adminDashboard.index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a id="sidebar-questionnaire" class="nav-link collapsed" href="{{ route('adminQuestionnaire.index')}}">
          <i class="bi bi-pencil"></i>
          <span>Kuesioner</span>
        </a>
      </li><!-- End Kuesioner Page Nav -->

      <li class="nav-item">
        <a id="sidebar-period" class="nav-link collapsed" href="{{ route('adminPeriod.index')}}">
          <i class="bi bi-calendar4"></i>
          <span>Periode</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a id="sidebar-result" class="nav-link collapsed" href="{{ route('adminResult.index')}}">
          <i class="bi bi-book"></i>
          <span>Hasil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a id="sidebar-profile" class="nav-link collapsed" href="{{ route('adminProfile.index')}}">
          <i class="bi bi-person-badge-fill"></i>
          <span>Profil</span>
        </a>
      </li><!-- End Profile Page Nav -->

        <li class="nav-item">
          <a id="sidebar-listperson" class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="/admin">
            <i class="bi bi-person"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="users-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a id="sidebar-item-listuser" href="/listuser">
                <i class="bi bi-circle"></i><span>List User</span>
              </a>
            </li>
            <?php $user = Auth::user(); 
            if ($user->kelas_user ==1) { ?>
              <li>
              <a id="sidebar-item-listadmin" href="/listadmin">
                <i class="bi bi-circle"></i><span>List Admin</span>
              </a>
            </li>
          <?php } ?>
            <!-- <li>
              <a id="sidebar-item-listadmin" href="/listadmin">
                <i class="bi bi-circle"></i><span>List Admin</span>
              </a>
            </li> -->
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
