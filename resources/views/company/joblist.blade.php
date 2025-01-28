@extends('layouts.master')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Job List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Jobs</a></li>
                                <li class="breadcrumb-item active">Search</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body bg-soft-light">
                            <div class="d-flex align-items-center">
                                <h6 class="card-title mb-0 flex-grow-1">Search Jobs</h6>
                                <div class="flex-shrink-0">
                                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#CreateJobModal"><i class="ri-add-line align-bottom me-1"></i> Create New Job</button>
                                </div>
                            </div>  

                            <div class="row mt-0 gy-3">
                                <div class="col-xxl-10 col-md-6">
                                    <div class="search-box">
                                        <input type="text" class="form-control search bg-light border-light" id="searchJob" autocomplete="off" placeholder="Search for jobs or companies..." >
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-none" id="found-job-alert">
                                    <div class="alert alert-success mb-0 text-center" role="alert">
                                        <strong id="total-result">253</strong> jobs found
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12">
                    <!-- Check if there are job postings -->
                    @if($jobs->isNotEmpty())
                        <div id="job-list">
                            @foreach($jobs as $job)
                                <div class="card job-card mb-3 shadow-sm hover-shadow">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h4 class="card-title text-primary mb-3">{{ $job->title }}</h4>
                                            <div>
                                                <span class="badge bg-{{ $job->status === 'open' ? 'success' : 'warning' }} me-2">
                                                    {{ ucfirst($job->status) }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-text">
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <p class="mb-2">
                                                        <i class="ri-map-pin-line me-2 text-muted"></i>
                                                        <span class="text-dark">{{ $job->location }}</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="mb-2">
                                                        <i class="ri-briefcase-line me-2 text-muted"></i>
                                                        <span class="text-dark">{{ ucfirst($job->employment_type) }}</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="mb-2">
                                                        <i class="ri-money-dollar-circle-line me-2 text-muted"></i>
                                                        <span class="text-dark">RM{{ number_format($job->salary_min) }} - RM{{ number_format($job->salary_max) }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="text-muted mb-3">{{ Str::limit($job->job_description, 200) }}</p>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('job-postings.edit', $job->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="ri-edit-line align-bottom"></i> Edit
                                                </a>
                                                <a href="{{ route('job-postings.show', $job->id) }}" class="btn btn-info btn-sm">
                                                    <i class="ri-eye-line align-bottom"></i> View Details
                                                </a>
                                                <a href="{{ route('company.candidate')}}" class="btn btn-success btn-sm">
                                                    <i class="ri-team-line align-bottom"></i> View Applicants 
                                                    <span class="badge bg-success ms-1">{{ $job->applications->count() }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="alert alert-warning text-center mb-0" role="alert">
                                    <i class="ri-information-line me-2"></i>
                                    No job postings available for this company.
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- end job list -->

                    <div class="row g-0 justify-content-end mb-4" id="pagination-element">
                        <!-- end col -->
                        <div class="col-sm-6">
                            <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                                <div class="page-item">
                                    <a href="javascript:void(0);" class="page-link" id="page-prev">Previous</a>
                                </div>
                                <span id="page-num" class="pagination"></span>
                                <div class="page-item">
                                    <a href="javascript:void(0);" class="page-link" id="page-next">Next</a>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                </div><!--end col-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <div class="modal fade" id="CreateJobModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <form id="createjob-form" autocomplete="off" class="needs-validation" novalidate>
                        <div class="modal-body">
                            <input type="hidden" id="id-field" />
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="px-1 pt-1">
                                        <div class="modal-team-cover position-relative mb-0 mt-n4 mx-n4 rounded-top overflow-hidden">
                                            <img src="assets/images/small/img-9.jpg" alt="" id="modal-cover-img" class="img-fluid">

                                            <div class="d-flex position-absolute start-0 end-0 top-0 p-3">
                                                <div class="flex-grow-1">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">Create New Job</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <label for="cover-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Select Cover Image">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                        <i class="ri-image-fill"></i>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <input class="form-control d-none" value="" id="cover-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                        </div>
                                                        <button type="button" class="btn-close btn-close-white"  id="close-jobListModal" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mb-4 mt-n5 pt-2">
                                        <div class="position-relative d-inline-block">
                                            <div class="position-absolute bottom-0 end-0">
                                                <label for="companylogo-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                    <div class="avatar-xs cursor-pointer">
                                                        <div class="avatar-title bg-light border rounded-circle text-muted">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                                <input class="form-control d-none" value="" id="companylogo-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                            </div>
                                            <div class="avatar-lg p-1">
                                                <div class="avatar-title bg-light rounded-circle">
                                                    <img src="assets/images/users/multi-user.jpg" id="companylogo-img" class="avatar-md rounded-circle object-cover" />
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="fs-13 mt-3">Company Logo</h5>
                                    </div>
                                    <div>
                                        <label for="jobtitle-field" class="form-label">Job Title</label>
                                        <input type="text" id="jobtitle-field" class="form-control" placeholder="Enter job title" required />
                                        <div class="invalid-feedback">Please enter a job title.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="companyname-field" class="form-label">Company Name</label>
                                        <input type="text" id="companyname-field" class="form-control" placeholder="Enter company name" required />
                                        <div class="invalid-feedback">Please enter a company name.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job_type-field" class="form-label">Job Type</label>
                                        <select class="form-select" id="job_type-field" required>
                                            <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Freelance">Freelance</option>
                                            <option value="Intership">Intership</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a job type.</div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <label for="experience-field" class="form-label">Experience</label>
                                        <input type="text" id="experience-field" class="form-control" placeholder="Enter experience" required />
                                        <div class="invalid-feedback">Please enter a job experience.</div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <label for="location-field" class="form-label">Location</label>
                                        <input type="text" id="location-field" class="form-control" placeholder="Enter location" required />
                                        <div class="invalid-feedback">Please enter a location.</div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <label for="Salary-field" class="form-label">Salary</label>
                                        <input type="number" id="Salary-field" class="form-control" placeholder="Enter salary" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="website-field" class="form-label">Tags</label>
                                        <input class="form-control" id="taginput-choices" data-choices data-choices-text-unique-true type="text" value="Design, Remote" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="description-field" class="form-label">Description</label>
                                        <textarea class="form-control" id="description-field" rows="3" placeholder="Enter description" required></textarea>
                                        <div class="invalid-feedback">Please enter a description.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn">Add Company</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end add modal-->

@endsection