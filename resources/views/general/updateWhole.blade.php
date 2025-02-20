@extends('layouts.vertical', ['title' => 'Update Disclosure Profile'])
@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card overflow-hidden" style="background: url('/images/small/img-2.jpg'); ">
            <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-dark opacity-75"></div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center   ">
                        <h3 class="text-white">Edit Disclosure Form</h3>
                        <p class="text-white-50">Our code of conduct and your pledge to be an upstanding member of the product</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h3 class="mb-0 ms-2">Basic Disclosure Form</h3>
                </div>
                <form action="/update/{{$disclosure->discID}}" method="POST">
                    @csrf
                <div class="tab-content mb-0">
                    <div class="tab-pane active show" id="basictab1" role="tabpanel">
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <div>
                                    <label for="choices-text-remove-button" class="form-label text-muted">Current Status:</label>
                                    <td><span class="badge bg-green text-light mx-2 px-2 py-1 fs-13">DISCLOSURE SUBMITTED</span></td>
                                </div>
                            </div>
                        </div> <!-- end col -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicUser" class="form-label">Disclosure Title</label>
                                            <input id="DisclosureTitle" type="text" name="Disclosure_Title" class="form-control" placeholder="{{$disclosure->Disclosure_Title}}">
                                        </div>
                                        </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicUser" class="form-label">Type of IP</label>
                                                    <div class="w-80 mb-3">
                                                        <select name="Type_of_IP" class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button">
                                                            <option value="1">Patent</option>
                                                            <option value="2">Utility Model</option>
                                                            <option value="3">Industrial Design</option>
                                                            <option value="4">Trademark</option>
                                                            <option value="5">Copyright</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Disclosure Description</label>
                                                    <textarea name="DisclosureDesc" class="form-control" id="example-textarea" rows="5" placeholder="{{$disclosure->Short_Description}}"></textarea>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div>
                                                        <label for="choices-text-remove-button" class="form-label text-muted">Funding Sources</label>
                                                        <input name="Funding_Sources" class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div>
                                                        <label for="choices-text-remove-button" class="form-label text-muted">University Facilities and Equipments Used</label>
                                                        <input name="University_Facilities" class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text"/>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div>
                                                        <label for="choices-text-remove-button" class="form-label text-muted">Implementing Agency</label>
                                                        <input name="Implementing_Agency" class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-check form-check-inline">
                                                        <input name="Plan_To_Commercialize" type="checkbox" class="form-check-input" id="customCheck3">
                                                        <label class="form-check-label" for="customCheck3">Check this if you plan to Commercialize</label>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <div class="mb-3">
                                                        <label class="form-check-label" for="customCheck3">Upload MOA/ Research Agreements/ Research Funding Agreements</label>
                                                    </div>
                                                    <div class="dropzone">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple="multiple">
                                                        </div>
                                                        <div class="dz-message needsclick">
                                                            <i class="h1 bx bx-cloud-upload"></i>
                                                            <h3>Drop files here or click to upload.</h3>
                                                            <span class="text-muted fs-13">
                                                                Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div><!-- end tab-pane -->
                                    <div class="mb-3">
                                        <div class="submit">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                SUBMIT APPLICATION
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Submission</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure you like to submit your Update?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" href="javascript:void(0);" class="btn btn-primary">
                                                                    SUBMIT UPDATES<i ></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </p>    
            </div>
        </div>
    </div>
</div>


@endsection
