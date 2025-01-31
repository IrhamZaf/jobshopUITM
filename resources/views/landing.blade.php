<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="light" data-topbar="dark"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

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

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top job-navbar" id="navbar">
            <div class="container-fluid custom-container">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo-jobshop1.png" class="card-logo card-logo-dark" alt="logo dark"
                        height="60">
                    <img src="assets/images/logo-jobshop1.png" class="card-logo card-logo-light" alt="logo light"
                        height="60">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fw-normal active" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal" href="#findJob">Find Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal" href="#aboutJobshop">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal" href="#contactUs">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal" href="https://careercounselling4u.uitm.edu.my/index.php/career-article">Career Tips</a>
                        </li>
                    </ul>

                    <div class="">
                        <a href="{{ route('login') }}" class="btn btn-primary"><i
                                class="ri-user-3-line align-bottom me-1"></i> Login & Register</a>
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section job-hero-section pb-0" id="hero"
            style="background-image: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('assets/images/UITM.jpg'); background-size: cover; background-position: center; background-attachment: fixed; height: 100vh; overflow: hidden;">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-lg-8 text-center" style="margin-top: -100px">
                        <div class="mb-5 text-center">
                            <h1 class="display-4 fw-bold text-primary mb-4 animate__animated animate__fadeInDown animate__faster">
                                Welcome to <span class="text-dark">UiTM</span> <span class="text-gradient">JobShop</span>
                            </h1>
                            <p class="lead text-dark fw-semibold mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                                Find your dream career, build professional resumes, and take the next step in your journey.<br>
                                <span class="text-primary fw-bold fst-italic">Your success story begins here.</span>
                            </p>
                            <div class="animate__animated animate__fadeInUp animate__delay-2s">
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-lg hover-lift">
                                    <i class="ri-user-add-line me-2"></i>
                                    <span class="fw-semibold">Join Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- start services -->
        <section class="section bg-light" id="statistics">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Vacancies -->
                    <div class="col-lg-3 col-md-6 text-center">
                        <div>
                            <div class="avatar-sm mb-3 mx-auto">
                                <i class="ri-file-search-line fs-1"></i>
                            </div>
                            <h2 class="fw-semibold mb-1">2372</h2>
                            <p class="text-muted mb-0">Vacancies</p>
                        </div>
                    </div>
                    <!-- Active Vacancies -->
                    <div class="col-lg-3 col-md-6 text-center">
                        <div>
                            <div class="avatar-sm mb-3 mx-auto">
                                <i class="ri-newspaper-line fs-1"></i>
                            </div>
                            <h2 class="fw-semibold mb-1">108</h2>
                            <p class="text-muted mb-0">Active Vacancies</p>
                        </div>
                    </div>
                    <!-- Jobseeker -->
                    <div class="col-lg-3 col-md-6 text-center">
                        <div>
                            <div class="avatar-sm mb-3 mx-auto">
                                <i class="ri-user-line fs-1"></i>
                            </div>
                            <h2 class="fw-semibold mb-1">10030</h2>
                            <p class="text-muted mb-0">Jobseeker</p>
                        </div>
                    </div>
                    <!-- Company -->
                    <div class="col-lg-3 col-md-6 text-center">
                        <div>
                            <div class="avatar-sm mb-3 mx-auto">
                                <i class="ri-building-line fs-1"></i>
                            </div>
                            <h2 class="fw-semibold mb-1">1157</h2>
                            <p class="text-muted mb-0">Company</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end services -->


        <section class="section" id="findJob">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Find Your <span
                                    class="text-primary">Career</span> You Deserve it</h1>
                            <p class="text-muted fs-16">Post a job to tell us about your project. We'll quickly match
                                you with the right freelancers.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-soft-warning rounded">
                                            <img src="assets/images/companies/img-3.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>UI/UX designer</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Nesta Technologies
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Selangor
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> RM 23k -
                                                35k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge badge-soft-success">Design</span>
                                            <span class="badge badge-soft-danger">UI/UX</span>
                                            <span class="badge badge-soft-primary">Adobe XD</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-ghost-primary btn-icon custom-toggle"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-soft-primary rounded">
                                            <img src="assets/images/companies/img-2.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Product Sales Specialist</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Digitech Galaxy
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Penang
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> RM 10k -
                                                15k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge badge-soft-primary">Sales</span>
                                            <span class="badge badge-soft-secondary">Product</span>
                                            <span class="badge badge-soft-info">Bussiness</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-ghost-primary btn-icon custom-toggle active"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-soft-danger rounded">
                                            <img src="assets/images/companies/img-4.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Marketing Director</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Meta4Systems
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Johor
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> RM 20k -
                                                25k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge badge-soft-warning">Marketing</span>
                                            <span class="badge badge-soft-info">Bussiness</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-ghost-primary btn-icon custom-toggle active"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-soft-success rounded">
                                            <img src="assets/images/companies/img-9.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Product Designer</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Themesbrand
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Kuala Lumpur
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> RM 40k+
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge badge-soft-success">Design</span>
                                            <span class="badge badge-soft-danger">UI/UX</span>
                                            <span class="badge badge-soft-primary">Adobe XD</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-ghost-primary btn-icon custom-toggle"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-soft-info rounded">
                                            <img src="assets/images/companies/img-1.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Project Manager</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Syntyce Solutions
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Melaka
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> RM 18k -
                                                26k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge badge-soft-danger">HR</span>
                                            <span class="badge badge-soft-success">Manager</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-ghost-primary btn-icon custom-toggle"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-soft-success rounded">
                                            <img src="assets/images/companies/img-7.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Business Associate</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Nesta Technologies
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Negeri Sembilan
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> RM 23k -
                                                35k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge badge-soft-success">Design</span>
                                            <span class="badge badge-soft-danger">UI/UX</span>
                                            <span class="badge badge-soft-primary">Adobe XD</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-ghost-primary btn-icon custom-toggle active"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-soft-info rounded">
                                            <img src="assets/images/companies/img-8.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Recruiting Coordinator</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Zoetic Fashion
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Pahang
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> RM 12k -
                                                15k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge badge-soft-success">Full Time</span>
                                            <span class="badge badge-soft-info">Remote</span>
                                            <span class="badge badge-soft-primary">Fashion</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-ghost-primary btn-icon custom-toggle active"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-soft-warning rounded">
                                            <img src="assets/images/companies/img-5.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Customs officer</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Nesta Technologies
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Sarawak
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> RM 41k -
                                                45k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge badge-soft-success">Design</span>
                                            <span class="badge badge-soft-danger">UI/UX</span>
                                            <span class="badge badge-soft-primary">Adobe XD</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-ghost-primary btn-icon custom-toggle"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start About Section -->
        <section class="py-4 bg-primary position-relative" id="aboutJobshop">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <!-- Title -->
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white fw-bold lh-base mb-2">About <span class="text-warning">Jobshop
                                UiTM</span></h1>
                        <p class="text-white-50 fs-16">
                            Bridging the gap between UiTM graduates and employers since 2007.
                        </p>
                    </div>
                </div>

                <!-- Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <!-- Section: Welcome -->
                        <div class="col-12 mb-3">
                            <div class="card bg-warning text-white shadow-sm border-0">
                                <div class="card-body d-flex align-items-start">
                                    <i class="ri-building-line fs-3 me-3"></i>
                                    <div>
                                        <h5 class="fw-semibold mb-2">Welcome to Jobshop UiTM</h5>
                                        <p class="mb-0">Jobshop has been operating since its official launch in 2007.
                                            It serves as a platform for employers to connect with UiTM graduates and
                                            students for employment and internship opportunities, linking talents to
                                            prospective employers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section: Connecting Employers & Graduates -->
                        <div class="col-12 mb-3">
                            <div class="card bg-success text-white shadow-sm border-0">
                                <div class="card-body d-flex align-items-start">
                                    <i class="ri-user-add-line fs-3 me-3"></i>
                                    <div>
                                        <h5 class="fw-semibold mb-2">Connecting Employers & Graduates</h5>
                                        <p class="mb-0">Employers can use the platform to advertise job vacancies,
                                            shortlist potential candidates from UiTM graduates, and engage with
                                            applicants directly for employment opportunities.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section: Students & Graduates -->
                        <div class="col-12 mb-3">
                            <div class="card bg-info text-white shadow-sm border-0">
                                <div class="card-body d-flex align-items-start">
                                    <i class="ri-user-star-line fs-3 me-3"></i>
                                    <div>
                                        <h5 class="fw-semibold mb-2">Students & Graduates</h5>
                                        <p class="mb-0">Students and graduates are encouraged to join our pool,
                                            upload resumes, view job postings, and apply directly to companies to
                                            enhance their employability and secure their dream job.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section: Need Assistance -->
                        <div class="col-12">
                            <div class="card bg-danger text-white shadow-sm border-0">
                                <div class="card-body d-flex align-items-start">
                                    <i class="ri-question-line fs-3 me-3"></i>
                                    <div>
                                        <h5 class="fw-semibold mb-2">Need Assistance?</h5>
                                        <p class="mb-0">For any support while using Jobshop UiTM, please reach out to
                                            our support team. We aim to be the bridge that connects institutions with
                                            top-tier graduates.</p>
                                        <p class="fw-bold mb-0">– Jobshop UiTM Support Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Start Contact Us Section -->
        <section class="section bg-light mb-0 pb-0" id="contactUs">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mb-5">
                        <h1 class="ff-secondary fw-semibold text-capitalize lh-base">Contact <span
                                class="text-primary">Us</span></h1>
                        <p class="text-muted mb-4">Feel free to get in touch with us. We are here to help you.</p>
                    </div>
                </div>

                <div class="row">
                    <!-- Contact Form -->
                    <div class="col-md-6 d-flex">
                        <div class="card shadow-lg border-0 mb-4 flex-fill">
                            <div class="card-body p-4">
                                <h5 class="fw-semibold text-dark mb-3">Email Us</h5>
                                <form action="#" method="post">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Information Card with Address Focus -->
                    <div class="col-md-6 d-flex">
                        <div class="card shadow-lg border-0 mb-4 flex-fill">
                            <div class="card-body p-4">
                                <h5 class="fw-semibold text-dark mb-3">Information</h5>
                                <div class="d-flex flex-column align-items-start">
                                    <p class="fw-semibold text-dark mb-2"><i
                                            class="ri-map-pin-line text-primary me-2"></i>Address</p>
                                    <p class="text-muted mb-3" style="font-size: 16px;">
                                        <strong>Career & Counselling Centre</strong><br>
                                        Student Affairs Division<br>
                                        Level 5, Budisiswa Building<br>
                                        Universiti Teknologi MARA<br>
                                        Shah Alam, Selangor Darul Ehsan<br>
                                        40450 Malaysia
                                    </p>
                                    <hr>
                                    <ul class="list-unstyled mb-0">
                                        <li><i class="ri-phone-line text-primary me-2"></i> 603 - 5544 2630 / 3211 /
                                            3488</li>
                                        <li><i class="ri-phone-line text-primary me-2"></i> 603 - 5544 3493</li>
                                        <li><i class="ri-mail-line text-primary me-2"></i> <a
                                                href="mailto:jobs@uitm.edu.my">jobs@uitm.edu.my</a></li>
                                        <li><i class="ri-globe-line text-primary me-2"></i><a
                                                href="https://careerCounselling4u.uitm.edu.my"
                                                target="_blank">careerCounselling4u.uitm.edu.my</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
            </div>
            <!-- End container -->

            <!-- Full Width Map Section -->
            <div class="map-section" style="position: relative; width: 100%; margin-top: 30px;">
                <div class="map-container"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63512.61722643351!2d101.44526511817628!3d3.076767490697254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4e6b7ebf7777%3A0xa81a989df72f8ef7!2sUniversiti%20Teknologi%20MARA%20Shah%20Alam%2C%20Selangor%2C%20Malaysia!5e0!3m2!1sen!2sus!4v1679657882259!5m2!1sen!2sus"
                        width="100%" height="450" style="border: 0;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <!-- End Contact Us Section -->


        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-4 position-relative">
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-lg-4 mt-3">
                        <div>
                            <img src="assets/images/uitmlogo.png" alt="logo light" height="80" />
                            <p class="text-white mt-3 fs-15">Jobshop UiTM connects students and graduates with job
                                opportunities, supporting them in landing their dream roles.</p>
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Links Section -->
                    <div class="col-lg-6 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-6 mt-3">
                                <h5 class="text-white mb-2 fs-15">Useful Links</h5>
                                <ul class="list-unstyled footer-list fs-15 text-muted">
                                    <li><a href="pages-about-us.html">About Us</a></li>
                                    <li><a href="pages-contact-us.html">Contact Us</a></li>
                                    <li><a href="pages-privacy-terms.html">Privacy & Terms</a></li>
                                    <li><a href="pages-disclaimer-copyright.html">Disclaimer & Copyright</a></li>
                                    <li><a href="pages-faqs.html">FAQ</a></li>
                                </ul>
                            </div>

                            <!-- Our Office Section -->
                            <div class="col-sm-6 mt-3">
                                <h5 class="text-white mb-2 fs-15">Our Office</h5>
                                <div class="text-muted fs-15">
                                    <p>Career & Counselling Centre</p>
                                    <p>Level 5, Budisiswa Building</p>
                                    <p>Universiti Teknologi MARA</p>
                                    <p>40450 Shah Alam, Selangor</p>
                                    <p>Phone: 603 - 5544 2630 / 3211 / 3488</p>
                                    <p>Email: <a href="mailto:jobshop@uitm.edu.my"
                                            class="text-white">jobshop@uitm.edu.my</a></p>
                                    <p>Fax: 603 - 5544 3493</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom Section -->
                <div class="row text-center text-sm-start align-items-center mt-3">
                    <div class="col-sm-6">
                        <p class="copy-rights mb-0 text-white fs-14">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Jobshop UiTM
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-2">
                            <ul class="list-inline mb-0 footer-list gap-3 fs-15">
                                <li class="list-inline-item">
                                    <a href="pages-privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="pages-term-conditions.html">Terms & Conditions</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="pages-privacy-policy.html">Security</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->


        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!--job landing init -->
    <script src="assets/js/pages/job-lading.init.js"></script>
</body>

</html>
