@extends('layouts.master')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0">
                    <div class="bg-soft-info">
                        <div class="card-body px-4 pb-4">
                            <div class="row mb-3">
                                <div class="col-md">
                                    <div class="row align-items-center g-3">
                                        <div class="col-md-auto">
                                            <div class="avatar-md">
                                                <div class="avatar-title bg-white rounded-circle">
                                                    <img src="assets/images/brands/slack.png" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div>
                                                <h4 class="fw-bold">{{ $jobPosting->title }}</h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div><i class="ri-building-line align-bottom me-1"></i> {{ $jobPosting->user->company_name ?? 'Company Name' }}</div>
                                                    <div class="vr"></div>
                                                    <div><i class="ri-map-pin-2-line align-bottom me-1"></i> {{ $jobPosting->location }}</div>
                                                    <div class="vr"></div>
                                                    <div>Post Date : <span class="fw-medium">{{ $jobPosting->created_at->format('d M, Y') }}</span></div>
                                                    <div class="vr"></div>
                                                    <div class="badge rounded-pill bg-success fs-12">{{ ucfirst($jobPosting->employment_type) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto">
                                    <div class="hstack gap-1 flex-wrap mt-4 mt-md-0">
                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-warning fs-16">
                                            <i class="ri-star-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary fs-16">
                                            <i class="ri-share-line"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary fs-16">
                                            <i class="ri-flag-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row mt-n5">
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Job Description</h5>
                        <div class="text-muted">
                            {!! nl2br(e($jobPosting->job_description)) !!}
                        </div>
                    </div>
                </div>

                
            </div>
            <div class="col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Job Overview</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">Title</td>
                                        <td>{{ $jobPosting->title }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Company Name</td>
                                        <td>{{ $jobPosting->user->company_name ?? 'Company Name' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Location</td>
                                        <td>{{ $jobPosting->location }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Type</td>
                                        <td><span class="badge badge-soft-success">{{ ucfirst($jobPosting->employment_type) }}</span></td>
                                    </tr>
        
                                    <tr>
                                        <td class="fw-medium">Post Date</td>
                                        <td>{{ $jobPosting->created_at->format('d M, Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Salary</td>
                                        <td>RM {{ number_format($jobPosting->salary_min) }} - RM {{ number_format($jobPosting->salary_max) }}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <!--end table-->
                        </div>
                        <div class="mt-4 pt-2 hstack gap-2">
                            @if(auth()->user()->hasAppliedTo($jobPosting))
                                <button type="button" class="btn btn-secondary w-100" disabled>Already Applied</button>
                            @else
                                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#applyJobModal">Apply Now</button>
                            @endif
                            @if(auth()->user()->hasAppliedTo($jobPosting))
                                <a href="#!" class="btn btn-soft-danger btn-icon custom-toggle flex-shrink-0" data-bs-toggle="modal" data-bs-target="#progressModal">
                                    <span class="icon-on"><i class="ri-time-line align-bottom"></i></span>
                                    <span class="icon-off"><i class="ri-time-fill align-bottom"></i></span>
                                </a>
                            @endif

                            <!-- Progress Modal -->
                            <div class="modal fade" id="progressModal" tabindex="-1" aria-labelledby="progressModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="progressModalLabel">Application Progress</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <div class="form-text mb-2 fs-6">
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3">
                                                            <div class="text-center">
                                                                <button type="button" class="btn btn-sm btn-success rounded-pill mb-2" style="width: 2.5rem; height:2.5rem;">
                                                                    <i class="ri-check-line"></i>
                                                                </button>
                                                                <h6 class="mb-1 text-success">Resume Submitted</h6>
                                                                <small class="text-muted">Application received</small>
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="button" class="btn btn-sm btn-primary rounded-pill mb-2" style="width: 2.5rem; height:2.5rem;">
                                                                    <i class="ri-search-eye-line"></i>
                                                                </button>
                                                                <h6 class="mb-1 text-primary">Under Review</h6>
                                                                <small class="text-muted">Profile evaluation</small>
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="button" class="btn btn-sm btn-light rounded-pill mb-2" style="width: 2.5rem; height:2.5rem;">
                                                                    <i class="ri-flag-line"></i>
                                                                </button>
                                                                <h6 class="mb-1">Final Result</h6>
                                                                <small class="text-muted">Pending decision</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Danger Alert -->
                                                <div class="alert alert-info alert-dismissible alert-additional shadow fade show" role="alert">
                                                    <div class="alert-body">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <i class="ri-error-warning-line fs-16 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="alert-heading">Application Under Review</h5>
                                                                <p class="mb-0">Your application is currently under review by our hiring team. We will notify you as soon as a decision is made. Thank you for your patience and interest in this position.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="applyJobModal" tabindex="-1" aria-labelledby="applyJobModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="applyJobModalLabel">Apply for {{ $jobPosting->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('job.apply', $jobPosting->id) }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label fs-6">Applicant Information</label>
                                                <div class="form-text mb-2 fs-6">
                                                    <strong>Name:</strong> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}<br>
                                                    <strong>Email:</strong> {{ auth()->user()->email }}
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="resume" class="form-label">Professional Resume</label>
                                                <select class="form-select" id="resume" name="resume_id" required>
                                                    <option value="">Select your resume...</option>
                                                    @foreach(auth()->user()->resumes as $resume)
                                                        <option value="{{ $resume->id }}">{{ $resume->title }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="form-text">Please select the most relevant resume for this position</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="coverLetter" class="form-label">Cover Letter</label>
                                                <textarea class="form-control" id="coverLetter" name="cover_letter" rows="6" 
                                                    placeholder="Explain why you would be a great fit for this position..."></textarea>
                                                <div class="form-text">A well-written cover letter increases your chances of getting noticed</div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit Application</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end card-->
                {{-- <div class="card">
                    <div class="card-body">
                        <div class="avatar-sm mx-auto">
                            <div class="avatar-title bg-soft-warning rounded">
                                <img src="assets/images/companies/img-3.png" alt="" class="avatar-xxs">
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!">
                                <h5 class="mt-3">Themesbrand</h5>
                            </a>
                            <p class="text-muted">IT Department</p>
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">Company Size</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Industry Type</td>
                                        <td>Software</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Founded in</td>
                                        <td>2016</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Phone</td>
                                        <td>+(234) 12345 67890</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Email</td>
                                        <td>themesbrand@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Social media</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#!"><i class="ri-whatsapp-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!"><i class="ri-facebook-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!"><i class="ri-twitter-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!"><i class="ri-youtube-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end table-->
                        </div>
                    </div>
                </div>
                <!--end card--> --}}
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection