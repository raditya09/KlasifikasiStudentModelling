@extends('backend/layouts.template')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{ asset('backend/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
              <h2>Raditya Arief Pratama</h2>
              <h3>Teknik Informatika</h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">{{ __('Nama Lengkap') }}</div>
                    <div class="col-lg-9 col-md-8">Raditya Arief Pratama</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">{{ __('NIM') }}</div>
                    <div class="col-lg-9 col-md-8">E4212423</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">{{ __('Semester') }}</div>
                    <div class="col-lg-9 col-md-8">5</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">{{ __('Angkatan') }}</div>
                    <div class="col-lg-9 col-md-8">2021</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">{{ __('E-Mail') }}</div>
                    <div class="col-lg-9 col-md-8">radityaariefp@polije.ac.id</div>
                  </div>

                </div>

                  <!-- Profile Edit Form -->
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <form method="POST" action="/profile/update" enctype="multipart/form-data">
                      @csrf
              
                      <div class="row mb-3">
                          <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                          <div class="col-md-8 col-lg-9">
                              <img src="{{ asset('backend/assets/img/profile-img.jpg')}}" alt="Profile">
                              <div class="pt-2">
                                  <input type="file" name="profile_image" class="form-control-file">
                              </div>
                          </div>
                      </div>
              
                      <div class="row mb-3">
                          <label for="nama_lengkap" class="col-md-4 col-lg-3 col-form-label">{{ __('Nama Lengkap') }}</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" value="{{ Auth::user()->nama_lengkap }}">
                          </div>
                      </div>
              
                      <div class="row mb-3">
                          <label for="nim" class="col-md-4 col-lg-3 col-form-label">{{ __('NIM') }}</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="nim" type="text" class="form-control" id="nim" value="{{ Auth::user()->nim }}">
                          </div>
                      </div>
              
                      <div class="row mb-3">
                          <label for="semester" class="col-md-4 col-lg-3 col-form-label">{{ __('Semester') }}</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="semester" type="text" class="form-control" id="semester" value="{{ Auth::user()->semester }}">
                          </div>
                      </div>
              
                      <div class="row mb-3">
                          <label for="angkatan" class="col-md-4 col-lg-3 col-form-label">{{ __('Angkatan') }}</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="angkatan" type="text" class="form-control" id="angkatan" value="{{ Auth::user()->angkatan }}">
                          </div>
                      </div>
              
                      <div class="text-center">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                  </form>
              </div> <!-- End Profile Edit Form -->
              

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection

  @section('script')
  <script>
     $(document).ready(function() {
         $("#sidebar-profile").removeClass("collapsed");
     });
  </script>
 @endsection