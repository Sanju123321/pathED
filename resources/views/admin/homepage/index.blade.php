@extends('common.admin.authLayout')
@section('title', 'HomePage')
@section('content')
    @include('common.admin.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
       @include('common.admin.header')
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item active"><span>HomePage</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
        <!-- top banner -->
        <div class="container-lg px-4">
          <div class="card" style="background-color: white;">
            <div class="card-body col-sm-6">
              <h3><u>Top Banner</u></h3>
              <div class="mb-3">

              <?php 
                $banner_image = asset(IMAGE_UPLOAD_PATH.''. $banner['image1']);
              ?>
                <img alt="LOGO" src="<?php echo $banner_image; ?>" style="height: 200px;width: 300px;border-radius: 47px;">
              </div>
              <form method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="mb-3">
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mt-4">
                  <input type="hidden" name="type" value="Banner" />
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- top banner -->

        <!-- About us -->
        <div class="container-lg px-4 my-3">
          <div class="card" style="background-color: white;">
            <div class="card-body col-12">
              <h3><u>About Us</u></h3>
              <form method="POST" enctype="multipart/form-data" autocomplete="off">
              @csrf
              <textarea id="myeditorinstance" name="description"><?php echo @$get_about_us['description']; ?></textarea>
              <div class="row mt-4">
              @foreach ($get_about_us_type as $index => $category)
                  @php
                      $columnClass = $index < ceil(count($get_about_us_type) / 2) ? 'col-6' : 'col-6';
                  @endphp
                  @if ($index % ceil(count($get_about_us_type) / 2) == 0)
                      <div class="{{ $columnClass }}">
                  @endif
                  <div class="mb-3">
                      <input type="text" class="form-control" name="content_data[{{ $category['id'] }}]" value="{{ $category['heading'] }}">
                  </div>
                  @if (($index + 1) % ceil(count($get_about_us_type) / 2) == 0 || $index + 1 == count($get_about_us_type))
                      </div>
                  @endif
              @endforeach
              </div>
                <div class="mt-4">
                  <input type="hidden" name="type" value="About-us" />
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- About us -->

        <!-- PED Follows Core Curriculums -->
        <div class="container-lg px-4 my-3">
          <div class="card" style="background-color: white;">
            <div class="card-body col-12">
              <h3><u>PED Follows Core Curriculums
              </u></h3>
              <form method="POST" enctype="multipart/form-data" autocomplete="off">
              @csrf
              <div class="row">
                @foreach($coreCurriculam as $curriculam)
                <div class="col-6">
                  <div class="mb-3">
                    <?php 
                      $banner_image = asset(IMAGE_UPLOAD_PATH.''. $curriculam['image1']);
                    ?>
                    <img alt="LOGO" src="<?php echo $banner_image; ?>" style="height: 100px;width: 200px;border-radius: 47px;">
                  </div>
                  <div class="mb-3 ">
                    <input type="file" class="form-control" id="images1" name="images1[{{ $curriculam['id'] }}]">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" id="heading" name="heading[{{ $curriculam['id'] }}]" value="{{ $curriculam['heading1'] }}">
                  </div>
                  <div class="mb-3">
                    <textarea class="form-control" name="description[{{ $curriculam['id'] }}]" rows="10">{{ @$curriculam['description'] }}</textarea>
                  </div>
                </div>
                @endforeach
              </div>
                <div class="mt-4">
                  <input type="hidden" name="type" value="Core-Curriculums"/>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- PED Follows Core Curriculums -->

        <!-- Our Programs -->
        <div class="container-lg px-4 my-3">
          <div class="card" style="background-color: white;">
            <div class="card-body col-12">
              <h3><u>Our Programs
              </u></h3>
              <form method="POST" enctype="multipart/form-data" autocomplete="off">
              @csrf
              <div class="row">
              <?php  $i = 0; ?>
              @foreach($ourProgram as $key=>$ourProgm)
              <div class="col-6">
              <div class="mb-3">
                  <?php 
                    $banner_image = asset(IMAGE_UPLOAD_PATH.''. $ourProgm['image1']);
                  ?>
                  <img alt="LOGO" src="<?php echo $banner_image; ?>" style="height: 100px;width: 200px;border-radius: 47px;">
                </div>
                  <div class="mb-3 ">
                    <input type="file" class="form-control" id="images1" name="images1[{{ $ourProgm['id'] }}]">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" id="heading" name="heading[{{ $ourProgm['id'] }}]" value="{{ $ourProgm['heading1'] }}">
                  </div>
                  <div class="mb-3">
                    <textarea class="form-control" id="our_pdescription_{{$i}}" name="description[{{ $ourProgm['id'] }}]" rows="10">{{ @$ourProgm['description'] }}</textarea>
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" id="heading2" name="heading2[{{ $ourProgm['id'] }}]" value="{{ $ourProgm['heading2'] }}">
                  </div>
                </div>
              <?php $i++; ?>
              @endforeach
              </div>
                <div class="mt-4">
                  <input type="hidden" name="type" value="Our-Programs"/>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Our Programs -->

        <!-- Path To Start -->
        <div class="container-lg px-4 my-3">
          <div class="card" style="background-color: white;">
            <div class="card-body col-12">
              <h3><u>Path To Start
              </u></h3>
              <form method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
              <div class="row">
                @foreach($pathToStart as $key=>$pathToS)
                <div class="col-6">
                  <div class="mb-3">
                    <?php 
                      $banner_image = asset(IMAGE_UPLOAD_PATH.''. $pathToS['image1']);
                    ?>
                    <img alt="LOGO" src="<?php echo $banner_image; ?>" style="height: 100px;width: 200px;border-radius: 47px;">
                  </div>
                  <div class="mb-3 ">
                    <input type="file" class="form-control" id="images1" name="images1[{{ $pathToS['id'] }}]">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" id="heading" name="heading[{{ $pathToS['id'] }}]" value="{{ $pathToS['heading1'] }}">
                  </div>
                  <div class="mb-3">
                    <textarea class="form-control"  name="description[{{ $pathToS['id'] }}]" rows="10">{{ @$pathToS['description'] }}</textarea>
                  </div>
                </div>
                @endforeach
              </div>
                <div class="mt-4">
                  <input type="hidden" name="type" value="Path-To-Start"/>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Path To Start -->

        </div>
      </div>
      @include('common.admin.footer')
    </div>
    <script src="{{ asset('/tinymce/tinymce.min.js') }}"></script>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    tinymce.init({
      selector: 'textarea#myeditorinstance',
      plugins: 'code table lists advlist autolink link image charmap print preview hr anchor pagebreak searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking save table directionality emoticons template paste textpattern help',
      toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code table',
      menubar: false,
      branding: false,
      height: 400,
      width: "100%"     
    });


    for(var i =0; i<3; i++){
      var textarea_id = `textarea#our_pdescription_${i}`;
      tinymce.init({
        selector: textarea_id,
        plugins: 'code table lists advlist autolink link image charmap print preview hr anchor pagebreak searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking save table directionality emoticons template paste textpattern help',
        toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code table',
        menubar: false,
        branding: false,
        height: 400,
        width: "100%"     
      });

      
    }
  });
</script>


    <script>
      const header = document.querySelector('header.header');
      document.addEventListener('scroll', () => {
        if (header) {
          header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
        }
      });
    </script>
@endsection