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
                                                placeholder="Search for jobs or companies..."
                                                onkeyup="filterData()">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-4 col-sm-12">
                                        <div class="search-box">
                                            <input type="text" class="form-control search bg-light border-light"
                                                id="searchLocation" autocomplete="off"
                                                placeholder="Search for locations..."
                                                onkeyup="filterData()">
                                            <i class="ri-map-pin-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-4">
                                        <div class="input-light">
                                            <select class="form-control" data-choices data-choices-search-false
                                                name="choices-idType" id="idType" onchange="filterData()">
                                                <option value="">All</option>
                                                <option value="full-time">Full Time</option>
                                                <option value="part-time">Part Time</option>
                                                <option value="contract">Contract</option>
                                                <option value="freelance">Freelance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-1 col-sm-4">
                                        <button type="button" class="btn btn-secondary w-100" onclick="resetFilters();">
                                            <i class="ri-refresh-line me-1 align-bottom"></i> Reset
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
                        {{-- <div class="flex-shrink-0">
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
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row" id="job-list">
                @forelse ($jobs as $job)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card bg-secondary h-100 shadow-sm hover-shadow">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="avatar-sm me-3">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="{{ $job->user->company_logo ?? asset('assets/images/companies/img-1.png') }}"
                                                alt="" class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-light mb-1 fw-medium">{{ $job->user->company_name ?? 'Company Name' }}</p>
                                        <div class="d-flex text-light small">
                                            <i class="ri-time-line me-1"></i>
                                            {{ $job->created_at->format('d M, Y') }}
                                        </div>
                                    </div>
                                </div>
                                
                                <h5 class="text-light mb-3">{{ $job->title }}</h5>
                                
                                <div class="text-light mb-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ri-map-pin-2-line me-2"></i>
                                        {{ $job->location ?? 'Location' }}
                                    </div>
                                </div>

                                <p class="text-light flex-grow-1">{{ Str::limit($job->job_description, 100) }}</p>
                                
                                <div class="border-top pt-3 mt-auto">
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="badge bg-success">
                                            {{ ucfirst($job->employment_type) }}
                                        </span>
                                        @if($job->salary_min && $job->salary_max)
                                            <span class="badge bg-primary">
                                                RM {{ number_format($job->salary_min) }} - RM {{ number_format($job->salary_max) }}
                                            </span>
                                        @endif
                                    </div>
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
        // Modify the base URL generation to use the correct parameter name 'jobPosting'
        const jobPreviewBaseUrl = "{{ route('students.jobpreview', ['jobPosting' => 'JOBID']) }}".replace('/JOBID', '');

        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        function filterData() {
            console.log('filterData called');

            // Show loading state
            const jobList = document.getElementById('job-list');
            jobList.innerHTML = `
                <div class="col-12">
                    <div class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>`;

            // Get filter values
            const searchJob = document.getElementById('searchJob').value.toLowerCase();
            const searchLocation = document.getElementById('searchLocation').value.toLowerCase();
            const employmentType = document.getElementById('idType').value;

            console.log('Filter values:', { searchJob, searchLocation, employmentType });

            // Make AJAX request
            const url = `/students/jobs/filter?search=${encodeURIComponent(searchJob)}&location=${encodeURIComponent(searchLocation)}${employmentType ? `&type=${encodeURIComponent(employmentType)}` : ''}`;
            
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Filter jobs with status 'open'
                    const openJobs = data.filter(job => job.status === 'open');

                    // Update total results count
                    document.getElementById('total-result').textContent = `${openJobs.length} Jobs`;
        
                    // Update the job list
                    jobList.innerHTML = '';
        
                    if (openJobs.length === 0) {
                        jobList.innerHTML = `
                            <div class="col-12">
                                <div class="text-center">
                                    <p class="text-muted">No jobs found</p>
                                </div>
                            </div>`;
                        return;
                    }
        
                    // Render jobs
                    openJobs.forEach(job => {
                        const companyLogo = job.user?.company_logo || '{{ asset("assets/images/companies/img-1.png") }}';
                        const companyName = job.user?.company_name || 'Company Name';
                        const location = job.location || 'Location';
                        const createdDate = new Date(job.created_at).toLocaleDateString('en-US', { day: '2-digit', month: 'short', year: 'numeric' });
                        
                        // Format employment type for display
                        const displayEmploymentType = job.employment_type
                            .split('_')
                            .map(word => word.charAt(0).toUpperCase() + word.slice(1))
                            .join(' ');
                        
                        jobList.innerHTML += `
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card bg-secondary h-100 shadow-sm hover-shadow">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="avatar-sm me-3">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="${companyLogo}" alt="" class="avatar-xxs">
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-light mb-1 fw-medium">${companyName}</p>
                                                <div class="d-flex text-light small">
                                                    <i class="ri-time-line me-1"></i>
                                                    ${createdDate}
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <h5 class="text-light mb-3">${job.title}</h5>
                                        
                                        <div class="text-light mb-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="ri-map-pin-2-line me-2"></i>
                                                ${location}
                                            </div>
                                        </div>

                                        <p class="text-light flex-grow-1">${job.job_description.substring(0, 100)}...</p>
                                        
                                        <div class="border-top pt-3 mt-auto">
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="badge bg-success">
                                                    ${displayEmploymentType}
                                                </span>
                                                ${job.salary_min && job.salary_max ? `
                                                    <span class="badge bg-primary">
                                                        RM ${Number(job.salary_min).toLocaleString()} - RM ${Number(job.salary_max).toLocaleString()}
                                                    </span>
                                                ` : ''}
                                            </div>
                                            <a href="${jobPreviewBaseUrl}/${job.id}" class="btn btn-success w-100">Overview</a>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    jobList.innerHTML = `
                        <div class="col-12">
                            <div class="text-center">
                                <p class="text-muted">Error loading jobs. Please try again.</p>
                            </div>
                        </div>`;
                });
        }

        // Initial load
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Page loaded');
            filterData();
        });

        // Make sure we're using the debounced version for the search inputs
        const debouncedFilterData = debounce(filterData, 300);

        // Add event listeners
        document.getElementById('searchJob').addEventListener('input', debouncedFilterData);
        document.getElementById('searchLocation').addEventListener('input', debouncedFilterData);
        document.getElementById('idType').addEventListener('change', filterData);

        function resetFilters() {
            // Reset input fields
            document.getElementById('searchJob').value = '';
            document.getElementById('searchLocation').value = '';
            
            // Reset Choices.js select element
            const selectElement = document.getElementById('idType');
            const choices = selectElement.choices;
            if (choices) {
                choices.setChoiceByValue(''); // Set to default "All" option
            } else {
                selectElement.value = '';
            }
            
            // Show loading state
            const jobList = document.getElementById('job-list');
            jobList.innerHTML = `
                <div class="col-12">
                    <div class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>`;

            // Make a fresh request to get all jobs
            fetch('/students/jobs/filter')
                .then(response => response.json())
                .then(data => {
                    // Filter jobs with status 'open'
                    const openJobs = data.filter(job => job.status === 'open');

                    // Update total results count
                    document.getElementById('total-result').textContent = `${openJobs.length} Jobs`;
                    
                    // Update the job list
                    jobList.innerHTML = '';
                    
                    if (openJobs.length === 0) {
                        jobList.innerHTML = `
                            <div class="col-12">
                                <div class="text-center">
                                    <p class="text-muted">No jobs found</p>
                                </div>
                            </div>`;
                        return;
                    }
                    
                    // Render all open jobs
                    openJobs.forEach(job => {
                        const companyLogo = job.user?.company_logo || '{{ asset("assets/images/companies/img-1.png") }}';
                        const companyName = job.user?.company_name || 'Company Name';
                        const location = job.location || 'Location';
                        const createdDate = new Date(job.created_at).toLocaleDateString('en-US', { day: '2-digit', month: 'short', year: 'numeric' });
                        
                        const displayEmploymentType = job.employment_type
                            .split('_')
                            .map(word => word.charAt(0).toUpperCase() + word.slice(1))
                            .join(' ');
                        
                        jobList.innerHTML += `
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card bg-secondary h-100 shadow-sm hover-shadow">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="avatar-sm me-3">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="${companyLogo}" alt="" class="avatar-xxs">
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-light mb-1 fw-medium">${companyName}</p>
                                                <div class="d-flex text-light small">
                                                    <i class="ri-time-line me-1"></i>
                                                    ${createdDate}
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <h5 class="text-light mb-3">${job.title}</h5>
                                        
                                        <div class="text-light mb-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="ri-map-pin-2-line me-2"></i>
                                                ${location}
                                            </div>
                                        </div>

                                        <p class="text-light flex-grow-1">${job.job_description.substring(0, 100)}...</p>
                                        
                                        <div class="border-top pt-3 mt-auto">
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="badge bg-success">
                                                    ${displayEmploymentType}
                                                </span>
                                                ${job.salary_min && job.salary_max ? `
                                                    <span class="badge bg-primary">
                                                        RM ${Number(job.salary_min).toLocaleString()} - RM ${Number(job.salary_max).toLocaleString()}
                                                    </span>
                                                ` : ''}
                                            </div>
                                            <a href="${jobPreviewBaseUrl}/${job.id}" class="btn btn-success w-100">Overview</a>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    jobList.innerHTML = `
                        <div class="col-12">
                            <div class="text-center">
                                <p class="text-muted">Error loading jobs. Please try again.</p>
                            </div>
                        </div>`;
                });
        }
    </script>

    <style>
    .hover-shadow {
        transition: all 0.3s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3) !important;
    }
    .card {
        border: none;
        border-radius: 10px;
    }
    .avatar-sm {
        width: 2.5rem;
        height: 2.5rem;
    }
    </style>
@endsection

