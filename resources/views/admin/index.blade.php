@extends('common.admin.authLayout')
@section('title', 'Home')
@section('content')
    @include('common.admin.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
       @include('common.admin.header')
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item active"><span>Dashboard</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <div class="tab-content rounded-bottom">
                <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1011">
                <div class="row g-4">
                    <div class="col-6 col-lg-4 col-xl-3 col-xxl-2">
                    <div class="card text-white bg-info">
                        <div class="card-body">
                        <div class="text-white text-opacity-75 text-end">
                            <svg class="icon icon-xxl">
                            <use xlink:href="{{ asset('backend/coreui/icons/sprites/free.svg#cil-speech') }}"></use>
                            </svg>
                        </div>
                        <div class="fs-4 fw-semibold">150</div>
                        <div class="small text-white text-opacity-75 text-uppercase fw-semibold text-truncate">Total Enquries</div>
                        <div class="progress progress-white progress-thin mt-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3 col-xxl-2">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                        <div class="text-white text-opacity-75 text-end">
                            <svg class="icon icon-xxl">
                            <use xlink:href="{{ asset('backend/coreui/icons/sprites/free.svg#cil-user-follow') }}"></use>
                            </svg>
                        </div>
                        <div class="fs-4 fw-semibold">385</div>
                        <div class="small text-white text-opacity-75 text-uppercase fw-semibold text-truncate">Total Students</div>
                        <div class="progress progress-white progress-thin mt-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
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