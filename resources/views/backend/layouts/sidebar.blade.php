  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li>
        <a class="card-body profile-card pt-4 d-flex flex-column align-items-center">
        <img src="{{ asset('backend/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
        </a><!-- End Profile Iamge Icon -->
        <!-- <h6> {{ Auth::user()->name }}</h6> -->
        <h6 class="d-flex flex-column align-items-center">Raditya Arief Pratama</h6>
        <span class="d-flex flex-column align-items-center">Teknik Informatika</span>
      </li>
      <li class="nav-item">
        <a id="sidebar-dashboard" class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a id="sidebar-questionnaire" class="nav-link collapsed" href="{{ route('user.questionnaire.check')}}">
          <i class="bi bi-pencil"></i>
          <span>Kuesioner</span>
        </a>
      </li><!-- End Kuesioner Page Nav -->

      <li class="nav-item">
        <a id="sidebar-profile" class="nav-link collapsed" href="/profile">
          <i class="bi bi-person"></i>
          <span>Profil</span>
        </a>
      </li><!-- End Profile Page Nav -->

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
