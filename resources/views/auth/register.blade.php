<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="light" data-topbar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>JobShop - UITM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper bg-light py-5 d-flex justify-content-center align-items-center min-vh-100">
        {{-- <div class="bg-overlay"></div> --}}
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border card-border-primary overflow-hidden m-0">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    <img src="assets/images/logo-jobshop1.png" alt="" height="70">
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="jobQuoteCarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#jobQuoteCarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#jobQuoteCarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#jobQuoteCarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">" This platform has transformed my job search experience! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" I found my dream job here, highly recommend! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" The resources available are invaluable for job seekers. "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Register Account</h5>
                                            <p class="text-muted">Sign up to JobShop UiTM.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form class="needs-validation" novalidate action="{{ route('register') }}" method="POST">
                                                @csrf
                                                
                                                {{-- Add error messages display --}}
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul class="mb-0">
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <div class="mb-3">
                                                    <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="firstname" class="form-control" id="first_name" placeholder="Enter first name" required>
                                                    <div class="invalid-feedback">
                                                        Please enter first name
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="lastname" class="form-control" id="last_name" placeholder="Enter last name" required>
                                                    <div class="invalid-feedback">
                                                        Please enter last name
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email address" required>
                                                    <div class="invalid-feedback">
                                                        Please enter email
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" 
                                                               name="password" 
                                                               class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                                               onpaste="return false" 
                                                               placeholder="Enter password" 
                                                               id="password-input"
                                                               required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                        
                                                <div class="mb-3">
                                                    <label class="form-label" for="confirm-password-input">Confirm Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" 
                                                               name="password_confirmation" 
                                                               class="form-control pe-5 password-input"
                                                               onpaste="return false" 
                                                               placeholder="Confirm password" 
                                                               id="confirm-password-input"
                                                               required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <script>
                                                    // Toggle password visibility
                                                    document.getElementById('password-addon').addEventListener('click', function() {
                                                        var passwordInput = document.getElementById('password-input');
                                                        var icon = this.querySelector('i');
                                                        
                                                        if (passwordInput.type === 'password') {
                                                            passwordInput.type = 'text';
                                                            icon.classList.remove('ri-eye-fill');
                                                            icon.classList.add('ri-eye-off-fill');
                                                        } else {
                                                            passwordInput.type = 'password';
                                                            icon.classList.remove('ri-eye-off-fill');
                                                            icon.classList.add('ri-eye-fill');
                                                        }
                                                    });

                                                    // Toggle confirm password visibility
                                                    document.getElementById('confirm-password-addon').addEventListener('click', function() {
                                                        var confirmPasswordInput = document.getElementById('confirm-password-input');
                                                        var icon = this.querySelector('i');
                                                        
                                                        if (confirmPasswordInput.type === 'password') {
                                                            confirmPasswordInput.type = 'text';
                                                            icon.classList.remove('ri-eye-fill');
                                                            icon.classList.add('ri-eye-off-fill');
                                                        } else {
                                                            confirmPasswordInput.type = 'password';
                                                            icon.classList.remove('ri-eye-off-fill');
                                                            icon.classList.add('ri-eye-fill');
                                                        }
                                                    });
                                                </script>
                                        
                                                {{-- <input type="hidden" name="role" value="student"> --}}
                                        
                                                {{-- <div class="mb-4">
                                                    <p class="mb-0 fs-13 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-semibold">Terms of Use</a></p>
                                                </div> --}}
                                        
                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-14">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-13 mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-13 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-13 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-13 mb-0">A least <b>number</b> (0-9)</p>
                                                </div>
                                        
                                                <div class="mt-4">
                                                    <button class="btn btn-info w-100" type="submit">Sign Up</button>
                                                </div>
                                        
                    
                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Already have an account ? <a href="{{route('login')}}" class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script> UiTM. Develop with <i class="mdi mdi-heart text-danger"></i> by Aimie
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- validation init -->
    <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>
    <!-- password create init -->
    <script src="{{ asset('assets/js/pages/password-create.init.js') }}"></script>
</body>

</html>