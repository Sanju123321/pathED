@extends('common.admin.authLayout')
@section('title', 'Website Details')
@section('content')
    @include('common.admin.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        @include('common.admin.header')
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item active"><span>Website Details</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
        <div class="body flex-grow-1">
            <div class="container-lg px-4">
                <div class="card" style="background-color: white;">
                 <div class="card-body">
                 <div class="mb-3">
                    <?php 
                        $banner_image = asset(IMAGE_UPLOAD_PATH.''. @$websiteDetails['image']);
                    ?>
                    <img alt="LOGO" src="<?php echo $banner_image; ?>" style="height: 200px;width: 300px;border-radius: 47px;">
                    </div>
                    <form method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Logo</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $websiteDetails['name'] }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $websiteDetails['email'] }}">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" rows="8" id="address" name="address">{{ $websiteDetails['address'] }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $websiteDetails['phone_number'] }}">
                                </div>
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook Channel</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $websiteDetails['facebook'] }}">
                                </div>
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram Channel</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $websiteDetails['instagram'] }}">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Website Description</label>
                                    <textarea class="form-control" rows="8" id="description" name="description">{{ $websiteDetails['description'] }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            @csrf
                            <button type="submit" class="btn btn-primary">Update</button>
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