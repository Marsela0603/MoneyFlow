<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | MoneyFlow</title>
    <link href="{{ asset('assets/img/Logo_MoneyFlow.png') }}" rel="icon">
<link href="{{ asset('assets/img/Logo_MoneyFlow.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>
<body class="bg-light">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="text-center mb-4">
                <img src="{{ asset('assets/img/Logo_MoneyFlow.png') }}" alt="Logo" class="img-fluid" width="100">
                <h5 class="mt-2">Login to MoneyFlow</h5>
              </div>

              <div class="card mb-3 shadow-sm w-100">

                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                    @csrf

                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                      <x-input-error :messages="$errors->get('email')" class="mt-1 text-danger" />
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" required>
                      <x-input-error :messages="$errors->get('password')" class="mt-1 text-danger" />
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                        <label class="form-check-label" for="remember_me">
                          Remember me
                        </label>
                      </div>
                    </div>

                    <div class="col-12 d-flex justify-content-between">
                      @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none small">Forgot password?</a>
                      @endif
                      <button class="btn btn-primary w-50" type="submit">Login</button>
                    </div>

                    <div class="col-12 text-center mt-2">
                      <span class="small">Don't have account? <a href="{{ route('register') }}">Sign Up here</a></span>
                    </div>
                  </form>
                </div>

              </div>

            </div>
          </div>
        </div>

      </section>
    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('admin/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin/js/main.js')}}"></script>
</body>
</html>
