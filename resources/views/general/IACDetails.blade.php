@extends('layouts.vertical', ['title' => 'Inventor/Author/Creator Profile'])

@section('content')

<div class="row">
    <div class="col-xl-7 col-lg-3">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="bg-primary profile-bg rounded-top p-6 position-relative mx-n3 mt-n3"></div>
        
                <div class="mt-5 d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <h2 class="mb-1">{{$IAC->First_Name}} {{$IAC->Middle_Name}} {{$IAC->Last_Name}}</h2>
                        <p class="mb-0">{{$IAC->Nature_of_Contribution}}</p>
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2 my-lg-0">
                        <a href="#!" class="btn btn-info"><i class='bx bx-message-dots'></i> Edit Profile</a>
                    </div>
                </div>
                <div class="row mt-3 gy-2">
                    <div class="col-lg-3 col-4">
                        <div class="d-flex align-items-center gap-2 border-end">
                            <div class="">
                                <iconify-icon icon="solar:clock-circle-bold-duotone" class="fs-28 text-primary"></iconify-icon>
                            </div>
                            <div>
                                <h5 class="mb-1">3+ Years Job</h5>
                                <p class="mb-0">Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-4">
                        <div class="d-flex align-items-center gap-2 border-end">
                            <div class="">
                                <iconify-icon icon="solar:cup-star-bold-duotone" class="fs-28 text-primary"></iconify-icon>
                            </div>
                            <div>
                                <h5 class="mb-1">5 Certificate</h5>
                                <p class="mb-0">Achieved</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="">
                                <iconify-icon icon="solar:notebook-bold-duotone" class="fs-28 text-primary"></iconify-icon>
                            </div>
                            <div>
                                <h5 class="mb-1">2 Internship</h5>
                                <p class="mb-0">Completed</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-5 col-lg-10">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Personal Information</h4>
            </div>
            <div class="card-body">
                <div class="">
                    <div class="d-flex align-items-center gap-2 mb-2">
                    <p class="mb-0 fs-13">Country of Citizenship: <span class="text-dark fw-semibold">{{$IAC->Country_of_Citizenship}}</span></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <p class="mb-0 fs-13">Work Address: <span class="text-dark fw-semibold">{{$IAC->Work_Address}}</span></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                    <p class="mb-0 fs-13">Home Address: <span class="text-dark fw-semibold">{{$IAC->Home_Address}}</span></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">

                        <p class="mb-0 fs-13">Contact Number: <span class="text-dark fw-semibold">{{$IAC->Contact_Number}}</span></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <p class="mb-0 fs-13">Email: <a href="#!" class="text-primary fw-semibold">{{$IAC->Email_Address}}</a></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <p class="mb-0 fs-13">Gender/Sex: <a href="#!" class="text-dark fw-semibold">{{$IAC->Gender_Sex}}</a></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <p class="mb-0 fs-13">Date of Birth: <span class="text-dark fw-semibold">{{$IAC->Date_of_Birth}}</span></p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="mb-0 fs-13">Civil Status: <span class="text-dark fw-semibold">{{$IAC->Civil_Status}}</span></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <p class="mb-0 fs-13">Nationality: <a href="#!" class="text-dark fw-semibold">{{$IAC->Nationality}}</a></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <p class="mb-0 fs-13">Salutatory: <a href="#!" class="text-dark fw-semibold">{{$IAC->Salutatory}}</a></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <p class="mb-0 fs-13">Main Affiliation: <span class="text-dark fw-semibold">{{$IAC->Main_Affiliation}}</span></p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="mb-0 fs-13">Sub-Affiliation: <span class="text-dark fw-semibold">{{$IAC->Sub_Affiliation}}</span></p>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <p class="mb-0 fs-13">College/Unit: <span class="text-dark fw-semibold">{{$IAC->College_Unit}}</span></p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="mb-0 fs-13">Department Institute: <span class="text-dark fw-semibold">{{$IAC->Department_Institute}}</span></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Disclosures Filed</h4>
                <div class="card">
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
                <div class="card-footer border-top">
                <ul class="pagination pagination-rounded m-0 justify-content-end">
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="avatar bg-info d-flex align-items-center justify-content-center rounded mx-auto mb-2">
                            <iconify-icon icon="solar:cup-star-bold" class="fs-34 text-white"></iconify-icon>
                        </div>
                        <h3 class="mb-1">+12</h3>
                        <p class="mb-0 fw-semibold fs-16">Number of Disclosures</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="avatar bg-info d-flex align-items-center justify-content-center rounded mx-auto mb-2">
                            <iconify-icon icon="solar:medal-star-circle-bold-duotone" class="fs-34 text-white"></iconify-icon>
                        </div>
                        <h3 class="mb-1">+24</h3>
                        <p class="mb-0 fw-semibold fs-16">Number of Technologies</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card overflow-hidden z-1">
            <div class="card-body text-center">
                <h4 class="card-title mb-2">Share your profile</h4>
                <p class="text-muted">Now that your agency is created, go ahead and share it to start generating leads.</p>
                <img src="/images/qr-code.png" alt="" class="avatar-xl">
                <ul class="list-inline d-flex gap-1 my-3  align-items-center justify-content-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="bx bxl-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="bx bxl-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="bx bx-envelope"></i>
                        </a>
                    </li>
                </ul>
                <p class="text-muted">Copy the URL below and share it with your friends:</p>
                <p class="d-flex align-items-center border p-2 rounded-2 border-dashed bg-body text-start mb-0">https://larkon-mileage.com <a href="#!" class="ms-auto fs-4"><i class="ti ti-copy"></i></a></p>
            </div>
        </div>
    </div>
</div>



@endsection