@extends('layouts.vertical', ['title' => 'Disclosure Creation Form'])
@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-5">
                        <form action="{{route('CreateDisclosure')}}" method="POST">
                            @csrf
                            <div id="horizontalwizard">
                                <ul class="nav nav-pills nav-justified icon-wizard form-wizard-header bg-light p-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2 active" aria-selected="true" role="tab">
                                            <iconify-icon icon="iconamoon:profile-circle-duotone" class="fs-26"></iconify-icon>
                                            Basic Disclosure Form
                                        </a><!-- end nav-link -->
                                    </li><!-- end nav-item -->
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" role="tab" tabindex="-1">
                                            <iconify-icon icon="iconamoon:profile-duotone" class="fs-26"></iconify-icon>
                                            IAC Profile
                                        </a><!-- end nav-link -->


                                    </li><!-- end nav-item -->
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                                            <iconify-icon icon="iconamoon:link-fill" class="fs-26"></iconify-icon>
                                            Type of IP
                                        </a><!-- end nav-link -->
                                    </li><!-- end nav-item -->
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                                            <iconify-icon icon="iconamoon:check-circle-1-duotone" class="fs-26"></iconify-icon>
                                            Finish
                                        </a><!-- end nav-link -->
                                    </li><!-- end nav-item -->
                                </ul>

                    <!------------------------- START DISCLOSURE FORM   ------------------------->
                                <div class="tab-content mb-0">
                                    <div class="tab-pane active show" id="basictab1" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Disclosure Form</h4>
                                        <p class="text-muted">Please fill in the form with Disclosure information</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicUser" class="form-label">Disclosure Title</label>
                                                    <input id="DisclosureTitle" type="text" name="DisclosureTitle" class="form-control" placeholder="Enter Disclosure Title">
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicUser" class="form-label">Type of IP</label>
                                                    <div class="w-80 mb-3">
                                                        <select id="Type_of_IP" name="Type_of_IP" class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                                            <option value="1" selected>Patent</option>
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
                                                    <textarea name="DisclosureDesc" class="form-control" id="example-textarea" rows="5"></textarea>
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
                                                        <input name="University_Facilities" class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
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




                                    <div class="tab-pane" id="basictab4" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <div class="avatar-md mx-auto mb-3">
                                                        <div class="avatar-title bg-primary bg-opacity-10 text-primary rounded-circle"><iconify-icon icon="iconamoon:like-duotone" class="fs-36"></iconify-icon></div>
                                                    </div>
                                                    <h3 class="mt-0">Finished !</h3>

                                                    <p class="w-75 mb-2 mx-auto">Filled Data Successfully.</p>

                                                    <div class="mb-3">
                                                        <div class="form-check d-inline-block">
                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="submit">
                                                            <button type="submit" href="javascript:void(0);" class="btn btn-primary">
                                                                SUBMIT APPLICATION<i ></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div><!-- end tab-pane -->
                    <!------------------------- END DISCLOSURE FORM   ------------------------->
                    <!---------------------------- START IAC FORM   --------------------------->
                                    <div class="tab-pane" id="basictab2" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Profile Information</h4>
                                        <p class="text-muted">Setup your profile information</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="basicCountry">Country of Citizenship</label>
                                                            <select id="basicCountry" name="Country_of_Citizenship" class="form-select">
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="United States">United States</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="China">China</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="France">France</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Albania">Albania</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="lastName">Last Name</label>
                                                            <input required type="text" id="lastName" name="Last_Name" class="form-control" placeholder="Doe">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="firstName">First Name</label>
                                                            <input required type="text" id="firstName" name="First_Name" class="form-control" placeholder="John">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="middleName">Middle Initial</label>
                                                            <input required type="text" id="middleName" name="Middle_Name" class="form-control" placeholder="Z">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="homeAddress">Home Address</label>
                                                            <input required type="text" id="homeAddress" name="Home_Address" class="form-control" placeholder="Santa Mesa Manila">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="workAddress">Work Address</label>
                                                            <input required type="text" id="workAddress" name="Work_Address" class="form-control" placeholder="Taft Avenue Ermita">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="constituentUniversity">Constituent University</label>
                                                            <input required type="text" id="constituentUniversity" name="Constituent_University" class="form-control" placeholder="UP - Manila">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="department">Department / Institute</label>
                                                            <input required type="text" id="department" name="Department_Institute" class="form-control" placeholder="TTBDO">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="collegeUnit">College Unit</label>
                                                            <input required type="text" id="collegeUnit" name="College_Unit" class="form-control" placeholder="College of Nursing">
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="salutatory">Salutatory</label>
                                                            <input required type="text" id="salutatory" name="Salutatory" class="form-control" placeholder="Job Title">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="mainAffiliation">Main Affiliation</label>
                                                            <input required type="text" id="mainAffiliation" name="Main_Affiliation" class="form-control" placeholder="Main Affiliation">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="subAffiliation">Sub Affiliation</label>
                                                            <input required type="number" id="subAffiliation" name="Sub_Affiliation" class="form-control" placeholder="Sub Affiliation">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="nature">Nature of Contribution</label>
                                                            <input required type="text" id="nature" name="Nature_of_Contribution_Role" class="form-control" placeholder="Role in the Invention">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="percent">Percentage of Contribution</label>
                                                            <input required type="text" id="percent" name="Percentage_of_Contribution" class="form-control" placeholder="Rate 1 - 100">
                                                        </div>
                                                    </div><!-- end col -->
                                                     <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="emailAddress">Email Address</label>
                                                            <input required type="email" id="emailAddress" name="Email_Address" class="form-control" placeholder="@up.edu.ph">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="phoneNumber">Phone Number</label>
                                                            <input required type="number" id="phoneNumber" name="Contact_Number" class="form-control" placeholder="09*********">
                                                        </div>
                                                    </div><!--end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="birthday">Date of Birth</label>
                                                            <input required type="date" id="birthday" name="Date_of_Birth" class="form-control" placeholder="">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="gender">Gender / Sex</label>
                                                            <select id="gender" name="Gender_Sex" class="form-select">
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                                <option value="3">Non-Binary</option>
                                                                <option value="4">Refuse to Say</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="civilStatus">Civil Status</label>
                                                            <select id="civilStatus" name="Civil_Status" class="form-select">
                                                                <option value="1">Single</option>
                                                                <option value="2">Married</option>
                                                                <option value="3">Divorced</option>
                                                                <option value="4">Widowed</option>
                                                                <option value="5">Separated</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="nationality">Nationality</label>
                                                            <input required type="text" id="nationality" name="Nationality" class="form-control" placeholder="Filipino">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div><!-- end tab-pane -->

                        <!---------------------------- END IAC FORM   ---------------------------->
                        <!---------------------------- START IP FORM   --------------------------->
                                    <div class="tab-pane" id="basictab3" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Specific IP Forms</h4>
                                        <p class="text-muted">Please fill the forms under which IP type you are applying for</p>
                        <!---------------------------- START PATENT FORM   --------------------------->
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Patent / Industrial Design / Utility Model
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <div>
                                                                        <label for="choices-text-remove-button" class="form-label text-muted">Type/s of Invention</label>
                                                                        {{-- <input class="form-control" id="choices-text-remove-button" name="Type of Invention" data-choices data-choices-limit="10" data-choices-removeItem type="text" /> --}}
                                                                        <select id="choices-text-remove-button" name="Type_of_Invention" class="form-select">
                                                                            <option value="1">Material/Compound</option>
                                                                            <option value="2">Process/Method</option>
                                                                            <option value="3">Software/System</option>
                                                                            <option value="4">Device</option>
                                                                            <option value="5">Herbal Medicine/Drugs</option>
                                                                            <option value="6">Industrial Design</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label">Purpose of Invention</label>
                                                                    <input required name="Purpose_of_Invention" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label">Key / Novel features of the Invention</label>
                                                                    <input required name="Key_Novel_Features" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="example-textarea" class="form-label"> Background of the Invention</label>
                                                                    <textarea required name="Background_of_Invention" class="form-control" id="example-textarea" rows="5"></textarea>
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label">Application or Use of Invention</label>
                                                                    <input required name="Application_use_of_Invention" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label"> Stage of Development </label>
                                                                    <input required name="Stage_of_Development" id="basicUser" type="text" class="form-control" placeholder="Technology Status (Prototyping, clinical trial phase 1, etc.)">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label"> R&D Cost </label>
                                                                    <input required name="R_and_D_Cost" id="basicUser" type="text" class="form-control" placeholder="Please provide a range (e.g. 1000 - 2000)">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <div>
                                                                        <label for="choices-text-remove-button" class="form-label text-muted">Potential Partners</label>
                                                                        <input required name="Potential_Partners" class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                <label for="example-select" class="form-label">TRL</label>
                                                                    <select name="TRL" class="form-select" id="example-select">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label">Past Oral Disclosure Date</label>
                                                                    <input name="Past_Oral_Disclosure_Date" type="date" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label">Past Oral Disclosure Description</label>
                                                                    <textarea name="Past_Oral_Disclosure" class="form-control" id="example-textarea" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label">Past Written Disclosure Date</label>
                                                                    <input name="Past_Written_Disclosure_Date" type="date" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label">Past Written Disclosure Description</label>
                                                                    <textarea name="Past_Written_Disclosure" class="form-control" id="example-textarea" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label">Future Disclosure Plans</label>
                                                                    <textarea name="Future_Disclosure_Plans" class="form-control" id="example-textarea" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div class="mb-3">
                                                                    <label class="form-check-label" for="customCheck3">Manuscript / Technical Description / Terminal Report</label>
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
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div class="mb-3">
                                                                    <label class="form-check-label" for="customCheck3">Drawings, Flowcharts, Processes</label>
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
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div class="mb-3">
                                                                    <label class="form-check-label" for="customCheck3">Related Literature or Patents</label>
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
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div class="mb-3">
                                                                    <label class="form-check-label" for="customCheck3">Financial Report</label>
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
                                                    </div>
                                                </div>
                                            </div>
                                            <!---------------------------- START TRADEMARK FORM   --------------------------->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Trademark
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                <label for="example-select" class="form-label">TRL</label>
                                                                <select class="form-select" id="example-select">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!---------------------------- START COPYRIGHT FORM   --------------------------->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Copyright
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!---------------------------- END IP FORM   --------------------------->

                                    <div class="d-flex flex-wrap align-items-center wizard justify-content-between gap-3 mt-3">
                                        <div class="first">
                                            <a href="javascript:void(0);" class="btn btn-soft-primary">
                                                First
                                            </a>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <div class="previous">
                                                <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                    <i class="bx bx-left-arrow-alt me-2"></i>Back To Previous
                                                </a>
                                            </div>
                                            <div class="next">
                                                <a href="javascript:void(0);" class="btn btn-primary">
                                                    Next Step<i class="bx bx-right-arrow-alt ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="last">
                                            <a href="javascript:void(0);" class="btn btn-soft-primary">
                                                Finish
                                            </a>
                                        </div>
                                    </div>
                                </div> <!-- tab-content -->
                            </div> <!-- end #horizontal wizard-->
                        </form>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div> <!-- end row -->
</div>

@endsection

@section('script-bottom')
@vite(['resources/js/components/form-wizard.js'])
@endsection
