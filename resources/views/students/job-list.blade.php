@extends('layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Jobs</h4>

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
                            <form>
                                <div class="row g-3">
                                    <div class="col-xxl-4 col-sm-12">
                                        <div class="search-box">
                                            <input type="text" class="form-control search bg-light border-light"
                                                id="searchJob" autocomplete="off"
                                                placeholder="Search for jobs or companies...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-4 col-sm-12">
                                        <div class="search-box">
                                            <input type="text" class="form-control search bg-light border-light"
                                                id="searchLocation" autocomplete="off"
                                                placeholder="Search for locations...">
                                            <i class="ri-map-pin-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-2 col-sm-4">
                                        <div class="input-light">
                                            <select class="form-control" data-choices data-choices-search-false
                                                name="choices-idType" id="idType">
                                                <option value="all" selected>All</option>
                                                <option value="Full Time">Full Time</option>
                                                <option value="Part Time">Part Time</option>
                                                <option value="Intership">Intership</option>
                                                <option value="Freelance">Freelance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->


                                    <div class="col-xxl-1 col-sm-4">
                                        <button type="button" class="btn btn-secondary w-100" onclick="filterData();">
                                            <i class="ri-equalizer-fill me-1 align-bottom"></i> Filters
                                        </button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <p class="text-muted fs-14 mb-0">Result: <span id="total-result"></span></p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="text-muted fs-14 dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    All View
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row" id="job-list">
                @forelse ($jobs as $job)
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-secondary h-90">
                            <div class="card-body">
                                <div class="avatar-sm mb-4">
                                    <div class="avatar-title bg-light rounded">
                                        <img src="{{ $job->user->company_logo ?? asset('assets/images/companies/img-1.png') }}"
                                            alt="" class="avatar-xxs">
                                    </div>
                                </div>
                                <a href="#!">
                                    <h5 class="text-light">{{ $job->title }}</h5>
                                </a>
                                <p class="text-light">{{ $job->user->company_name ?? 'Company Name' }}</p>
                                <div class="d-flex gap-4 mb-3">
                                    <div class="text-light">
                                        <i class="ri-map-pin-2-line text-light me-1 align-bottom"></i>
                                        {{ $job->location ?? 'Location' }}
                                    </div>
                                    <div class="text-light">
                                        <i class="ri-time-line text-light me-1 align-bottom"></i>
                                        {{ $job->created_at->format('d M, Y') }}
                                    </div>
                                </div>
                                <p class="text-light">{{ Str::limit($job->job_description, 100) }}</p>
                                <div class="hstack gap-2">
                                    <span class="badge bg-success text-light">
                                        {{ ucfirst($job->employment_type) }}
                                    </span>
                                    @if($job->salary_min && $job->salary_max)
                                        <span class="badge bg-primary-subtle text-light">
                                            RM {{ number_format($job->salary_min) }} - RM {{ number_format($job->salary_max) }}
                                        </span>
                                    @endif
                                </div>
                                <div class="mt-4 hstack gap-2">
                                    {{-- <a href="#!" class="btn btn-primary w-100">Apply Job</a> --}}
                                    <a href="{{ route('students.jobpreview', $job->id) }}" 
                                       class="btn btn-success w-100">Overview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center">
                            <p class="text-muted">No jobs found</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="row g-0 justify-content-end mb-4">
                <div class="col-sm-6">
                    {{-- {{ $jobs->links('vendor.pagination.bootstrap-5') }} --}}
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <script>
        function filterData() {
            // Get filter values
            const searchJob = document.getElementById('searchJob').value.toLowerCase();
            const searchLocation = document.getElementById('searchLocation').value.toLowerCase();
            const employmentType = document.getElementById('idType').value;
        
            // Make AJAX request with the correct URL
            fetch(`/students/jobs/filter?search=${encodeURIComponent(searchJob)}&location=${encodeURIComponent(searchLocation)}&type=${encodeURIComponent(employmentType)}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Update total results count
                    document.getElementById('total-result').textContent = `${data.length} Jobs`;
        
                    // Update the job list
                    const jobList = document.getElementById('job-list');
                    jobList.innerHTML = ''; // Clear current list
        
                    if (data.length === 0) {
                        jobList.innerHTML = `
                            <div class="col-12">
                                <div class="text-center">
                                    <p class="text-muted">No jobs found</p>
                                </div>
                            </div>`;
                        return;
                    }
        
                    // Render jobs
                    data.forEach(job => {
                        const companyLogo = job.user?.company_logo || '{{ asset("assets/images/companies/img-1.png") }}';
                        const companyName = job.user?.company_name || 'Company Name';
                        const location = job.location || 'Location';
                        const createdDate = new Date(job.created_at).toLocaleDateString('en-US', { day: '2-digit', month: 'short', year: 'numeric' });
                        
                        jobList.innerHTML += `
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="avatar-sm mb-4">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="${companyLogo}" alt="" class="avatar-xxs">
                                            </div>
                                        </div>
                                        <a href="#!">
                                            <h5>${job.title}</h5>
                                        </a>
                                        <p class="text-muted">${companyName}</p>
                                        <div class="d-flex gap-4 mb-3">
                                            <div>
                                                <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                ${location}
                                            </div>
                                            <div>
                                                <i class="ri-time-line text-primary me-1 align-bottom"></i>
                                                ${createdDate}
                                            </div>
                                        </div>
                                        <p class="text-muted">${job.job_description.substring(0, 100)}...</p>
                                        <div class="hstack gap-2">
                                            <span class="badge bg-success-subtle text-success">
                                                ${job.employment_type.charAt(0).toUpperCase() + job.employment_type.slice(1)}
                                            </span>
                                            ${job.salary_min && job.salary_max ? `
                                                <span class="badge bg-primary-subtle text-primary">
                                                    $${Number(job.salary_min).toLocaleString()} - $${Number(job.salary_max).toLocaleString()}
                                                </span>
                                            ` : ''}
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" class="btn btn-soft-primary w-100">Apply Job</a>
                                            <a href="{{ url('/students/jobs/') }}/${job.id}" class="btn btn-soft-success w-100">Overview</a>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    const jobList = document.getElementById('job-list');
                    jobList.innerHTML = `
                        <div class="col-12">
                            <div class="text-center">
                                <p class="text-muted">Error loading jobs. Please try again.</p>
                            </div>
                        </div>`;
                });
        }
        </script>
@endsection

