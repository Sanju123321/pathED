<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/examples.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/js/config.js') }}"></script>
    <script src="{{ asset('backend/js/color-modes.js') }}"></script>
  </head>
  <body>
    <div class="bg-body-tertiary min-vh-100 d-flex flex-row align-items-center">  
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <h1>Login</h1>
                  <p class="text-body-secondary">Sign In to your account</p>

                  <form method="post">
                    @csrf
                    <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="{{ asset('backend/coreui/icons/sprites/free.svg#cil-user') }}"></use>
                        </svg></span>
                      <input class="form-control" type="text" name="email"  placeholder="Email" required>
                    </div>
                    <div class="input-group mb-4"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="{{ asset('backend/coreui/icons/sprites/free.svg#cil-lock-locked') }}"></use>
                        </svg></span>
                      <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                      
                      <!-- <div class="col-6 text-end">
                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                      </div> -->
                    </div>
                  </form>
                </div>
                @if (session('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('backend/coreui/coreui/dist/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script>
      const header = document.querySelector('header.header');
      document.addEventListener('scroll', () => {
        if (header) {
          header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
        }
      });
    </script>
    <script> 
    </script>
  </body>
</html>