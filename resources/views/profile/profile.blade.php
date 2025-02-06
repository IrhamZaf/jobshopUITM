@extends('layouts.master')

@section('content')

            <div class="page-content">
                <div class="container-fluid">
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg">
                            {{-- <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" /> --}}
                        </div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                        <div class="row g-4">
                            <div class="col-auto">
                                <div class="avatar-lg">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="p-2">
                                    <h3 class="text-white mb-1">{{ ucfirst(Auth::user()->first_name) }} {{ ucfirst(Auth::user()->last_name) }}</h3>
                                    <p class="text-white-75">{{ ucfirst(Auth::user()->role) }}</p>
                                    <div class="hstack text-white-50 gap-1">
                                        <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>{{ Auth::user()->city }}, {{ Auth::user()->country }}</div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="d-flex">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                                <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Documents</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('editprofile') }}" class="btn btn-info"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="row">
                                                    <div class="col-xxl-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-3">Info</h5>
                                                                <div class="table-responsive">
                                                                    <table class="table table-borderless mb-0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Full Name :</th>
                                                                                <td class="text-muted">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Mobile :</th>
                                                                                <td class="text-muted">{{ Auth::user()->phone_number }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">E-mail :</th>
                                                                                <td class="text-muted">{{ Auth::user()->email }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Location :</th>
                                                                                <td class="text-muted">{{ Auth::user()->city }}, {{ Auth::user()->country }}</td>
                                                                            </tr>
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end card -->
                                                    </div>
                                                    <div class="col-xxl-9">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-3">About</h5>
                                                                <p>{{ Auth::user()->description ?? 'No description provided.' }}</p>
                                                                <div class="row">
                                                                    <div class="col-6 col-md-4">
                                                                        <div class="d-flex mt-4">
                                                                            <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                                <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                                    <i class="ri-user-2-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <p class="mb-1">Role :</p>
                                                                                <h6 class="text-truncate mb-0">{{ Auth::user()->role }}</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    {{-- <div class="col-6 col-md-4">
                                                                        <div class="d-flex mt-4">
                                                                            <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                                <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                                    <i class="ri-global-line"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <p class="mb-1">Website :</p>
                                                                                <a href="#" class="fw-semibold">www.velzon.com</a>
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                                    <!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end card-body-->
                                                        </div><!-- end card -->
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    
                                    
                                    <div class="tab-pane fade" id="documents" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-4">
                                                    <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                                    <div class="flex-shrink-0">
                                                        <form action="{{ route('resume.upload') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                                                            @csrf
                                                            <input class="form-control d-none" type="file" id="formFile" name="file" onchange="document.getElementById('uploadForm').submit();">
                                                            <label for="formFile" class="btn btn-primary">
                                                                <i class="ri-upload-2-fill me-1 align-bottom"></i> Upload File
                                                            </label>
                                                        </form>
                                                    </div>
                                                </div>
                                                @if(session('success'))
                                                    <div class="alert alert-success">{{ session('success') }}</div>
                                                @endif
                                                @if(session('error'))
                                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                                @endif
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless align-middle mb-0">
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th scope="col">File Name</th>
                                                                        <th scope="col">Type</th>
                                                                        <th scope="col">Upload Date</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach(Auth::user()->resumes()->latest()->get() as $resume)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar-sm">
                                                                                    <div class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                                        <i class="ri-file-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ms-3 flex-grow-1">
                                                                                    <h6 class="fs-15 mb-0">
                                                                                        <a href="{{ Storage::url($resume->file_path) }}" class="link-dark">{{ $resume->title }}</a>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>{{ pathinfo($resume->file_path, PATHINFO_EXTENSION) }}</td>
                                                                        <td>{{ $resume->created_at->format('d M Y') }}</td>
                                                                        <td>
                                                                            <div class="d-flex gap-2">
                                                                                @if(strtolower(pathinfo($resume->file_path, PATHINFO_EXTENSION)) === 'pdf')
                                                                                    <a href="{{ asset('storage/' . $resume->file_path) }}" target="_blank" class="btn btn-sm btn-success">
                                                                                        <i class="ri-eye-fill"></i>
                                                                                    </a>
                                                                                @else
                                                                                    <a href="https://docs.google.com/viewer?url={{ urlencode(asset('storage/' . $resume->file_path)) }}" target="_blank" class="btn btn-sm btn-success">
                                                                                        <i class="ri-eye-fill"></i>
                                                                                    </a>
                                                                                @endif
                                                                                <a href="{{ asset('storage/' . $resume->file_path) }}" download="{{ $resume->title }}" class="btn btn-sm btn-info">
                                                                                    <i class="ri-download-2-fill"></i>
                                                                                </a>
                                                                                <form action="{{ route('resume.destroy', $resume) }}" method="POST" class="d-inline">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                                                        <i class="ri-delete-bin-5-line"></i>
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                                <!--end tab-content-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

@endsection