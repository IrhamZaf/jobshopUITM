@extends('layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg profile-setting-img">
                    <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                    <div class="overlay-content">
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card mt-n5">
                        <div class="card-body p-4">
                            <div class="text-center">
                                {{-- <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <img src="assets/images/users/avatar-1.jpg"
                                        class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                        alt="user-profile-image">
                                    <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                        <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                        <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                <i class="ri-camera-fill"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div> --}}
                                <h5 class="fs-16 mb-1">{{ $user->first_name }} {{ $user->last_name }}</h5>
                                <p class="text-muted mb-0">{{ $user->role }} / {{ $user->role }}</p>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails"
                                        role="tab">
                                        Personal Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                        Change Password
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab">
                                        Setting
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <form action="{{ route('updateprofile') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="firstnameInput" name="firstname" placeholder="Enter your firstname" value="{{ $user->first_name }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="lastnameInput" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="lastnameInput" name="lastname" placeholder="Enter your lastname" value="{{ $user->last_name }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="phonenumberInput" name="phonenumber"
                                                        placeholder="Enter your phone number" value="{{ $user->phone_number }}" maxlength="12">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Email Address</label>
                                                    <!-- Display the email as readonly -->
                                                    <input type="email" class="form-control" id="emailInput" name="email" placeholder="Enter your email" value="{{ $user->email }}" readonly disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="cityInput" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="cityInput" name="city"
                                                        placeholder="City" value="{{ $user->city }}" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="countryInput" class="form-label">Country</label>
                                                    <input type="text" class="form-control" id="countryInput" name="country"
                                                        placeholder="Country" value="{{ $user->country }}" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="zipcodeInput" class="form-label">Zip Code</label>
                                                    <input type="text" class="form-control" minlength="5" 
                                                        maxlength="6" id="zipcodeInput" name="zipcode" placeholder="Enter zipcode"
                                                        value="{{ $user->zip_code }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-3 pb-2">
                                                    <label for="exampleFormControlTextarea"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea" name="description" placeholder="Enter your description" rows="3">{{ $user->description }}</textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" class="btn btn-primary">Updates</button>
                                                    <button type="button" class="btn btn-soft-info" data-bs-toggle="modal" data-bs-target="#cancelModal">Cancel</button>
                                                    <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="cancelModalLabel">Cancel Profile Edit</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to cancel editing your profile?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                                    <a href="{{ route('profile') }}" class="btn btn-primary">Yes, cancel</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane" id="changePassword" role="tabpanel">
                                    <form action="{{ route('update.password') }}" method="POST">
                                        @csrf
                                        <div class="row g-2">
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                    <div class="position-relative">
                                                        <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
                                                            name="current_password" id="oldpasswordInput" placeholder="Enter current password">
                                                        <i class="ri-eye-line password-toggle" data-target="oldpasswordInput"></i>
                                                    </div>
                                                    @error('current_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="newpasswordInput" class="form-label">New Password*</label>
                                                    <div class="position-relative">
                                                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" 
                                                            name="new_password" id="newpasswordInput" placeholder="Enter new password">
                                                        <i class="ri-eye-line password-toggle" data-target="newpasswordInput"></i>
                                                    </div>
                                                    @error('new_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                                    <div class="position-relative">
                                                        <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" 
                                                            name="new_password_confirmation" id="confirmpasswordInput" placeholder="Confirm password">
                                                        <i class="ri-eye-line password-toggle" data-target="confirmpasswordInput"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-info">Change Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end tab-pane-->
                                
                                <div class="tab-pane" id="privacy" role="tabpanel">
                                    <div>
                                        <h5 class="card-title text-decoration-underline mb-3">Delete This Account:</h5>
                                        <p class="text-muted">Warning: This action cannot be undone. Once you delete your account, all of your data will be permanently removed.</p>
                                        <form action="{{ route('delete.account') }}" method="POST" id="deleteAccountForm">
                                            @csrf
                                            <div>
                                                <label for="delete_password" class="form-label">Please enter your password to confirm:</label>
                                                <div class="position-relative" style="max-width: 265px;">
                                                    <input type="password" class="form-control @error('delete_password') is-invalid @enderror" 
                                                        id="delete_password" name="delete_password" 
                                                        placeholder="Enter your password">
                                                    <i class="ri-eye-line password-toggle" data-target="delete_password"></i>
                                                    @error('delete_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="hstack gap-2 mt-3">
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                                                    Delete Account
                                                </button>
                                                <button type="button" class="btn btn-light">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div><!-- End Page-content -->

    <style>
        .position-relative {
            position: relative;
        }
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
        .password-toggle:hover {
            color: #000;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggles = document.querySelectorAll('.password-toggle');
            
            toggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const passwordInput = document.getElementById(targetId);
                    
                    // Toggle password visibility
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        this.classList.remove('ri-eye-line');
                        this.classList.add('ri-eye-off-line');
                    } else {
                        passwordInput.type = 'password';
                        this.classList.remove('ri-eye-off-line');
                        this.classList.add('ri-eye-line');
                    }
                });
            });
        });
    </script>

    <!-- Delete Account Confirmation Modal -->
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAccountModalLabel">Confirm Account Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete your account? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteAccountForm').submit();">
                        Yes, Delete My Account
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
