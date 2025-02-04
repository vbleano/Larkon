@extends('layouts.vertical', ['title' => 'DASHBOARD'])

@section('content')
<div class="row">
    <div class="col-md-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-primary rounded">
                            <i class="bx bx-layer avatar-title fs-24 text-white"></i>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-12 text-end">
                        <h1 class="text-dark mt-1 mb-0">9, 526</h1>    
                        <h3 class="text-muted mb-0 text-truncate">Active Case Disclosures</h3>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
    <div class="col-md-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-success rounded">
                            <i class="bx bx-award avatar-title fs-24 text-white"></i>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-12 text-end">
                        <h1 class="text-dark mt-1 mb-0">9, 526</h1>    
                        <h3 class="text-muted mb-0 text-truncate">Active Intellectual Property Rights</h3>
                        
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> 
<div class="row">
    <div class="col-md-3">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-soft-primary rounded">
                            <iconify-icon icon="solar:cart-5-bold-duotone" class="avatar-title fs-32 text-primary"></iconify-icon>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-12 text-end">
                        <h1 class="text-dark mt-1 mb-0">123</h3>
                        <h3 class="text-muted mb-0 text-truncate">Registered Patents</h3>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div> <!-- end card body -->
            <div class="card-footer py-2 bg-light bg-opacity-50">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 2.3%</span>
                        <span class="text-muted ms-1 fs-12">Last Week</span>
                    </div>
                    <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->

    <div class="col-md-3">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-soft-primary rounded">
                            <i class="bx bx-award avatar-title fs-24 text-primary"></i>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-12 text-end">
                        <h1 class="text-dark mt-1 mb-0">123</h3>
                        <h3 class="text-muted mb-0 text-truncate">Registered Utility Models</h3>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div> <!-- end card body -->
            <div class="card-footer py-2 bg-light bg-opacity-50">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 8.1%</span>
                        <span class="text-muted ms-1 fs-12">Last Month</span>
                    </div>
                    <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->

    <div class="col-md-3">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-soft-primary rounded">
                            <i class="bx bxs-backpack avatar-title fs-24 text-primary"></i>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-12 text-end">
                        <h1 class="text-dark mt-1 mb-0">123</h3>
                        <h3 class="text-muted mb-0 text-truncate">Registered Trademarks</h3>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div> <!-- end card body -->
            <div class="card-footer py-2 bg-light bg-opacity-50">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 0.3%</span>
                        <span class="text-muted ms-1 fs-12">Last Month</span>
                    </div>
                    <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->

    <div class="col-md-3">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-soft-primary rounded">
                            <i class="bx bx-dollar-circle avatar-title text-primary fs-24"></i>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-12 text-end">
                        <h1 class="text-dark mt-1 mb-0">123</h3>
                        <h3 class="text-muted mb-0 text-truncate">Registered Copyrights</h3>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div> <!-- end card body -->
            <div class="card-footer py-2 bg-light bg-opacity-50">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 10.6%</span>
                        <span class="text-muted ms-1 fs-12">Last Month</span>
                    </div>
                    <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="p-3">
                            <h5 class="card-title">SUMMARY OF IP FILINGS</h5>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3 anchor" id="gradient">Gradient Donut Chart</h4>
                                    <div dir="ltr">
                                        <div id="gradient-donut" class="apex-charts"></div>
                                    </div>
                                </div>
                                <!-- end card body-->
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-light shadow-none w-100">View Details</button>
                            </div> <!-- end row -->
                        </div>
                    </div> <!-- end left chart card -->
                    <div class="col-lg-8 border-start border-5">
                        <div class="p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">IP FILINGS</h4>
                                <div>
                                    <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                                    <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                                    <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                                    <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                                </div>
                            </div> <!-- end card-title-->

                            <div class="alert alert-info mt-3 text text-truncate mb-0" role="alert">
                                We regret to inform you that our server is currently experiencing technical difficulties.
                            </div>

                            <div dir="ltr">
                                <div id="dash-performance-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div> <!-- end right chart card -->
                </div> <!-- end chart card -->
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col-->
</div> <!-- end row-->


    
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
