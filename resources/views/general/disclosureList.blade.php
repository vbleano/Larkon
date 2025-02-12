@extends('layouts.vertical', ['title' => 'Case Monitoring'])

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="d-flex card-header justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">Case List</h4>
                </div>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                        This Month
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Download</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Export</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Import</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>Disclosure Id</th>
                                <th>Created at</th>
                                <th>Primary Inventor</th>
                                <th>Reference Title</th>
                                <th>TTO</th>
                                <th>IP Status</th>
                                <th>TRL</th>
                                <th>Technology Classification</th>
                                <th>BD Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($disclosures as $disclosure)
                            <tr>
                                <td>
                                     {{$disclosure->discId}}
                                </td>
                                <td>{{$disclosure->Month_Submitted}} {{$disclosure->Date_Submitted}} {{$disclosure->Year_Submitted}}</td>
                                <td>
                                    <a href="#!" class="link-primary fw-medium">Gail C. Anderson</a>
                                </td>
                                <td> {{$disclosure->Disclosure_Title}}</td>
                                <td> KLO</td>
                                <td> <span class="badge bg-light text-dark  px-2 py-1 fs-13">{{$disclosure->Status}}</span></td>
                                <td> 4</td>
                                <td> -</td>
                                <td> <span class="badge border border-secondary text-secondary  px-2 py-1 fs-13">Looking for Partners</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <div class="card-footer border-top">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>

@endsection

