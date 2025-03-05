@extends('common.admin.authLayout')
@section('title', 'Profile')
@section('content')
    @include('common.admin.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        @include('common.admin.header')
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item active"><span>Profile</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="card" style="background-color: white;">
            <div class="card-body col-sm-6">
              <div class="mb-3">
                <img alt="LOGO" src="{{ asset('backend/images/logo.png') }}" style="height: 81px;width: 83px;border-radius: 47px;">
              </div>
              <form method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstname" 
                          value="{{ old('firstname', $user->firstname) }}" required>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastname" 
                          value="{{ old('lastname', $user->lastname) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" 
                          value="{{ old('email', $user->email) }}" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password (leave blank to keep current)" autocomplete="new-password">
                </div>
                <div class="mb-3">
                  <label for="profile" class="form-label">Image</label>
                  <input type="file" class="form-control" id="profile" name="profile">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      @include('common.admin.footer')
    </div>
    <script>
      const header = document.querySelector('header.header');
      document.addEventListener('scroll', () => {
        if (header) {
          header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
        }
      });
    </script>
@endsection