@extends('layouts.vertical', ['title' => 'Disclosure Details'])

@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="bg-primary profile-bg rounded-top p-5 position-relative mx-n3 mt-n3">
                    
                </div>
                <div class="mt-4 pt-3">
                    <h4 class="mb-1"> Disclosure Title<i class="bx  text-success align-middle"></i></h4>
                    <div class="mt-2">
                        <p class="fs-15 mb-1 mt-1">{{$disclosure->Disclosure_Title}}</p>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="mt-2 pt-0">
                    <h4 class="mb-1"> Disclosure Description<i class="bx  text-success align-middle"></i></h4>
                    <div class="mt-2">
                        <p class="fs-15 mb-1 mt-1">{{$disclosure->Short_Description}}</p>
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="card-title">Disclosure Details</h4>
                </div>
                <div>
                    <span class="badge bg-success-subtle text-success px-3 py-2">ACTIVE APPLICATION</span>
                </div>
            </div>
            <div class="card-body py-2">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">Disclosure ID : </p>
                                </td>
                                <td class="text-dark fw-medium px-0">#AC-278699</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark"> Date Submitted : </p>
                                </td>
                                <td class="text-dark fw-medium px-0">{{$disclosure->Year_Submitted}}, {{$disclosure->Month_Submitted}} {{$disclosure->Date_Submitted}}</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark"> Plan to Commercialize : </p>
                                </td>
                                <td class="text-dark fw-medium px-0">{{$disclosure->Plan_to_Commercialize}}</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark"> Funding Sources : </p>
                                </td>
                                <td class="text-dark fw-medium px-0">{{$disclosure->Funding_Sources}}</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark"> University Facilities Used : </p>
                                </td>
                                <td class="text-dark fw-medium px-0">{{$disclosure->University_Facilities}}</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark"> Implementing Agency : </p>
                                </td>
                                <td class="text-dark fw-medium px-0">{{$disclosure->University_Facilities}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header border-bottom border-dashed">
                <div class="d-flex align-items-center gap-2">
                    <div class="d-block">
                        <h4 class="card-title mb-1">Latest updates</h4>
                    </div>
                    <div class="ms-auto">
                        <a href="#!" class="btn btn-primary btn-sm">View All</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex p-2 rounded align-items-center gap-2 bg-light-subtle">
                    <div class="avatar bg-primary-subtle d-flex align-items-center justify-content-center rounded-circle">
                        <iconify-icon icon="solar:file-download-bold" class="text-primary fs-3"></iconify-icon>
                    </div>
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium">Updater Name: USER</a>
                        <p class="text-muted mb-0 fs-13">{{$IAC->updated_at}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="row">
            
        

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Inventor / Author / Creator List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th> Name </th>
                                <th> Email Address </th>
                                <th> Contact Number</th>
                                <th> Main Affiliation </th>
                                <th> Constituent University</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="/IAC/{{$IAC->IACId}}/details" class="text-body">{{$IAC->Last_Name}}, {{$IAC->First_Name}} {{$IAC->Middle_Name}}.</a> </td>
                                <td>{{$IAC->Email_Address}}</span> </td>
                                <td> {{$IAC->Contact_Number}} </td>
                                <td> {{$IAC->Main_Affiliation}}</td>
                                <td> {{$IAC->Constituent_University}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer border-top">
                <ul class="pagination pagination-rounded m-0 justify-content-end">
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Specific IP Applications</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th> Type of IP </th>
                                <th> Date Applied </th>
                                <th> Current IP Status</th>
                                <th> Current BD Status </th>
                                <th> Last Updated</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body">{{$IAC->Last_Name}}, {{$IAC->First_Name}} {{$IAC->Middle_Name}}.</a> </td>
                                <td>{{$IAC->Email_Address}}</span> </td>
                                <td> {{$IAC->Contact_Number}} </td>
                                <td> {{$IAC->Main_Affiliation}}</td>
                                <td> {{$IAC->Constituent_University}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="/images/user-profile.png" alt="" class="img-fluid">
                        <h4><i class='bx bxs-coin-stack text-primary'></i> 3,764 <span class="text-muted fw-medium">Pesos Earned</span> </h4>
                        <p class="mb-0">Collect more for more Trusty Funds.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="avatar bg-light d-flex align-items-center justify-content-center rounded-circle">
                                <i class="bx bx-down-arrow-alt fs-30"></i>
                            </div>
                            <div class="d-block">
                                <h4 class="text-dark fw-medium mb-1">Payment Arrived</h4>
                                <p class="mb-0 text-muted">23 min ago</p>
                            </div>
                            <div class="ms-auto">
                                <h4 class="text-dark fw-medium mb-1">$ 1,340</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-block">
                                <h4 class="text-dark fw-medium mb-1">Company Name</h4>
                                <p class="mb-0 text-muted">Contact Person</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer border-top gap-1 hstack">
                        <a href="#!" class="btn btn-soft-dark d-inline-flex align-items-center justify-content-center rounded avatar-sm"><i class="bx bx-plus fs-18"></i></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
