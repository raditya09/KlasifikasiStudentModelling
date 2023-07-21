  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li>
        <a class="nav-link nav-profile d-flex align-items-center pe-0">
        <img src="{{ asset('backend/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
        </a><!-- End Profile Iamge Icon -->
        <!-- <h6> {{ Auth::user()->name }}</h6> -->
        <h6>Raditya Arief Pratama</h6>
        <span>Teknik Informatika</span>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ asset('backend/user-profile.html')}}">
          <i class="bi bi-pencil"></i>
          <span>Kuesioner</span>
        </a>
      </li><!-- End Kuesioner Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ asset('backend/user-profile.html')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
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
