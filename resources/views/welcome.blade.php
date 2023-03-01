<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APP Sekolah</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class="bg-gradient-primary">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h1>APP-SEKOLAH</h1>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login.index'))
                                <a class="nav-link" href="{{ route('login.index') }}" id="userDropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">{{ __('Login') }}</>
                            @endif
                        @else
                            <a class="nav-link" href="{{ route('login.index') }}" id="userDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                {{ __('Dashboard') }}
                            </a>
                            <!-- Nav Item - User Information -->
                        @endguest
                    </ul>
                </nav>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"></h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <h4 class="h4 text-gray-100 mb-4">Selamat Datang</h4>
                                    </div>
                                    <div class="form-group ">
                                        <h4 class="h4 text-gray-100 mb-4">Pengembangan aplikasi sistem informasi sekolah
                                            atau 'APP-SEKOLAH'</h4>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                        </div>
                                    </div>

                                    <hr>

                                </form>
                                <hr>
                                <div class="text-center">

                                </div>
                                <div class="text-center">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
